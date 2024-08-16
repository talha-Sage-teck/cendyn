<?php

// Include the required pushtechCurlDataHandler file.
require_once ('custom/pushtechCurlDataHandler.php');

// Define the pushtechCurlRequest class.
class pushtechCurlRequest
{
    // Define private class properties.
    private $endpoint;
    private $header;
    private $errors = [];
    private $httpCode;
    private $response;
    private $context;

    // Constructor to initialize the class with URL and context.
    public function __construct($url, $context = [])
    {
        global $sugar_config;

        // Set the API endpoint.
        $this->endpoint = $url;

        // Set default headers including authorization token and content type.
        $this->header = [
            'Authorization:Token token=' . $sugar_config['PUSHTECH_API_KEY'],
            'Content-Type: application/json'
        ];

        // Merge additional headers if provided in context.
        if (isset($context['header']) && is_array($context['header'])) {
            $this->header = array_merge($this->header, $context['header']);
        }

        // Store the entire context data.
        $this->context = $context;
    }

    // Method to execute the cURL request.
    public function executeCurlRequest($requestType, $data = []): array
    {
        // Initialize cURL session.
        $curl = curl_init();

        // Define cURL options.
        $options = [
            CURLOPT_URL => $this->endpoint,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 60,
            CURLOPT_CUSTOMREQUEST => $requestType,
            CURLOPT_HTTPHEADER => $this->header,
        ];

        // If data is provided, encode it to JSON and set it as POSTFIELDS.
        if (!empty($data)) {
            $jsonData = json_encode($data, JSON_NUMERIC_CHECK);
            $options[CURLOPT_POSTFIELDS] = $jsonData;
            // Add Content-Length header.
            $this->header[] = "Content-Length: " . strlen($jsonData);
        } else {
            // Set Content-Length to 0 if no data is provided.
            $this->header[] = 'Content-Length: 0';
        }

        // Set the cURL options.
        curl_setopt_array($curl, $options);
        // Execute the cURL session and store the response.
        $this->response = curl_exec($curl);
        // Get the HTTP status code from the cURL session.
        $this->httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        // Get any cURL error message.
        $errorMessage = curl_error($curl);

        // Decode the JSON response into an array.
        $responseData = json_decode($this->response, true);
        // Add the HTTP status code to the response data.
        $responseData['errorcode'] = $this->httpCode;

        // If the HTTP status code indicates an error or the JSON response is invalid, handle the error.
        if ($this->httpCode >= 400 || json_last_error() !== JSON_ERROR_NONE) {
            $this->handleError($responseData, $data, $errorMessage, $requestType);
            // Store the error using pushtechCurlDataHandler.
            $dataHandler = new pushtechCurlDataHandler();
            $errorId = $dataHandler->storeCurlRequest($this->errors);
            // If an error ID is generated, add it to the response data.
            if ($errorId !== 0) {
                $responseData['errorId'] = $errorId;
            }
        }

        // Close the cURL session.
        curl_close($curl);
        // Return the response data in lowercase.
        return array_change_key_case($responseData, CASE_LOWER);
    }

    // Method to handle errors.
    private function handleError($responseData, $inputData, $errorMessage, $requestType)
    {
        global $sugar_config;

        // Get the module name from the context.
        $relatedToModule = $this->context['module'];

        // Initialize resolution and concerned team variables.
        $resolution = null;
        $concernedTeam = "";
        
        // Handle account not synced errors.
        if ($relatedToModule == "Contacts" && $responseData['errorcode'] == 400 && $responseData['error'][0]['error'] == "Error in updating details, check externalAccountId") {
            $name = "Account Not Synced";
            $relatedToModule = "Contacts";
            $resolution = "Please sync the account before attempting to sync the contact.";
        }
        else if($responseData['errorcode'] == 400){
            if($responseData['error'] == "\nProblem:\n  message body does not match declared format\nResolution:\n  when specifying application/json as content-type, you must pass valid application/json in the request's 'body' "){
                $name = "JSON Format Error";
                $relatedToModule = $this->context['module'];
                $resolution = "Ensure the data passed is in correct JSON format.";
            }
            else{
                $name = "Empty Field Error";
                $relatedToModule = $this->context['module'];
                $resolution = "Ensure none of the fields are empty; refer to the error message.";
            }
        }
        // Additional error handling conditions.
        else {
            // Define error title and empty validation message.
            $errorTitle = isset($responseData['title']) ? $responseData['title'] : '';
            $errorEmptyValidation = 'One or more validation errors occurred.';

            // Define an array that maps conditions to resolutions.
            $resolutionMap = [

                [
                    'condition'=> $responseData['errorcode'] == 401 && $responseData['error'] == 'Your account is not a b2b account to use this API',
                    'name' => "Invalid Company ID",
                    'relatedToModule' => $this->context['module'],
                    'resolution' => "Check the PUSHTECH_API_COMPANY_ID variable in the config_override.php file.",

                ],
                [
                    'condition'=> $responseData['errorcode'] == 401 && $responseData['error'] == 'authorization failure for account: 65faebaaeac4cb0001fb49b4',
                    'name' => "Authorization Failure",
                    'relatedToModule' => $this->context['module'],
                    'resolution' => 'Check the PUSHTECH_API_KEY variable in the config_override.php file.',

                ],
                [
                    'condition'=> $responseData['errorcode'] == 404 && $responseData['error'] == 'Route not found, please visit https://developers.cendyncrm.com/api/reference',
                    'name' => "Invalid API Route",
                    'relatedToModule' => $this->context['module'],
                    'resolution' => "Check the URL of the API.",

                ],
                [
                    'condition'=> $responseData['errorcode'] == 0,
                    'name' => "Invalid API Endpoint",
                    'relatedToModule' => $this->context['module'],
                    'resolution' => "Check the PUSHTECH_API_ENDPOINT variable in the config_override.php file.",

                ],
                
            ];

            // Find the matching resolution based on the first true condition in the $resolutionMap.
            foreach ($resolutionMap as $resolutionEntry) {
                // Check if the condition in the resolution map entry is true.
                if ($resolutionEntry['condition']) {
                    // Set the error name based on the resolution entry.
                    $name = $resolutionEntry['name'];

                    // If relatedToModule is defined in the resolution entry, set it.
                    if (isset($resolutionEntry['relatedToModule'])) {
                        $relatedToModule = $resolutionEntry['relatedToModule'];
                    }

                    // If a resolution is defined in the resolution entry, set it.
                    if (isset($resolutionEntry['resolution'])) {
                        $resolution = $resolutionEntry['resolution'];
                    }

                    // Break the loop after finding the first matching condition.
                    break;
                }
            }
        }

        // If the error name is empty, exit the function.
        if (empty(trim($name)))
            return;

        // Create an error array with relevant information.
        $error = array(
            'name' => $name,
            'endpoint' => $this->endpoint,
            'input_data' => $inputData,
            'http_code' => $responseData['errorcode'],
            'api_response' => $this->response,
            'request_type' => $requestType,
            'action' => 'action',
            // Determine the error message based on the server status or response details.
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

        // Add the error to the error log.
        $this->addError($error);
    }

    // Function to add an error to the error log.
    private function addError($error)
    {
        $this->errors = $error;
    }

}
