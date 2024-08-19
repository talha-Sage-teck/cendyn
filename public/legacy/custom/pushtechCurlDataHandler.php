<?php




class pushtechCurlDataHandler {

    public function __construct() {
        // Initialization if needed
    }

    /**
     * Store cURL request errors in the custom module. 
     *
     * @param array $error The error details to be stored.
     * @return int The ID of the stored error log.
     */
    public function storeCurlRequest(array $error){
        $moduleName = 'CB2B_AutomatedMonitoring'; 
        $customModuleBean = BeanFactory::newBean($moduleName);

        // Prepare query parameters and conditions
        $queryParams = [
            'related_to_module' => $error['related_to_module'] ?? null,
            'name' => $error['name'] ?? null,
            'http_code' => $error['http_code'] ?? null,
            'deleted' => 0
        ];

        $conditionClauses = [];
        foreach ($queryParams as $field => $value) {
            if ($value !== null) {
                $conditionClauses[] = "$field = " . $customModuleBean->db->quoted($value);
            }
        }

        // Build query to check existing error status
        $errorStatusCondition = "(error_status = 'new' OR error_status = 'processed')";

        if (in_array($error['related_to_module'], ['Accounts', 'Contacts', 'PMS_Profile'])) {
            $errorStatusCondition .= " AND parent_id = " . $customModuleBean->db->quoted($error['parent_id'] ?? null);
        }

        $conditionClauses[] = $errorStatusCondition;

        $whereClause = implode(' AND ', $conditionClauses);
        $query = "SELECT * FROM {$customModuleBean->table_name} WHERE $whereClause";

        // Execute query
        $record = $customModuleBean->db->query($query, true);

        // If no record found, create a new error log
        if ($record->num_rows === 0 && !empty($error['name'])) {
            $customModuleBean->name = $error['name'];
            $customModuleBean->description = $error['description'] ?? null;
            $customModuleBean->related_to_module = $error['related_to_module'] ?? null;
            $customModuleBean->error_status = $error['error_status'] ?? 'new';
            $customModuleBean->api_response = $error['api_response'] ?? null;
            $customModuleBean->api_url = $error['endpoint'] ?? null;
            $customModuleBean->request_type = $error['request_type'] ?? null;
            $customModuleBean->http_code = $error['http_code'] ?? null;
            $customModuleBean->operation = $error['action_type'] ?? null;
            $customModuleBean->input_data = json_encode($error['input_data']) ?? null;
            $customModuleBean->reported_time = date("Y-m-d H:i:s");
            $customModuleBean->parent_id = $error['parent_id'] ?? null;
            $customModuleBean->parent_type = $error['parent_type'] ?? null;
            $customModuleBean->schedulersjob_id = $GLOBALS["jobq"]->job->id ?? null;
            $customModuleBean->scheduler_id = $GLOBALS["jobq"]->job->scheduler_id ?? null;
            $customModuleBean->assigned_user_id = $error['assigned_user_id'] ?? null;
            $customModuleBean->resolution = $error['resolution'] ?? null;
            $customModuleBean->concerned_team = $error['concerned_team'] ?? "b2b_dev_team";

            if ($customModuleBean->save()) {
                return $customModuleBean->id;
            }
        }

        return 0;
    }

    /**
     * Resolve error by updating its status to 'resolved'.
     *
     * @param string $id The ID of the error to be resolved.
     * @param string $getBy The field to match for the update.
     * @param string|null $res Additional resolution details.
     */
    public function resolveError(string $id, string $getBy, ?string $res = null) {
        global $db;

        $updateQuery = "UPDATE cb2b_automatedmonitoring SET error_status = 'resolved' WHERE $getBy = " . $db->quoted($id);
        $db->query($updateQuery);
    }

    /**
     * Resolve errors with specific names by updating their status to 'resolved'.
     *
     * @param array $errorNames List of error names to be resolved.
     * @param string|null $id Optional ID for filtering.
     * @param string|null $module Optional module name for filtering.
     */
    public function resolveErrorWithName(array $errorNames, ?string $id = null, ?string $module = null) {
        global $db;

        $errorNames = "'" . implode("', '", $errorNames) . "'";
        $selectQuery = "SELECT * FROM cb2b_automatedmonitoring WHERE name IN ($errorNames) AND error_status = 'new'";

        if ($id) {
            $selectQuery .= " AND parent_id = " . $db->quoted($id);
        }

        if ($module) {
            $selectQuery .= " AND related_to_module = " . $db->quoted($module);
        }

        $rows = $db->query($selectQuery);

        while ($row = $rows->fetch_assoc()) {
            $updateQuery = "UPDATE cb2b_automatedmonitoring SET error_status = 'resolved' WHERE id = " . $db->quoted($row['id']);
            $db->query($updateQuery);
        }
    }

    /**
     * Check for validation and resolve errors based on provided details.
     *
     * @param object $bean The bean object to check.
     * @param array $errorsName List of error names to check.
     * @param string $module The module name for filtering.
     */
    public function checkForValidationAndResolve($bean, array $errorsName, string $module) {
        $errorArray = [];

        foreach ($errorsName as $key => $error) {
            if (!empty(trim($bean->$key))) {
                $errorArray[] = $error;
            }
        }

        if (!empty($errorArray)) {
            $this->resolveErrorWithName($errorArray, $bean->id, $module);
        }
    }
}

