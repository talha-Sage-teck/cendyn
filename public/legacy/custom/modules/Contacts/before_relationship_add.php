<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeRelationshipAddHandler
{
    function setReadyToLink(&$bean, $event, $arguments) {
        global $db;
        if($arguments['module'] == "Contacts" && $arguments['related_module'] == "Accounts" && !$bean->fromScheduler) {
            $selectContact = "SELECT * FROM contacts WHERE id='{$bean->id}'";
            $selectContactResult = $db->query($selectContact);
            $contact = $db->fetchByAssoc($selectContactResult);
            if($contact && $contact['last_sync_date'] != null) {
                $selectAccountQuery = "SELECT * FROM accounts_contacts WHERE contact_id='{$bean->id}' ORDER BY date_modified DESC LIMIT 1";
                $selectAccountResult1 = $db->query($selectAccountQuery);
                if($rel = $db->fetchByAssoc($selectAccountResult1)) {
                    if($rel['account_id'] != $arguments['related_id']) {
                        $bean->ready_to_sync = 4;
                        $bean->skipBeforeSave = true;
                    }
                }
                else if($selectAccountResult1->num_rows == 0) {
                    $bean->ready_to_sync = 4;
                    $bean->skipBeforeSave = true;
                }
            }
        }
    }
}
