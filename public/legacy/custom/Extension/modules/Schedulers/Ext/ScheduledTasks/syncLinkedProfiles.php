<?php

/**
 *  This scheduler runs every day and syncs the linked profiles to eInsight
 * @Conditions:
 * 1. ready_to_link flag must be set for account
 * @Actions:
 * 1. Send relationship data to API
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'syncLinkedProfiles';

function sendDeleteLinkData($profileID, $accountID) {
    global $sugar_config;
    $curl = curl_init();
    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );
    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" .
        $sugar_config['EINSIGHT_API_COMPANY_ID'] . "/b2b/B2BPMSProfilesToAccountsMapping/delete";
    $object = array(
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
            'Content-Type: application/json'
        ),
    );
    curl_setopt_array($curl, $object);
    $response = curl_exec($curl);
    curl_close($curl);
    if($response != "") {
        $GLOBALS['log']->fatal($response);
        return false;
    }
    else {
        return true;
    }
}

function sendLinkData($profileID, $accountID, $newAccountID = null) {
    global $sugar_config;
    $curl = curl_init();

    $is_update = 0;
    if($newAccountID != null)
        $is_update = 1;
    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );
    if($is_update == 1)
        $data['newExternalAccountId'] = $newAccountID;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" .
        $sugar_config['EINSIGHT_API_COMPANY_ID'] . "/b2b/B2BPMSProfilesToAccountsMapping/" .
        (($is_update == 1) ? "update" : "add");

    $object = array(
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
            'Content-Type: application/json'
        ),
    );
    curl_setopt_array($curl, $object);
    $response = curl_exec($curl);
    curl_close($curl);
    if($response != "") {
        $GLOBALS['log']->fatal($response);
        return false;
    }
    else {
        return true;
    }
}

function getPrevAccountID($profileID) {
    global $db;
    $accountRel = "accounts_cb2b_pmsprofiles_1";
    $prevRelQuery = "SELECT * FROM `{$accountRel}_c` WHERE `{$accountRel}cb2b_pmsprofiles_idb`='{$profileID}'" .
        " AND deleted = 1 ORDER BY `date_modified` DESC LIMIT 1";
    $prevRelResult = $db->query($prevRelQuery);
    if($prevRelResult->num_rows > 0) {
        return $db->fetchByAssoc($prevRelResult)["{$accountRel}accounts_ida"];
    }
    else {
        $GLOBALS['log']->fatal("syncLinkedProfiles: Previous Account ID not found during relationship delete");
        return 0;
    }
}

function syncLinkedProfiles() {
    global $db;
    $accountRel = "accounts_cb2b_pmsprofiles_1";
    $selectQuery = "SELECT * FROM cb2b_pmsprofiles WHERE ready_to_link > 0 AND deleted = 0";
    $selectResult = $db->query($selectQuery);
    while($profile = $db->fetchByAssoc($selectResult)) {
        $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $profile['id']);
        $profileBean->load_relationship($accountRel);
        $accounts = $profileBean->$accountRel->getBeans();
        foreach($accounts as $account) {
            $res = false;
            if($account->ready_to_sync == 0) {
                switch($profileBean->ready_to_link) {
                    case 1:
                        $res = sendLinkData($profileBean->id, $account->id);
                        break;
                    case 2:
                        $res = sendLinkData($profileBean->id, getPrevAccountID($profileBean->id), $account->id);
                        break;
                    case 3:
                        break;
                    default:
                        $GLOBALS['log']->fatal("syncLinkedProfiles: Unexpected flag in scheduler");
                        break;
                }
                if($res) {
                    $profileBean->ready_to_link = 0;
                    $profileBean->save();
                }
                else {
                    $GLOBALS['log']->fatal("syncLinkedProfiles: Could not sync with eInsight.");
                }
            }
            else {
                $GLOBALS['log']->fatal("syncLinkedProfiles: The account related to profile with ID {$profileBean->id}".
                    " is not yet synchronized with eInsight. Account ID: {$account->id}");
            }
        }
        if($profileBean->ready_to_link > 0) {
            $res = sendDeleteLinkData($profileBean->id, getPrevAccountID($profileBean->id));
            if($res) {
                $profileBean->ready_to_link = 0;
                $profileBean->save();
            }
        }
    }
    return true;
}

?>
