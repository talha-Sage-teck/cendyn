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

function getRow($id) {
    global $db;
    $result = $db->query("SELECT * FROM accounts WHERE id='{$id}'");
    return $db->fetchByAssoc($result);
}

function makeTree($account, $data = [], $index = 0) {
    if($account) {
        if($account->load_relationship('members')) {
            $subAccounts = $account->members->get();
            foreach ($subAccounts as $subAccount) {
                $row = getRow($subAccount);
                if($row) {
                    $row["ind"] = $index;
                    $data[] = $row;
                    $rowBean = BeanFactory::getBean('Accounts', $row['id']);
                    if ($rowBean)
                        $data = makeTree($rowBean, $data, $index + 1);
                }
            }
            return $data;
        }
        else
            return $data;
    }
    else {
        $GLOBALS['log']->fatal("Could not load sub-accounts for record ID {$account->id}");
        return $data;
    }
}

$recordId = $_REQUEST['record'];
$account = BeanFactory::getBean('Accounts', $recordId);
$data = makeTree($account);
echo json_encode($data);
