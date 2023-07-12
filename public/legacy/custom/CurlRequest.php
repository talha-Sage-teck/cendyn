<?php

class CurlRequest {
    private $endpoint;
    private $header;
    private $errors = array();
    private $serverStatus;
    public $serverUrl;
    private $context;
    private $httpCode;
    private $response;


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
    public function executeCurlRequest($requestType, $data = null) : string {
        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');

        $curl = curl_init();

        $object = array(
            CURLOPT_URL => $this->endpoint,
            CURLOPT_RETURNTRANSFER => true,
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

        if ($responseData['Status'] == 200 || $responseData['Status'] == 201) {
            $GLOBALS['log']->debug($this->response);
        } else {
            $this->handleError($responseData, $data, $errorMessage, $requestType);
            $this->storeCurlRequest();
        }

        return $this->response;
    }

    private function storeCurlRequest() {
        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');

        $customModuleBean->name = $this->errors['name'];
        $customModuleBean->description = $this->errors['curl_error_message'];
        $customModuleBean->related_to_module = $this->errors['related_to_module'];
        $customModuleBean->error_status = $this->errors['error_status'];
        $customModuleBean->api_response = $this->errors['api_response'];
        $customModuleBean->api_url = $this->errors['endpoint'];
        $customModuleBean->request_type = $this->errors['request_type'];
        $customModuleBean->http_code = $this->errors['http_code'];
        $customModuleBean->operation = $this->errors['action_type'];
        $customModuleBean->input_data = json_encode($this->errors['input_data']);
        $customModuleBean->reported_time = date("Y-m-d H:i:s");
        $customModuleBean->parent_id = $this->errors['parent_id'];
        $customModuleBean->parent_type = $this->errors['parent_type'];

        $customModuleBean->save();
    }

    private function handleError($responseData, $inputData, $errorMessage, $requestType) {
        // Store the error information
        if ($responseData === null || $responseData === "") {
            $name = "Url malformed";
        } else {
            $name = $responseData['Type'] . ' ' . $responseData['Title'];
        }

        $error = array(
            'name' => $name,
            'endpoint' => $this->endpoint,
            'input_data' => $inputData,
            'http_code' => ($responseData === null || $responseData === "") ? $this->httpCode : $responseData['Status'],
            'api_response' => $this->response,
            'request_type' => $requestType,
            'action' => 'action',
            'curl_error_message' => ($this->serverStatus == 'down') ? $errorMessage : $responseData['Detail'],
            'action_type' => $this->context['action'],
            'resolution' => 'resolution',
            'error_status' => 'new',
            'related_to_module' => $this->context['module'],
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
