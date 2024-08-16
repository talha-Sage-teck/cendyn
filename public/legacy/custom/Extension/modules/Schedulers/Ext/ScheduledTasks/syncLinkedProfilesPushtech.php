<?php

/**
 *  This scheduler runs every day and syncs the linked profiles to PushTech
 * @Conditions:
 * 1. ready_to_link flag must be set for account
 * @Actions:
 * 1. Send relationship data to PushTech API
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('custom/pushtechCurlRequest.php');
require_once('custom/pushtechCurlDataHandler.php');

$job_strings[] = 'syncLinkedProfilesPushTech';

function sendDeleteLinkDataPushTech($profileID, $accountID) {
    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );

    $url = "/PushTech/PMSProfilesToAccountsMapping/delete";
    $curlRequest = new CurlRequest($url, [
        'module' => 'CB2B_PMSProfiles',
        'action' => 'Delete Relationship',
        'record_id' => $profileID,
        'header' => array(),
    ]);

    $response = $curlRequest->executeCurlRequest("POST", $data);

    if ($response['errorcode'] == 200 || $response['errorcode'] == 201) {
        return true;
    } else {
        return false;
    }
}

function sendLinkDataPushTech($profileID, $accountID, $newAccountID = null) {
    $is_update = 0;
    if ($newAccountID != null) {
        $is_update = 1;
    }
    
    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );
    
    if ($is_update == 1) {
        $data['newExternalAccountId'] = $newAccountID;
    }

    $url = "/PushTech/PMSProfilesToAccountsMapping/" . (($is_update == 1) ? "update" : "add");
    $curlRequest = new CurlRequest($url, [
        'module' => 'CB2B_PMSProfiles',
        'action' => (($is_update == 1) ? "Update Relationship" : "Add Relationship"),
        'record_id' => $profileID,
        'header' => array(),
    ]);

    $response = $curlRequest->executeCurlRequest("POST", $data);
    $GLOBALS['log']->fatal("Data of PMS Profile: " . json_encode($data));
    $GLOBALS['log']->fatal("Response of PMS Profile: " . $response);

    if ($response['errorcode'] == 200 || $response['errorcode'] == 201) {
        $GLOBALS['log']->debug($response);
        return true;
    } else {
        return false;
    }
}

function getPrevAccountIDPushTech($profileID) {
    global $db;
    $accountRel = "accounts_cb2b_pmsprofiles_1";
    $prevRelQuery = "SELECT * FROM `{$accountRel}_c` WHERE `{$accountRel}cb2b_pmsprofiles_idb`='{$profileID}'" .
            " AND deleted = 1 ORDER BY `date_modified` DESC LIMIT 1";
    $prevRelResult = $db->query($prevRelQuery);
    if ($prevRelResult->num_rows > 0) {
        return $db->fetchByAssoc($prevRelResult)["{$accountRel}accounts_ida"];
    } else {
        $GLOBALS['log']->debug("syncLinkedProfilesPushTech: Previous Account ID not found during relationship delete");
        return 0;
    }
}


function syncLinkedProfilesPushTech() {
    global $db;
    $accountRel = "accounts_cb2b_pmsprofiles_1";
    $selectQuery = "SELECT * FROM cb2b_pmsprofiles WHERE ready_to_link > 0 AND deleted = 0";
    $selectResult = $db->query($selectQuery);

    $dataHandler = new CurlDataHandler();

    while ($profile = $db->fetchByAssoc($selectResult)) {
        $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $profile['id']);
        $profileBean->load_relationship($accountRel);


        $accounts = $profileBean->$accountRel->getBeans();

        foreach ($accounts as $account) {
            $res = false;
            switch ($profileBean->ready_to_link) {
                case 1:
                    $res = sendLinkDataPushTech($profileBean->id, $account->id);
                    break;
                case 2:
                    $res = sendLinkDataPushTech($profileBean->id, getPrevAccountIDPushTech($profileBean->id), $account->id);
                    break;
                case 3:
                    $res = sendDeleteLinkDataPushTech($profileBean->id, getPrevAccountIDPushTech($profileBean->id));
                    break;
                default:
                    $GLOBALS['log']->debug("syncLinkedProfilesPushTech: Unexpected flag in scheduler");
                    break;
            }
            if ($res) {
                $profileBean->ready_to_link = 0;
                $profileBean->save();
            } else {
                $GLOBALS['log']->debug("syncLinkedProfilesPushTech: Could not sync with PushTech.");
            }
        }
    }
    return true;
}
