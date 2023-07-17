<?php
// CustomCRMDataHandler.php

class CurlDataHandler
{
    private $errors;

    public function __construct($errors)
    {
        $this->errors = $errors;
    }

    public function storeCurlRequest()
    {
        $customModuleBean = BeanFactory::newBean('CB2B_AutomatedMonitoring');

        // Set the query parameters
        $queryParams = array(
            'related_to_module' => $this->errors['related_to_module'],
            'name' => $this->errors['name'],
            'http_code' => $this->errors['http_code'],
        );

        // Create a new SugarQuery instance
        $query = new SugarQuery();

        // Build the query
        $query->from($customModuleBean);
        $query->where()->equals($queryParams);

        // Add the 'orWhere' condition
        $query->orWhere()->equals('error_status', 'Processed');

        // Retrieve the record
        $records = $query->execute();

        // Check if a record was found
        if (empty($records)) {
            $customModuleBean->name = $this->errors['name'] ?? null;
            $customModuleBean->description = $this->errors['curl_error_message'] ?? null;
            $customModuleBean->related_to_module = $this->errors['related_to_module'] ?? null;
            $customModuleBean->error_status = $this->errors['error_status'] ?? null;
            $customModuleBean->api_response = $this->errors['api_response'] ?? null;
            $customModuleBean->api_url = $this->errors['endpoint'] ?? null;
            $customModuleBean->request_type = $this->errors['request_type'] ?? null;
            $customModuleBean->http_code = $this->errors['http_code'] ?? null;
            $customModuleBean->operation = $this->errors['action_type'] ?? null;
            $customModuleBean->input_data = json_encode($this->errors['input_data']) ?? null;
            $customModuleBean->reported_time = date("Y-m-d H:i:s");
            $customModuleBean->parent_id = $this->errors['parent_id'] ?? null;
            $customModuleBean->parent_type = $this->errors['parent_type'] ?? null;
            $customModuleBean->schedulersjob_id = $GLOBALS["jobq"]->job->id;
            $customModuleBean->scheduler_id = $GLOBALS["jobq"]->job->scheduler_id;

            $customModuleBean->save();
        } else {
            // No record found
            // echo 'No record found.';
        }

        return;
    }
}
