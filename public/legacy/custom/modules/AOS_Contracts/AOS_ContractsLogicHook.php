<?php

class AOS_ContractsLogicHook {

    public function linkAssociatedHotelsFromImport($bean, $events, $args) {
        if ($bean->in_import && !empty($bean->cb2b_hotels_id)) {
            // Delete the existing Hotel(s) Relationship with this Contract
            global $db;
            if (!empty($bean->id)) {
                $query = "UPDATE aos_contracts_cb2b_hotels_2_c SET deleted = 1 WHERE aos_contracts_cb2b_hotels_2aos_contracts_ida = '{$bean->id}';";
                $db->query($query, true);
            }
            // Get the Hotel Ids
            $hotelIds = explode(",", $bean->cb2b_hotels_id);
            foreach ($hotelIds as $hotelId) {
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $insertQuery = "INSERT INTO aos_contracts_cb2b_hotels_2_c (id, date_modified, deleted, 
                    aos_contracts_cb2b_hotels_2aos_contracts_ida, 
                    aos_contracts_cb2b_hotels_2cb2b_hotels_idb) 
                    VALUES('{$guid}', '{$now}', '0', '{$bean->id}', '{$hotelId}')";
                $db->query($insertQuery);
            }
        }
    }

}
