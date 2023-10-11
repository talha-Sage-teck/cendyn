<?php
// CustomCRMDataHandler.php

class CurlDataHandler
{
    public function __construct()
    {

    }

    public function storeCurlRequest($error)
    {
        $moduleName = 'CB2B_AutomatedMonitoring';
        $customModuleBean = BeanFactory::newBean($moduleName);

        // Set the query parameters
        $queryParams = array(
            'related_to_module' => $error['related_to_module'],
            'name' => $error['name'],
            'http_code' => $error['http_code'],
            'deleted' => 0
        );

        // Build the SQL query for the parameters with AND conditions
        $conditionClauses = array();
        foreach ($queryParams as $field => $value) {
            if (!empty($value) || $value === 0) {
                $conditionClauses[] = "$field = " . $customModuleBean->db->quoted($value);
            }
        }

        // Build the SQL query for the 'error_status' with OR condition
        $errorStatusCondition = "(error_status = " . $customModuleBean->db->quoted('new') . " OR error_status = " . $customModuleBean->db->quoted('processed') . ")";

        // Add the additional condition to the $errorStatusCondition
        if ($error['related_to_module'] === 'Accounts' || $error['related_to_module'] === 'Contacts') {
            $errorStatusCondition .= " AND (related_to_module = " . $customModuleBean->db->quoted('Accounts') . " OR related_to_module = " . $customModuleBean->db->quoted('Contacts') . ") AND parent_id = " . $customModuleBean->db->quoted($error['parent_id']);
        }

        if (!empty($conditionClauses)) {
            $conditionClauses[] = $errorStatusCondition;
        } else {
            $conditionClauses[] = "($errorStatusCondition)";
        }

        // Combine all conditions using AND operator
        $whereClause = implode(' AND ', $conditionClauses);

        // Build the full query
        $query = "SELECT * FROM {$customModuleBean->table_name} WHERE $whereClause";

        // Execute the query and get the results
        $record = $customModuleBean->db->query($query, true);

        // If the record with "new" error_status is not found, try finding a record with "Processed" error_status
        if ($record->num_rows === 0 && !empty($error['name'])) {
            $customModuleBean->name = $error['name'];
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
            $customModuleBean->assigned_user_id = $error['assigned_user_id'] ?? null;
            $customModuleBean->resolution = $error['resolution'] ?? null;
            $customModuleBean->concerned_team = $error['concerned_team'] ?? "b2b_dev_team";

            if($customModuleBean->save()) {
                return $customModuleBean->id;
            }
        } else {
            // No record found
            // echo 'No record found.';
        }

        return 0;
    }

    function resolveError($id, $getBy, $res = null) {
        global $db;

        // Update the error_status based on $getBy and $id
        $updateQuery = "UPDATE CB2B_AutomatedMonitoring SET error_status = 'resolved' WHERE $getBy = '$id'";
        $db->query($updateQuery);

        $specificNames = ['Unsupported API version error', 'Url malformed', 'API Not Accessible', 'Bad API key'];
        $this->resolveErrorWithName($specificNames);
    }

    function resolveErrorWithName($errorNames, $id = null, $module = null) {
        global $db;

        // Create a comma-separated list of specific names
        $errorNames = "'" . implode("', '", $errorNames) . "'";

        // Construct the initial SQL query to select records based on specific names
        $selectQuery = "SELECT * FROM CB2B_AutomatedMonitoring WHERE name IN ($errorNames)";
        $selectQuery .= " AND error_status = 'new'";

        // If $module is not null, add a WHERE clause to filter by relate_id
        if (!is_null($id)) {
            $selectQuery .= " AND related_to_module = '$module' AND parent_id = '$id'";
        }

        $rows = $db->query($selectQuery);

        // Fetch rows one by one and update their error_status
        if ($rows) {
            while ($row = $rows->fetch_assoc()) {
                $updateQuery = "UPDATE CB2B_AutomatedMonitoring SET error_status = 'resolved' WHERE id = '{$row['id']}'";
                $db->query($updateQuery);
            }
        }
    }

    function checkForValidationAndResolve($bean, $errorsName, $module) {
        $errorArray = [];

        foreach ($errorsName as $key => $error) {
            if (!empty(trim($bean->$key))) {
                $errorArray[] = $error;
            }
        }

        if(!empty($errorArray))
            $this->resolveErrorWithName($errorArray, $bean->id, $module);
    }
}
