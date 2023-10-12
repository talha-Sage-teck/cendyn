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

require_once('custom/CurlRequest.php');
require_once('custom/CurlDataHandler.php');

$job_strings[] = 'syncLinkedProfiles';

function sendDeleteLinkData($profileID, $accountID) {
    global $sugar_config;

    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );

    $url = "/b2b/B2BPMSProfilesToAccountsMapping/delete";
    $curlRequest = new CurlRequest($url, [
        'module' => 'PMSProfiles',
        'action' => 'Delete Relationship',
        'record_id' => $profileID,
        'header' => array(

        ),
    ]);

    $response = $curlRequest->executeCurlRequest("POST", $data);

//    $curl = curl_init();
//
//    $endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" .
//        $sugar_config['EINSIGHT_API_COMPANY_ID'] . "/b2b/B2BPMSProfilesToAccountsMapping/delete";
//    $object = array(
//        CURLOPT_URL => $endpoint,
//        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_FOLLOWLOCATION => true,
//        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//        CURLOPT_CUSTOMREQUEST => 'POST',
//        CURLOPT_POSTFIELDS => json_encode($data),
//        CURLOPT_HTTPHEADER => array(
//            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
//            'Content-Type: application/json'
//        ),
//    );
//    curl_setopt_array($curl, $object);
//    $response = curl_exec($curl);
//    curl_close($curl);

    if($response['errorcode'] == 200 || $response['errorcode'] == 201) {
        return true;
    }
    else {
        return false;
    }
}

function sendLinkData($profileID, $accountID, $newAccountID = null) {
    global $sugar_config;

    $is_update = 0;
    if($newAccountID != null)
        $is_update = 1;
    $data = array(
        'profileId' => $profileID,
        'externalAccountId' => $accountID
    );
    if($is_update == 1)
        $data['newExternalAccountId'] = $newAccountID;

    $url = "/b2b/B2BPMSProfilesToAccountsMapping/" . (($is_update == 1) ? "update" : "add");
    $curlRequest = new CurlRequest($url, [
        'module' => 'PMSProfiles',
        'action' => (($is_update == 1) ? "Update Relationship" : "Add Relationship"),
        'record_id' => $profileID,
        'header' => array(

        ),
    ]);

    $response = $curlRequest->executeCurlRequest("POST", $data);
    $GLOBALS['log']->fatal("Data of PMS Profile: ". json_encode($data));

    $GLOBALS['log']->fatal("Response of PMS Profile: ". $response);

//    $curl = curl_init();
//
//    $is_update = 0;
//    if($newAccountID != null)
//        $is_update = 1;
//    $data = array(
//        'profileId' => $profileID,
//        'externalAccountId' => $accountID
//    );
//    if($is_update == 1)
//        $data['newExternalAccountId'] = $newAccountID;
//
//    $endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/" .
//        $sugar_config['EINSIGHT_API_COMPANY_ID'] . "/b2b/B2BPMSProfilesToAccountsMapping/" .
//        (($is_update == 1) ? "update" : "add");
//
//    $object = array(
//        CURLOPT_URL => $endpoint,
//        CURLOPT_RETURNTRANSFER => true,
//        CURLOPT_FOLLOWLOCATION => true,
//        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//        CURLOPT_CUSTOMREQUEST => 'POST',
//        CURLOPT_POSTFIELDS => json_encode($data),
//        CURLOPT_HTTPHEADER => array(
//            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
//            'Content-Type: application/json'
//        ),
//    );
//    curl_setopt_array($curl, $object);
//    $response = curl_exec($curl);
//    curl_close($curl);
    if($response['errorcode'] == 200 || $response['errorcode'] == 201) {
        $GLOBALS['log']->debug($response);
        return true;
    }
    else {
        return false;
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
        $GLOBALS['log']->debug("syncLinkedProfiles: Previous Account ID not found during relationship delete");
        return 0;
    }
}

// Function to check if the input string is a valid GUID format
function is_valid_guid($guid) {
    return preg_match('/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/', $guid);
}

function syncLinkedProfiles() {
    global $db;
    $accountRel = "accounts_cb2b_pmsprofiles_1";
    $selectQuery = "SELECT * FROM cb2b_pmsprofiles WHERE ready_to_link > 0 AND deleted = 0";
    $selectResult = $db->query($selectQuery);

    $dataHandler = new CurlDataHandler();

    while($profile = $db->fetchByAssoc($selectResult)) {
        $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $profile['id']);
        $profileBean->load_relationship($accountRel);

        if (!is_valid_guid($profileBean->id)) {
            $error = array(
                'name' => "ProfileId should be the 36 char length",
                'endpoint' => null,
                'input_data' => null,
                'http_code' => null,
                'request_type' => null,
                'curl_error_message' => null,
                'resolution' => null,
                'error_status' => 'new',
                'related_to_module' => 'PMSProfiles',
                'parent_id' => $profileBean->id,
                'parent_type' => "PMSProfiles",
                'concerned_team' => "b2b_dev_team",
                'assigned_user_id' => 1,
                'action_type' => 'Add Relationship',
                'api_response' => null
            );

            $dataHandler->storeCurlRequest($error);
            continue;
        } else {
            $errorNameArray = ['ProfileId should be the 36 char length'];
            $dataHandler->resolveErrorWithName($errorNameArray, $profileBean->id, 'CB2B_PMSProfiles');
        }

        $accounts = $profileBean->$accountRel->getBeans();

        foreach($accounts as $account) {
            $res = false;
//            if($account->ready_to_sync == 0) {
                switch($profileBean->ready_to_link) {
                    case 1:
                        $res = sendLinkData($profileBean->id, $account->id);
                        break;
                    case 2:
                        $res = sendLinkData($profileBean->id, getPrevAccountID($profileBean->id), $account->id);
                        break;
                    case 3:
                        $res = sendDeleteLinkData($profileBean->id, getPrevAccountID($profileBean->id));
                        break;
                    default:
                        $GLOBALS['log']->debug("syncLinkedProfiles: Unexpected flag in scheduler");
                        break;
                }
                if($res) {
                    $profileBean->ready_to_link = 0;
                    $profileBean->save();
                    $dataHandler->resolveError($profileBean->id, 'parent_id');
                }
                else {
                    $GLOBALS['log']->debug("syncLinkedProfiles: Could not sync with eInsight.");
                }
//            }
//            else {
//                $GLOBALS['log']->debug("syncLinkedProfiles: The account related to profile with ID {$profileBean->id}".
//                    " is not yet synchronized with eInsight. Account ID: {$account->id}");
//            }
        }
        
//        if($profileBean->ready_to_link > 0) {
//            $res = sendDeleteLinkData($profileBean->id, getPrevAccountID($profileBean->id));
//            if($res) {
//                $profileBean->ready_to_link = 0;
//                $profileBean->save();
//            }
//        }
    }
    return true;
}

?>
