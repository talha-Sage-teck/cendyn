<?php

class AOS_QuotesLogicHook {

    public function linkAssociatedHotelsFromImport($bean, $events, $args) {
        if ($bean->in_import && !empty($bean->cb2b_hotels_id)) {
            // Delete the existing Hotel(s) Relationship with this Quote
            global $db;
            if (!empty($bean->id)) {
                $query = "UPDATE aos_quotes_cb2b_hotels_1_c SET deleted = 1 WHERE aos_quotes_cb2b_hotels_1aos_quotes_ida = '{$bean->id}';";
                $db->query($query, true);
            }
            // Get the Hotel Ids
            $hotelIds = explode(",", $bean->cb2b_hotels_id);
            foreach ($hotelIds as $hotelId) {
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $insertQuery = "INSERT INTO aos_quotes_cb2b_hotels_1_c (id, date_modified, deleted, 
                    aos_quotes_cb2b_hotels_1aos_quotes_ida, 
                    aos_quotes_cb2b_hotels_1cb2b_hotels_idb) 
                    VALUES('{$guid}', '{$now}', '0', '{$bean->id}', '{$hotelId}')";
                $db->query($insertQuery);
            }
        }
    }

}
