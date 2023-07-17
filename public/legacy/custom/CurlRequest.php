<?php

require_once('custom/CurlDataHandler.php');

class CurlRequest {
    private $endpoint;
    private $header;
    private $errors = array();
    private $serverStatus;
    public $serverUrl;
    private $context;
    private $httpCode;
    private $response;
    private $urlDataHandler;


    // Constructor
    public function __construct($url, $context = []) {
        global $sugar_config;

        $this->serverUrl = $sugar_config['EINSIGHT_API_ENDPOINT'];
        $this->endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" . $sugar_config['EINSIGHT_API_COMPANY_ID'] . $url;

//        $this->endpoint = $url;

        $this->header = $context['header'];
        $this->header[] = 'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'];
        $this->header[] = 'Content-Type: application/json';

        $this->context = $context;

        $this->isServerDown();
    }

    /**
     * Executes a cURL request with the provided data and request type.
     *
     * @param array $data The data to send with the request.
     * @param string $requestType The HTTP request type (e.g., GET, POST, PUT).
     * @param string $context Optional context information.
     * @return bool True if the request is successful, false otherwise.
     */
    public function executeCurlRequest($requestType, $data = []) : string {
        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');

        if(!empty($data)) {
            $this->header[] = "Content-Length: " . strlen($data);
        } else {
            $this->header[] = 'Content-Length: 0';
        }

        $curl = curl_init();

        $object = array(
            CURLOPT_URL => $this->endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $requestType,
            CURLOPT_HTTPHEADER => $this->header,
        );

        if($data)
            $object[CURLOPT_POSTFIELDS] = json_encode($data, JSON_NUMERIC_CHECK);

        curl_setopt_array($curl, $object);
        $this->response = curl_exec($curl);
        $this->httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $errorMessage = curl_error($curl);

        curl_close($curl);

        $responseData = json_decode($this->response, true);
        $responseData = array_change_key_case($responseData, CASE_LOWER);

        $GLOBALS['log']->fetal("Custom Response: " . json_encode($responseData));

        if ($responseData['status'] == 200 || $responseData['status'] == 201) {
//            $GLOBALS['log']->debug($this->response);
        } else {
            $this->handleError($responseData, $data, $errorMessage, $requestType);
            $dataHandler = new CurlDataHandler($this->errors);
            $dataHandler->storeCurlRequest();
//            $this->storeCurlRequest();
        }

        return $this->response;
    }

//    private function storeCurlRequest() {
//        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');
//
//        // Set the query parameters
//        $queryParams = array(
//            //'schedulersjob_id' => $GLOBALS['jobq']->job->id,
//            'error_status' => 'new',
//            'related_to_module' => $this->errors['related_to_module'],
//            'name' => $this->errors['name'],
//            'http_code' => $this->errors['http_code'],
//        );
//
//        // Retrieve the record
//        $record = $customModuleBean->retrieve_by_string_fields($queryParams);
//
//        // Check if a record was found
//        if (empty($record)) {
//            $customModuleBean->name = $this->errors['name'];
//            $customModuleBean->description = $this->errors['curl_error_message'];
//            $customModuleBean->related_to_module = $this->errors['related_to_module'];
//            $customModuleBean->error_status = $this->errors['error_status'];
//            $customModuleBean->api_response = $this->errors['api_response'];
//            $customModuleBean->api_url = $this->errors['endpoint'];
//            $customModuleBean->request_type = $this->errors['request_type'];
//            $customModuleBean->http_code = $this->errors['http_code'];
//            $customModuleBean->operation = $this->errors['action_type'];
//            $customModuleBean->input_data = json_encode($this->errors['input_data']);
//            $customModuleBean->reported_time = date("Y-m-d H:i:s");
//            $customModuleBean->parent_id = $this->errors['parent_id'];
//            $customModuleBean->parent_type = $this->errors['parent_type'];
//            $customModuleBean->schedulersjob_id = $GLOBALS["jobq"]->job->id;
//            $customModuleBean->scheduler_id = $GLOBALS["jobq"]->job->scheduler_id;
//
//            $customModuleBean->save();
//        } else {
//            // No record found
////            echo 'No record found.';
//        }
//    }

    private function handleError($responseData, $inputData, $errorMessage, $requestType) {
        $relatedToModule = $this->context['module'];

        if ($responseData === null || $responseData === "") {
            $name = "Url malformed";
            $relatedToModule = "General";
        } else {
            $errorTitle = isset($responseData['title']) ? $responseData['title'] : '';
            $errorEmptyValidation = 'One or more validation errors occurred.';

            switch (true) {
                case !empty($responseData['error']['code']) && $responseData['error']['code'] == 'UnsupportedApiVersion':
                    $name = "Unsupported API version error";
                    $relatedToModule = "General";
                    break;
                case $responseData['type'] == "AuthenticationTicket":
                    $name = "Bad API key";
                    $relatedToModule = "General";
                    break;
                case !empty($responseData['error']['id']) && $errorTitle === $errorEmptyValidation:
                    $name = "ID by default should be set to 0";
                    break;
                case !empty($responseData['error']['insertdate']) && $errorTitle === $errorEmptyValidation:
                    $name = "Date Created should not be Empty or NULL";
                    break;
                case strpos($errorTitle, 'No data present for Account Id') !== false || strpos($errorTitle, 'No data present for External Account Id') !== false:
                    $name = "Record does not Exist in eInsight";
                    break;
                case !empty($responseData['error']['profileid']) && $errorTitle === $errorEmptyValidation:
                    $name = "ProfileId should be the 36 char length";
                    break;
                case strpos($errorTitle, 'Object reference not set to an instance of an object.') !== false:
                    $name = "Contact Email and Account Should not be empty";
                    break;
                case strpos($errorTitle, 'Value cannot be null. (Parameter \'source\')') !== false:
                    $name = "Contact Account Should not be empty";
                    break;
                case !empty($responseData['invalidaccountids']):
                    $name = "Invalid Accout Linked to Contact";
                    break;
                default:
                    $name = $errorTitle;
            }
        }


        $error = array(
            'name' => $name,
            'endpoint' => $this->endpoint,
            'input_data' => $inputData,
            'http_code' => ($responseData === null || $responseData === "") ? $this->httpCode : $responseData['status'],
            'api_response' => $this->response,
            'request_type' => $requestType,
            'action' => 'action',
            'curl_error_message' => ($this->serverStatus == 'down') ? $errorMessage : $responseData['Detail'],
            'action_type' => $this->context['action'],
            'resolution' => 'resolution',
            'error_status' => 'new',
            'related_to_module' => $relatedToModule,
            'parent_id' => $this->context['record_id'],
            'parent_type' => $this->context['module'],
        );

        $this->addError($error);
    }

    public function isServerDown() : bool {
        $socket = @fsockopen($this->serverUrl, 80, $errorCode, $errorMessage, 3);
        if ($socket) {
            fclose($socket);
            $this->serverStatus = 'running';
            return false; // Server is up and running
        }

        $this->serverStatus = 'down';
        return true; // Server is down or unreachable
    }

    public function getErrors() : array {
        return $this->errors;
    }

    private function addError($error) {
        $this->errors = $error;
    }
}
