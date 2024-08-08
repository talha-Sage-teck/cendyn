<?php

class OpportunityLogicHook {

    public function processLostReason($bean, $events, $args) {
        if ($bean->sales_stage !== "Closed_Lost") {
            $bean->lost_reason = "";
        }
    }

    public function linkAssociatedHotelsFromImport($bean, $events, $args) {
        if ($bean->in_import && !empty($bean->cb2b_hotels_id)) {
            // Delete the existing Hotel(s) Relationship with this Opportunity
            global $db;
            if (!empty($bean->id)) {
                $query = "UPDATE opportunities_cb2b_hotels_1_c SET deleted = 1 WHERE opportunities_cb2b_hotels_1opportunities_ida = '{$bean->id}';";
                $db->query($query, true);
            }
            // Get the Hotel Ids
            $hotelIds = explode(",", $bean->cb2b_hotels_id);
            foreach ($hotelIds as $hotelId) {
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $insertQuery = "INSERT INTO opportunities_cb2b_hotels_1_c (id, date_modified, deleted, 
                    opportunities_cb2b_hotels_1opportunities_ida, 
                    opportunities_cb2b_hotels_1cb2b_hotels_idb) 
                    VALUES('{$guid}', '{$now}', '0', '{$bean->id}', '{$hotelId}')";
                $db->query($insertQuery);
            }
        }
    }

}
