<?php

/**
 *  This scheduler runs every 1 minute and checks if a contract's status needs to be set to "Expired" in case Expiry
 *  time < current time
 * @Conditions:
 * 1. Expiry time AND expiry time < current time
 * @Actions:
 * 1. Set status field to "expired"
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'updateContractsStatus';

function updateContractsStatus() {
    global $db;

    $query = "UPDATE aos_contracts SET status='E' WHERE deleted = 0 AND status != 'E' AND date_end IS NOT NULL AND date_end != '' AND date_end <= NOW()";
    if(!$db->query($query))
        $GLOBALS['log']->fatal("MYSQL Error: Could not update contracts' status in scheduler.");

    return true;
}
