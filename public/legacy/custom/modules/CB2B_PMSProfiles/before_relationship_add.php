<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeRelationshipAddHandler
{
    function setReadyToLink(&$bean, $event, $arguments) {
        if($bean->object_name == "CB2B_PMSProfiles") {
            global $db;
            $accountRel = "accounts_cb2b_pmsprofiles_1";
            $prevRelQuery = "SELECT * FROM `{$accountRel}_c` WHERE `{$accountRel}cb2b_pmsprofiles_idb`='{$bean->id}'" .
            " AND deleted = 1 ORDER BY `date_modified` DESC LIMIT 1";
            $prevRelResult = $db->query($prevRelQuery);
            if($prevRelResult->num_rows > 0) {
                $prevAccount = $db->fetchByAssoc($prevRelResult)["{$accountRel}accounts_ida"];
                if($prevAccount !== $bean->accounts_cb2b_pmsprofiles_1accounts_ida) {
                    $bean->ready_to_link = 2;
                    $bean->save();
                }
            }
            else {
                $bean->ready_to_link = 1;
                $bean->save();
            }
        }
    }
}
