<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class afterRelationshipDeleteHandler {

    function setReadyToLinkAfterDelete(&$bean, $event, $arguments) {
        global $db;
        if ($arguments['module'] == "Contacts" && $arguments['related_module'] == "Accounts") {
            $selectContact = "SELECT * FROM contacts WHERE id='{$bean->id}' and deleted = '0'";
            $selectContactResult = $db->query($selectContact);
            $contact = $db->fetchByAssoc($selectContactResult);
            if ($contact && $contact['last_sync_date'] != null) {
                if ($bean->deleted == 0) {
                    $bean->ready_to_sync = 4;
                    $bean->skipBeforeSave = true;
                    $updateQ = "UPDATE contacts SET `ready_to_sync`='4' WHERE id='{$bean->id}' and deleted = '0'";
                    if (!$db->query($updateQ)) {
                        $GLOBALS['log']->fatal("Error updating Contact {$bean->id} on Unlinking.");
                    }
                }
            }
        }
    }

}
