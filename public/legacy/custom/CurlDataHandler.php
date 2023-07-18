<?php
// CustomCRMDataHandler.php

class CurlDataHandler
{

    public function __construct()
    {

    }

    public function storeCurlRequest($error)
    {
        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');

        // Set the query parameters
        $queryParams = array(
            'related_to_module' => $error['related_to_module'],
            'name' => $error['name'],
            'http_code' => $error['http_code'],
            'error_status' => 'Processed'
        );

        // Retrieve the record with "new" error_status
        $record = $customModuleBean->retrieve_by_string_fields($queryParams);

        // If the record with "new" error_status is not found, try finding a record with "Processed" error_status
        if (empty($record)) {
            $queryParams['error_status'] = 'new';
            $record = $customModuleBean->retrieve_by_string_fields($queryParams);

            // Check if a record was found
            if (empty($record)) {
                $customModuleBean->name = $error['name'] ?? null;
                $customModuleBean->description = $error['curl_error_message'] ?? null;
                $customModuleBean->related_to_module = $error['related_to_module'] ?? null;
                $customModuleBean->error_status = $error['error_status'] ?? null;
                $customModuleBean->api_response = $error['api_response'] ?? null;
                $customModuleBean->api_url = $error['endpoint'] ?? null;
                $customModuleBean->request_type = $error['request_type'] ?? null;
                $customModuleBean->http_code = $error['http_code'] ?? null;
                $customModuleBean->operation = $error['action_type'] ?? null;
                $customModuleBean->input_data = json_encode($error['input_data']) ?? null;
                $customModuleBean->reported_time = date("Y-m-d H:i:s");
                $customModuleBean->parent_id = $error['parent_id'] ?? null;
                $customModuleBean->parent_type = $error['parent_type'] ?? null;
                $customModuleBean->schedulersjob_id = $GLOBALS["jobq"]->job->id;
                $customModuleBean->scheduler_id = $GLOBALS["jobq"]->job->scheduler_id;

                $customModuleBean->save();
            } else {
                // No record found
                // echo 'No record found.';
            }
        }
    }
}
