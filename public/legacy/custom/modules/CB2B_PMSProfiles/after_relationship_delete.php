<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class afterRelationshipDeleteHandler
{
    function setReadyToLinkAfterDelete(&$bean, $event, $arguments) {
        if($bean->object_name == "CB2B_PMSProfiles" && $arguments['related_module'] == "Accounts") {
            $bean->ready_to_link = 3;

            // unset is_update_dup after deleting relationship so that this profile does not stop relating accounts in future
            $bean->is_update_dup = 0;

            $bean->save();
        }
    }
}
