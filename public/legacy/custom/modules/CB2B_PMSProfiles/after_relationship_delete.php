<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class afterRelationshipDeleteHandler
{
    function setReadyToLinkAfterDelete(&$bean, $event, $arguments) {
        if($bean->object_name == "CB2B_PMSProfiles" && $arguments['related_module'] == "Accounts") {
            $bean->ready_to_link = 3;
            $bean->save();
        }
    }
}
