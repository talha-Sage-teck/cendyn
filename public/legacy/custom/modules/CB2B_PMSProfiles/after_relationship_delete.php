<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class afterRelationshipDeleteHandler
{
    function setReadyToLinkAfterDelete(&$bean, $event, $arguments) {
        if($bean->object_name == "CB2B_PMSProfiles" && $arguments['related_module'] == "Accounts") {

            $bean->db->query("Update cb2b_pmsprofiles set ready_to_link=3 where id='{$bean->id}'");
//            $bean->ready_to_link = 3;
//            $bean->save();
        }
    }
}
