<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class afterRelationshipDeleteHandler
{
    function setReadyToLinkAfterDelete(&$bean, $event, $arguments) {
        if($arguments['module'] == "Contacts" && $arguments['related_module'] == "Accounts") {
            $bean->ready_to_sync = 4;
            $bean->skipBeforeSave = true;
        }
    }
}
