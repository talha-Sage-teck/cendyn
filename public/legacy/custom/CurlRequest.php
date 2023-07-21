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
        // $this->isServerDown();
    }

    /**
     * Execute a cURL request and handle the response.
     *
     * @param string $requestType The HTTP request type (e.g., "GET", "POST", "PUT", etc.).
     * @param array $data The data to be sent in the request (optional).
     *
     * @return string The response received from the server.
     */
    public function executeCurlRequest($requestType, $data = []) : string {
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
        $responseData = array_change_key_case($responseData, CASE_LOWER);

        // Log the response using the "fatal" log level.
        $GLOBALS['log']->fatal("Custom Response: " . $this->response);

        // Check if the response status is successful (HTTP status 200 or 201).
        if ($responseData['status'] == 200 || $responseData['status'] == 201 || isset($responseData['data'])) {
            // If successful, you may optionally log the response using the "debug" log level.
            // $GLOBALS['log']->debug($this->response);
        } else {
            // If the response status is not successful, handle the error.
            $this->handleError($responseData, $data, $errorMessage, $requestType);

            // Create a CurlDataHandler instance and store the cURL request details.
            $dataHandler = new CurlDataHandler();
            $dataHandler->storeCurlRequest($this->errors);
        }

        // Return the response received from the server.
        return $this->response;
    }

    private function handleError($responseData, $inputData, $errorMessage, $requestType) {
        $relatedToModule = $this->context['module'];

        $resolution = null;
        $concernedTeam = "b2b_dev_team";

        if ($responseData === null || $responseData === "" ) {
            $name = "Url malformed";
            $concernedTeam = "it_team";
            $relatedToModule = "General";
            $resolution = "Please Check EINSIGHT_API_ENDPOINT / EINSIGHT_API_VERSION / EINSIGHT_API_COMPANY_ID variables in config_override.php file. Below are the sample values.
            \$sugar_config['EINSIGHT_API_ENDPOINT'] = 'https://eu02b2bapidev.cendyn.com';
            \$sugar_config['EINSIGHT_API_KEY'] = '09F26AA0-007D-4193-8D96-941171BCE9D6';
            \$sugar_config['EINSIGHT_API_VERSION'] = '1';
            \$sugar_config['EINSIGHT_API_COMPANY_ID'] = '10014'";
        } else {
            $errorTitle = isset($responseData['title']) ? $responseData['title'] : '';
            $errorEmptyValidation = 'One or more validation errors occurred.';

            // Define an array that maps conditions to resolutions.
            $resolutionMap = [
                [
                    'condition' => !empty($responseData['error']['code']) && $responseData['error']['code'] == 'UnsupportedApiVersion',
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
                    'condition' => !empty($responseData['error']['id']) && $errorTitle === $errorEmptyValidation,
                    'name' => "ID by default should be set to 0",
                    'resolution' => "eInsight Request Object should set the <id> parameter to 0."
                ],
                [
                    'condition' => !empty($responseData['error']['insertdate']) && $errorTitle === $errorEmptyValidation,
                    'name' => "Date Created should not be Empty or NULL",
                    'resolution' => "Get the Account Record ID and Search the Record in Database or CRM. Check <date_entered> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => strpos($errorTitle, 'No data present for Account Id') !== false && strpos($responseData['type'], 'System.Exception') !== false,
                    'name' => "Record does not Exist in eInsight",
                    'resolution' => "Get the Account Record ID and Search the Record in eInsight, make sure the same record with the ID does not exist. Open the CRM Database, Search the Account Record by ID and Update the ready_to_sync flag to 1."
                ],
                [
                    'condition' => strpos($errorTitle, 'No data present for External Account Id') !== false && strpos($responseData['type'], 'System.Exception') !== false,
                    'name' => "Record does not Exist in eInsight",
                    'resolution' => "Make sure the Post B2B Accounts Service Scheduler is Active, If not then activate the Scheduler. If the issue is not resolved automatically follow the below steps.
                                    Get the PMS Profile Record ID and Search the Record in CRM.
                                    Get the Related Account Record ID and Search the Record in CRM Database. 
                                    If the Related Account Record is found in the Database set the <ready_to_sync> flag to 1.
                                    If the Related Account Record is not found in the Database, remove the PMS Profile and Account Relationship from the accounts_cb2b_pmsprofiles_1_c table.",
                ],
                [
                    'condition' => !empty($responseData['error']['profileid']) && $errorTitle === $errorEmptyValidation,
                    'name' => "ProfileId should be the 36 char length",
                    'resolution' => "PMS Profile ID should be 36 char long."
                ],
                [
                    'condition' => strpos($errorTitle, 'Object reference not set to an instance of an object.') !== false,
                    'name' => "Contact Email and Account Should not be empty",
                    'resolution' => "Get the Contact Record ID and Search the Record in CRM. Check <ACCOUNT NAME> and <EMAIL ADDRESS> field should not be empty for the Failed Record."
                ],
                [
                    'condition' => strpos($errorTitle, 'Value cannot be null. (Parameter \'source\')') !== false,
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
                    'condition' => strpos($responseData['type'], 'System.ArgumentException') !== false && strpos($responseData['title'], 'External Account Id cannot be empty'),
                    'resolution' => "Get the Account Record ID and Search the Record in Database or CRM. Check id field should not be empty for the Failed Record.",
                ],
                [
                    'name' => 'Contact already exist with contact id',
                    'condition' => strpos($responseData['type'], 'System.Exception') !== false && strpos($responseData['title'], 'Contact already exist with contact id'),
                    'resolution' => "Get the Contact Record ID and Search the Record in eInsight, make sure the same record with the ID exist. Open the CRM Database, Search the Contact Record by ID and Update the ready_to_sync flag to 2.",
                ],
                [
                    'name' => 'Accounts doesnot exist in Accounts table',
                    'condition' => strpos($responseData['type'], 'System.Exception') !== false && strpos($responseData['title'], 'Accounts does not exist in Accounts table'),
                    'resolution' => "Make sure the Post B2B Accounts Service Scheduler is Active, If not then activate the Scheduler. If the issue is not resolved automatically follow the below steps.
                                    Get the Contact Record ID and Search the Record in CRM.
                                    Get the Related Account Record ID and Search the Record in CRM Database. 
                                    If the Related Account Record is found in the Database set the <ready_to_sync> flag to 1.
                                    If the Related Account Record is not found in the Database, remove the Contact and Account Relationship from the accounts_contacts table.",
                ],
                [
                    'condition' => strpos($responseData['type'], 'System.Exception') !== false && strpos($responseData['title'], 'No data present for EXternal Contact Id'),
                    'resolution' => "Open the CRM Database, Search the Contact Record by ID and Update the ready_to_sync flag to 1.",
                    'name' => "No data present for EXternal Contact Id"
                ],
                // Add more conditions and their corresponding resolutions as needed.
                // ...
                // Default resolution
                [
                    'condition' => true,
                    'name' => $errorTitle,
                ],
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
