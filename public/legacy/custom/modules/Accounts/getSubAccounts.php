<?php
/***
 * Get subaccounts related to the given record
 * @Objectives
 * 1. Return the subaccounts in JSON form
 * @Input
 * Record ID
 * @Output
 * JSON array with subAccounts
 */

function backTraverse($database, $account, $depth = 0) {
    global $sugar_config;
    if($account) {
        if ($account['parent_id'] && trim($account['parent_id']) !== "") {
            $master = $database[$account['parent_id']];
            if($depth < $sugar_config['account_max_children_depth'])
                return backTraverse($database, $master, $depth + 1);
            else
                return $master;
        }
        else
            return $account;
    }
    else
        $GLOBALS['log']->debug("Parent for record ID could not be loaded");
    return $account;
}

function makeTree($database, $children, $account, $marked, $data = [], $index = 0) {
    global $sugar_config;
    if($account) {
        $row = $account;
        if(!empty($row)) {
            if($row['id'] == $marked)
                $row['marked'] = 1;
            else
                $row['marked'] = 0;
            $row["ind"] = $index;
            $data[] = $row;
            if(!empty($children[$row['id']])) {
                foreach ($children[$row['id']] as $child) {
                    if ($child && $index < $sugar_config['account_max_children_depth'])
                        $data = makeTree($database, $children, $database[$child], $marked, $data, $index + 1);
                }
                return $data;
            }
            else
                return $data;
        }
        else
            return $data;
    }
    else {
        $GLOBALS['log']->debug("Could not load sub-accounts for record ID");
        return $data;
    }
}

function makeDatabase($databaseResult): array
{
    global $db;
    $database = [];
    $children=[];
    while($row = $db->fetchByAssoc($databaseResult)) {
        $database[$row['id']] = $row;
        if($row[$row['parent_id']]['deleted'] == 0) {
            if (!isset($children[$row['parent_id']])) {
                $children[$row['parent_id']] = [];
            }
            $children[$row['parent_id']][] = $row['id'];
        }
    }
    return array($database, $children);
}

global $db, $sugar_config;
//$recordIds = $_REQUEST['records'];
$databaseQuery = "SELECT id, name, account_base_type, billing_address_city, billing_address_country, b2b_account_no, iata, parent_id, deleted FROM accounts WHERE deleted = 0";
$databaseResult = $db->query($databaseQuery);
list($database, $children) = makeDatabase($databaseResult);
//$recordIdsArr = explode(',', $recordIds);
//$records = [];
//foreach ($recordIdsArr as $recordId) {
//    $records[$recordId] = $database[$recordId];
//}
//$master = backTraverse($database, $account);
//$data = makeTree($database, $children, $master, $account['id']);
$data = array(
    'accounts' => $database,
    'children' => $children,
    'max_depth' =>  $sugar_config['account_max_children_depth'],
//    'records' => $records
);
echo json_encode($data, JSON_NUMERIC_CHECK);
