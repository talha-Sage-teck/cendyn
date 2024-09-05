<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'accountLevelScheduler';

// Function to process the database result and build a hierarchy
function makeDatabase($databaseResult): array
{
    global $db;
    $database = [];
    $children = [];
    global $app_list_strings;

    while ($row = $db->fetchByAssoc($databaseResult)) {
        $row['account_base_type'] = $app_list_strings['account_base_list'][$row['account_base_type']];
        $row['billing_address_country'] = $app_list_strings['cendyn_country_list'][$row['billing_address_country']];
        $database[$row['id']] = $row;

        if (!isset($children[$row['parent_id']])) {
            $children[$row['parent_id']] = [];
        }
        $children[$row['parent_id']][] = $row['id'];
    }

    return array($database, $children);
}

// Function to calculate the account level
function calculateAccountLevel($accountId, $database, $children)
{
    $hasParent = !empty($database[$accountId]['parent_id']);
    $hasChildren = isset($children[$accountId]) && count($children[$accountId]) > 0;

    if ($hasChildren && !$hasParent) {
        return 'MAC';  // Master
    } elseif ($hasChildren && $hasParent) {
        return 'ACC';  // Parent
    } elseif (!$hasChildren && $hasParent) {
        return 'SUB';  // Sub-Account
    }

    return '';  // Default
}


function accountLevelScheduler()
{
    global $db;

    // Query to get account data
    $databaseQuery = "SELECT id, name, account_base_type, billing_address_city, billing_address_country, parent_id FROM accounts WHERE deleted = 0";
    $databaseResult = $db->query($databaseQuery);

    list($database, $children) = makeDatabase($databaseResult);

    // Update the account levels in the database
    foreach ($database as $id => $account) {
        $level = calculateAccountLevel($id, $database, $children);

        // Update the database with the calculated account level
        $updateQuery = "UPDATE accounts SET account_level = '{$level}' WHERE id = '{$id}'";
        $db->query($updateQuery);
    }
    return true;
}