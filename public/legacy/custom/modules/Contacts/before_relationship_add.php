<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeRelationshipAddHandler
{

    function setReadyToLink(&$bean, $event, $arguments)
    {
        global $db;
        $updateFlag = false;

        if ($arguments['module'] == "Contacts" && $arguments['related_module'] == "Accounts") {
            $selectContact = "SELECT * FROM contacts WHERE id='{$bean->id}' and deleted = '0'";
            $selectContactResult = $db->query($selectContact);
            $contact = $db->fetchByAssoc($selectContactResult);
            if ($contact && $contact['last_sync_date'] != null) {
                $selectAccountQuery = "SELECT * FROM accounts_contacts WHERE contact_id='{$bean->id}' "
                    . "and deleted='0' ORDER BY date_modified DESC LIMIT 1";
                $selectAccountResult1 = $db->query($selectAccountQuery);
                if ($rel = $db->fetchByAssoc($selectAccountResult1)) {
                    if ($rel['account_id'] != $arguments['related_id']) {
                        $bean->ready_to_sync = 4;
                        $bean->last_sync_date = $contact['last_sync_date'];
                        $bean->skipBeforeSave = true;
                        $updateFlag = true;
                    }
                } else if ($selectAccountResult1->num_rows == 0) {
                    $bean->ready_to_sync = 4;
                    $bean->last_sync_date = $contact['last_sync_date'];
                    $bean->skipBeforeSave = true;
                    $updateFlag = true;
                }

                if ($updateFlag) {
                    $updateQ = "UPDATE contacts SET `ready_to_sync`='4' WHERE id='{$bean->id}' and deleted = '0'";
                    if (!$db->query($updateQ)) {
                        $GLOBALS['log']->fatal("Error updating Contact {$bean->id} on Linking.");
                    }
                }
            }
        }
    }

}
