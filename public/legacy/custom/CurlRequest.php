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


    /**
     * Class constructor.
     *
     * @param string $url The URL for the specific API endpoint.
     * @param array $context Additional context data, including the header and other information (optional).
     */
    public function __construct($url, $context = []) {
        global $sugar_config;

        // Set the server URL from the configuration.
        $this->serverUrl = $sugar_config['EINSIGHT_API_ENDPOINT'];

        // Build the complete API endpoint URL.
        $this->endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" . $sugar_config['EINSIGHT_API_COMPANY_ID'] . $url;

        // Set the default headers with X-Api-Key and Content-Type.
        $this->header = [
            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
            'Content-Type: application/json'
        ];

        // Merge any additional headers from the context data if provided.
        if (isset($context['header']) && is_array($context['header'])) {
            $this->header = array_merge($this->header, $context['header']);
        }

        // Store the entire context data.
        $this->context = $context;

        // Check server status (if necessary) - Uncomment this line if needed.
//         $this->isServerDown();
    }

    /**
     * Execute a cURL request and handle the response.
     *
     * @param string $requestType The HTTP request type (e.g., "GET", "POST", "PUT", etc.).
     * @param array $data The data to be sent in the request (optional).
     *
     * @return string The response received from the server.
     */
    public function executeCurlRequest($requestType, $data = []) : array {
        // Initialize the cURL session.
        $curl = curl_init();

        // Set cURL options.
        $options = array(
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

        // If data is provided, JSON-encode it and set the "Content-Length" header.
        if (!empty($data)) {
            $jsonData = json_encode($data, JSON_NUMERIC_CHECK);
            $this->header[] = "Content-Length: " . strlen($jsonData);
            $options[CURLOPT_POSTFIELDS] = $jsonData;
        } else {
            // If no data is provided, set "Content-Length" to 0.
            $this->header[] = 'Content-Length: 0';
        }

        // Set the cURL options.
        curl_setopt_array($curl, $options);

        // Execute the cURL request and get the response.
        $this->response = curl_exec($curl);

        // Get the HTTP response code and any error message.
        $this->httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $errorMessage = curl_error($curl);

        // Close the cURL session.
        curl_close($curl);

        // Decode the response JSON and convert keys to lowercase.
        $responseData = json_decode($this->response, true);

        // Add error code to the responseData
        $responseData['errorCode'] = $this->httpCode;

        $responseData = array_change_key_case($responseData, CASE_LOWER);

        // Log the response using the "fatal" log level.
        $GLOBALS['log']->fatal("Custom Response: " . $this->response);

        // Check if the response status is successful (HTTP status 200 or 201).
        $status = $responseData['status'];
        $errorcode = $responseData['errorcode'];
        $dataExists = isset($responseData['data']);
        if (in_array($status, [200, 201]) || $dataExists || in_array($errorcode, [200, 201])) {
            // If successful, you may optionally log the response using the "debug" log level.
            // $GLOBALS['log']->debug($this->response);
        } else {
            // If the response status is not successful, handle the error.
            $this->handleError($responseData, $data, $errorMessage, $requestType);

            // Create a CurlDataHandler instance and store the cURL request details.
            $dataHandler = new CurlDataHandler();
            $errorId = $dataHandler->storeCurlRequest($this->errors);
            if ($errorId != 0) {
                $responseData['errorId'] = $errorId;
            }
        }

        // Return the response received from the server.
        return $responseData;
    }

    private function handleError($responseData, $inputData, $errorMessage, $requestType) {
        global $sugar_config;

        $relatedToModule = $this->context['module'];

        $resolution = null;
        $concernedTeam = "b2b_dev_team";

        if ($responseData === null || $responseData === "" || $responseData['errorcode'] === 0 ) {
            $name = "Url malformed";
            $concernedTeam = "it_team";
            $relatedToModule = "General";
            $resolution = "Please Check EINSIGHT_API_ENDPOINT / EINSIGHT_API_VERSION / EINSIGHT_API_COMPANY_ID variables in config_override.php file. Below are the sample values.
            \$sugar_config['EINSIGHT_API_ENDPOINT'] = 'https://eu02b2bapidev.cendyn.com';
            \$sugar_config['EINSIGHT_API_KEY'] = '09F26AA0-007D-4193-8D96-941171BCE9D6';
            \$sugar_config['EINSIGHT_API_VERSION'] = '1';
            \$sugar_config['EINSIGHT_API_COMPANY_ID'] = '10014'";
        } else if (strpos($this->response, 'HTTP Error 500.30 - ANCM In-Process Start Failure') !== false) {
            $name = "API Not Accessible";
            $concernedTeam = "it_team";
            $relatedToModule = "General";
            $resolution = "Please visit " . $sugar_config['EINSIGHT_API_ENDPOINT'] . "/swagger/index.html";
        } else {
            $errorTitle = isset($responseData['title']) ? $responseData['title'] : '';
            $errorEmptyValidation = 'One or more validation errors occurred.';

            // Define an array that maps conditions to resolutions.
            $resolutionMap = [
                [
                    'condition' => $relatedToModule == "Accounts" && $responseData['errorcode'] > 400 && $responseData['message'] == "Account already exists",
                    'name' => "Record Already Exist",
                    'relatedToModule' => "Accounts",
                    'resolution' => "Get the Account Record ID and Search the Record in eInsight, make sure the same record with the ID exist. Open the CRM Database, Search the Account Record by ID and Update the ready_to_sync flag to 2.",
                ],
                [
                    'condition' => $responseData['errorcode'] && $responseData['message'] == 'Unsupported API version requested.',
                    'name' => "Unsupported API version error",
                    'relatedToModule' => "General",
                    'resolution' => "Please Check EINSIGHT_API_VERSION variable in config_override.php file. It should have the Valid API Version.",
                ],
                [
                    'condition' => $responseData['type'] == "AuthenticationTicket",
                    'name' => "Bad API key",
                    'relatedToModule' => "General",
                    'resolution' => "Please Check EINSIGHT_API_KEY variable in config_override.php file. It should have the Valid API Key setup.",
                ],
                [
                    'condition' => !empty($responseData['errors']['id']) && $errorTitle === $errorEmptyValidation,
                    'name' => "ID by default should be set to 0",
                    'resolution' => "eInsight Request Object should set the <id> parameter to 0."
                ],
                [
                    'condition' => !empty($responseData['message']['insertDate']),
                    'name' => "Date Created should not be Empty or NULL",
                    'resolution' => "Get the Account Record ID and Search the Record in Database or CRM. Check <date_entered> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => strpos($responseData['message'], 'No data present for Account Id') !== false && $responseData['errorcode'] == 404,
                    'name' => "Record does not Exist in eInsight",
                    'resolution' => "Get the Account Record ID and Search the Record in eInsight, make sure the same record with the ID does not exist. Open the CRM Database, Search the Account Record by ID and Update the ready_to_sync flag to 1."
                ],
                [
                    'condition' => (strpos($responseData['message'], 'No data present for External Account Id') !== false || strpos($responseData['message'], 'No data present with Suite CRM Account Id') !== false) && $responseData['errorcode'] == 404,
                    'name' => "Record does not Exist in eInsight",
                    'resolution' => "Make sure the Post B2B Accounts Service Scheduler is Active, If not then activate the Scheduler. If the issue is not resolved automatically follow the below steps.
                                    Get the PMS Profile Record ID and Search the Record in CRM.
                                    Get the Related Account Record ID and Search the Record in CRM Database. 
                                    If the Related Account Record is found in the Database set the <ready_to_sync> flag to 1.
                                    If the Related Account Record is not found in the Database, remove the PMS Profile and Account Relationship from the accounts_cb2b_pmsprofiles_1_c table.",
                ],
                [
                    'condition' => !empty($responseData['message']['profileId']) && $responseData['errorcode'] == 400,
                    'name' => "ProfileId should be the 36 char length",
                    'resolution' => "PMS Profile ID should be 36 char long."
                ],
                [
                    'condition' => !empty($responseData['message']['insertDate']),
                    'name' => "Date Created should not be Empty or NULL",
                    'resolution' => "Get the Account Record ID and Search the Record in Database or CRM.
                    Check <date_entered> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => strpos($responseData['message'], 'Object reference not set to an instance of an object.') !== false,
                    'name' => "Contact Email and Account Should not be empty",
                    'resolution' => "Get the Contact Record ID and Search the Record in CRM. Check <ACCOUNT NAME> and <EMAIL ADDRESS> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => strpos($responseData['message'], 'Value cannot be null. (Parameter \'source\')') !== false,
                    'name' => "Contact Account Should not be empty",
                    'resolution' => "Get the Contact Record ID and Search the Record in CRM. Check <ACCOUNT NAME> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => !empty($responseData['invalidaccountids']),
                    'name' => "Invalid Account Linked to Contact",
                    'resolution' => "Make sure the Post B2B Accounts Service Scheduler is Active, If not then activate the Scheduler. If the issue is not resolved automatically follow the below steps.
                                    Get the Contact Record ID and Search the Record in CRM.
                                    Get the Related Account Record ID and Search the Record in CRM Database. 
                                    If the Related Account Record is found in the Database set the <ready_to_sync> flag to 1.
                                    If the Related Account Record is not found in the Database, remove the Contact and Account Relationship from the accounts_contacts table."
                ],
                [
                    'name' => 'External Account Id cannot be empty',
                    'condition' => $responseData['errorcode'] == 400 && $responseData['message'] = 'External Account Id cannot be empty',
                    'resolution' => "Get the Account Record ID and Search the Record in Database or CRM. Check id field should not be empty for the Failed Record.",
                ],
                [
                    'name' => 'Contact already exist with contact id',
                    'condition' => $responseData['errorcode'] == 409 && strpos($responseData['message'], 'Contact already exist with Contact Id') !== false,
                    'resolution' => "Get the Contact Record ID and Search the Record in eInsight, make sure the same record with the ID exist. Open the CRM Database, Search the Contact Record by ID and Update the ready_to_sync flag to 2.",
                ],
                [
                    'name' => 'Accounts doesnot exist in Accounts table',
                    'condition' => $responseData['errorcode'] == 404 && strpos($responseData['message'], 'Accounts does not exist in Accounts table') !== false,
                    'resolution' => "Make sure the Post B2B Accounts Service Scheduler is Active, If not then activate the Scheduler. If the issue is not resolved automatically follow the below steps.
                                    Get the Contact Record ID and Search the Record in CRM.
                                    Get the Related Account Record ID and Search the Record in CRM Database. 
                                    If the Related Account Record is found in the Database set the <ready_to_sync> flag to 1.
                                    If the Related Account Record is not found in the Database, remove the Contact and Account Relationship from the accounts_contacts table.",
                ],
                [
                    'condition' => $responseData['errorcode'] == 404 && strpos($responseData['message'], 'No data present for External Contact Id') !== false,
                    'resolution' => "Open the CRM Database, Search the Contact Record by ID and Update the ready_to_sync flag to 1.",
                    'name' => "No data present for EXternal Contact Id"
                ],
                // Add more conditions and their corresponding resolutions as needed.
                // ...
                // Default resolution
//                [
//                    'condition' => true,
//                    'name' => ($errorTitle) ? $errorTitle : "Unknown",
//                ],
            ];

            // Find the matching resolution based on the first true condition in the $resolutionMap.
            foreach ($resolutionMap as $resolutionEntry) {
                if ($resolutionEntry['condition']) {
                    $name = $resolutionEntry['name'];
                    if (isset($resolutionEntry['relatedToModule'])) {
                        $relatedToModule = $resolutionEntry['relatedToModule'];
                    }
                    if (isset($resolutionEntry['resolution'])) {
                        $resolution = $resolutionEntry['resolution'];
                    }
                    break;
                }
            }
        }

        if (empty(trim($name)))
            return;

        $error = array(
            'name' => $name,
            'endpoint' => $this->endpoint,
            'input_data' => $inputData,
            'http_code' => $responseData['errorcode'],
            'api_response' => $this->response,
            'request_type' => $requestType,
            'action' => 'action',
            'curl_error_message' => ($this->serverStatus == 'down') ? $errorMessage : $responseData['Detail'],
            'action_type' => $this->context['action'],
            'resolution' => $resolution,
            'error_status' => 'new',
            'related_to_module' => $relatedToModule,
            'parent_id' => $this->context['record_id'],
            'parent_type' => $this->context['module'],
            'assigned_user_id' => 1,
            'concerned_team' => $concernedTeam
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
