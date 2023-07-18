<?php

/**
 *  This scheduler runs every 10 minutes and matches PMS Profiles with Accounts on the basis of the set criteria in
 *  PMS Profiles Criteria config
 * @Conditions:
 * 1. Any of the criteria match
 * @Info
 * `is_update_dup`='0'  Need to process
 * `is_update_dup`='-1' Already Processed
 * `is_update_dup`='-2' Processed and Linked through Scheduler
 * `is_auto_linking`='0' Means Linked Manually
 * `is_auto_linking`='1' Means Auto Linked by Scheduler
 * @Test
 *  1 pms profile can be matched to multiple accounts (for that match rule) = don't link
  1 pms profile can be matched to multiple accounts for any other match rules = don't link
  1 pms profile can be matched to one account for any rule = link


  Ahmad's Company (PMS Profile) and Ahmad's Company (2 accounts same name)
  If name, type, city, zip, country are same on more than one accounts with pms profile = no match
  If name, type, email are same on more than one account = no match
  BUT if name, type, and phone ONLY match with one account = match that account with the profile

  PMS A (Rule 1) Accounts A/B = don't link
  PMS A (Rule 2) Account A = link
  PMS A (Rule 3) Accounts B = don't link because Rule 2 has priority
 * @Actions:
 * 1. Relate the Accounts and PMS Profiles
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('custom/CurlDataHandler.php');

$job_strings[] = 'autoLinkingPMSProfilesAndAccounts';

function getAllPMSProfileIds() {
    global $db;
    $profileIds = array();

    $getPMSProfileIdsQuery = "SELECT 
    id
FROM
    cb2b_pmsprofiles
WHERE
    deleted = 0 AND is_update_dup = 0";
    $result = $db->query($getPMSProfileIdsQuery, true);
    if ($result->num_rows > 0) {
        while ($row = $db->fetchByAssoc($result)) {
            $profileIds[] = $row['id'];
        }
    }

    return $profileIds;
}

function getRuleQuery($fields) {
    global $sugar_config;
    $joinPieceQuery = '';
    $leftSelectList = array('L.id AS accountId');
    $rightSelectList = array('R.id AS profileId');
    $rightWhereList = array();

    foreach ($fields as $key => $field) {
        // If field is email then we have to add the custom Query because
        // in Accounts Email field is the widget while in PMS Profile it's a varchar field
        if ($field == 'email') {
            // If it's the first feied then we don't need to add the AND in query otherwise add AND
            if ($key != 0) {
                $joinPieceQuery .= " AND";
            }
            $joinPieceQuery .= " (SELECT 
                    GROUP_CONCAT(email_address) AS email_address
                FROM
                    email_addresses eadd
                        JOIN
                    email_addr_bean_rel eabr
                WHERE
                    eadd.id = eabr.email_address_id
                        AND eabr.bean_id = L.id
                        AND eadd.deleted = '0'
                        AND eabr.deleted = '0'
                ORDER BY eadd.id ASC) LIKE CONCAT('%', R.{$field}, '%')";
        } else {
            if ($key != 0) {
                $joinPieceQuery .= " AND";
            }
            $joinPieceQuery .= " R.{$field} = L.{$sugar_config['PMS_PROFILES_ACCOUNTS_AUTOLINKING_FIELDS'][$field]}";
        }

        // PMS Profile SELECT Fields list
        array_push($rightSelectList, "R." . $field);
        // PMS Profile WHERE Fields list
        array_push($rightWhereList, "AND R." . $field . " != '' AND R." . $field . " IS NOT NULL");
        // Accounts SELECT Fields list
        if ($field == 'email') {
            array_push($leftSelectList, "(SELECT 
                    GROUP_CONCAT(email_address) AS email_address
                FROM
                    email_addresses eadd
                        JOIN
                    email_addr_bean_rel eabr
                WHERE
                    eadd.id = eabr.email_address_id
                        AND eabr.bean_id = L.id
                        AND eadd.deleted = '0'
                        AND eabr.deleted = '0'
                ORDER BY eadd.id ASC) AS email");
        } else {
            array_push($leftSelectList, "L." . $sugar_config['PMS_PROFILES_ACCOUNTS_AUTOLINKING_FIELDS'][$field]);
        }
    }

    // Put the fields in SELECT area and put the join ON conditions
    $selectMatchingQuery = "SELECT " . implode(', ', $leftSelectList) . ", " . implode(', ', $rightSelectList) . "
FROM
    `accounts` L
        LEFT JOIN
    `cb2b_pmsprofiles` R ON 
        {$joinPieceQuery}
WHERE
    L.deleted = 0 AND R.deleted = 0 AND R.is_update_dup = 0 " . implode(" ", $rightWhereList) . ";";

    return $selectMatchingQuery;
}

function loadMatchingProfileAndAccountRelationship() {
    global $db;
    $profileAndAccountRelationshipArray = array();
    // Query the middle table and find out what PMS Profile and Accounts have already been linked
    // If the PMS Profile and Accounts have already been linked in past or they are currently linked, These
    // PMS Profile and Accounts will never be linked again automatically.
    $query = "SELECT accounts_cb2b_pmsprofiles_1accounts_ida, accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb FROM accounts_cb2b_pmsprofiles_1_c WHERE deleted = 0;";
    $result = $db->query($query, true);

    while ($row = $db->fetchByAssoc($result)) {
        if (is_array($profileAndAccountRelationshipArray[$row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb']])) {
            $profileAndAccountRelationshipArray[$row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb']][] = $row['accounts_cb2b_pmsprofiles_1accounts_ida'];
        } else {
            $profileAndAccountRelationshipArray[$row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb']] = array();
            $profileAndAccountRelationshipArray[$row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb']][] = $row['accounts_cb2b_pmsprofiles_1accounts_ida'];
        }
    }

    return $profileAndAccountRelationshipArray;
}

function checkIfRelationshipAlreadyExists($pmsProfileId, $matchedAccountId, $profileAndAccountRelationshipArray) {
    if (is_array($profileAndAccountRelationshipArray[$pmsProfileId])) {
        if (in_array($matchedAccountId, $profileAndAccountRelationshipArray[$pmsProfileId])) {
            return true;
        } else {
            $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('This PMS Profile ' . $pmsProfileId . ' has already been linked by someone.') : '';
            return true;
        }
    } else {
        return false;
    }
}

function autoLinkingPMSProfilesAndAccounts() {
    global $db, $timedate, $sugar_config;

    // Get Matching Criterias from Configuration
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);
    if ($result->num_rows <= 0) {
        $error = array(
            'name' => "Found No Auto Linking Configuration",
            'endpoint' => null,
            'input_data' => null,
            'http_code' => null,
            'request_type' => null,
            'curl_error_message' => null,
            'resolution' => null,
            'error_status' => 'new',
            'related_to_module' => 'PMS Profile',
            'parent_id' => null,
            'parent_type' => "PMS Profile",
            'concerned_team' => "B2B Dev Team",
            'action_type' => "Auto Link PMS Profiles and Accounts",
            'api_response' => null
        );

        $dataHandler = new CurlDataHandler();
        $dataHandler->storeCurlRequest($error);

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('autoLinkingPMSProfilesAndAccounts --> : Did not found MatchCriteriaConfig') : '';
        return true;
    }

    // Unserialize the Configurations
    $record = $db->fetchByAssoc($result);
    $settings = unserialize(base64_decode($record['value']))['criteria'];

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$settings : ' . print_r($settings, 1)) : '';

    $profileIds = getAllPMSProfileIds();
//    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$profileIds : ' . print_r($profileIds, 1)) : '';


    foreach ($settings as $rule => $fields) {
        // Get Query for each Rule
        $selectMatchingQuery = getRuleQuery($fields);
        $selectMatchingResult = $db->query($selectMatchingQuery);

        $matchingRecords = array();
        $queryArray = array();
        $pmsProfileIds = array();

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('--------------------------------------------------') : '';
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$selectMatchingQuery : ' . print_r($selectMatchingQuery, 1)) : '';
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$selectMatchingResult->num_rows : ' . print_r($selectMatchingResult->num_rows, 1)) : '';

        // If no matching PMS Profile and Account Record for then skip it and look for next Rule
        if ($selectMatchingResult->num_rows <= 0)
            continue;

        // Prepare and array having the profileId as a key and accountId as value Array
        // This will help to identify if we have one Account or multiple Accounts matching a PMS Profile
        while ($matchedProfileAndAccount = $db->fetchByAssoc($selectMatchingResult)) {
            if (is_array($matchingRecords[$matchedProfileAndAccount['profileId']])) {
                $matchingRecords[$matchedProfileAndAccount['profileId']][] = $matchedProfileAndAccount['accountId'];
            } else {
                $matchingRecords[$matchedProfileAndAccount['profileId']] = array();
                $matchingRecords[$matchedProfileAndAccount['profileId']][] = $matchedProfileAndAccount['accountId'];
            }
        }

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Before $matchingRecords : ' . print_r($matchingRecords, 1)) : '';

        $profileAndAccountRelationshipArray = loadMatchingProfileAndAccountRelationship();

//        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$profileAndAccountRelationshipArray : ' . print_r($profileAndAccountRelationshipArray, 1)) : '';

        foreach ($matchingRecords as $key => $value) {
            // If $value > 1, means this PMS Profile can be linked with more than 1 Account, which is not possible
            // So we are not linking it automatically. User will do the manual linking himself.
            // We will only link those PMS Profiles and Accounts which have one to one match (one PMS Profile match to one Account)
            if (count($value) > 1) {
                continue;
            }

            $alreadyExists = checkIfRelationshipAlreadyExists($key, $value[0], $profileAndAccountRelationshipArray);
            if (!$alreadyExists) {
                array_push($pmsProfileIds, $key);
                array_push($queryArray, "('" . create_guid() . "', '{$timedate->nowDb()}', '0', '{$value[0]}', '{$key}', '1')");
                $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Adding Relationship between : ' . print_r($key, 1) . ' AND ' . print_r($value[0], 1)) : '';
            } else {
                $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship already exist between : ' . print_r($key, 1) . ' AND ' . print_r($value[0], 1)) : '';
            }
        }

        if (!empty($queryArray)) {
            // Add the middle table relationship
            $insert = "INSERT INTO accounts_cb2b_pmsprofiles_1_c "
                    . "(`id`, `date_modified`, `deleted`, `accounts_cb2b_pmsprofiles_1accounts_ida`, `accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb`, `is_auto_linking`) "
                    . "VALUES "
                    . implode(", ", $queryArray)
                    . ";";
            $db->query($insert, true);

            // Update the PMSProfile so that it should not appear next time for linking engine and
            // Set the ready_to_link flag so that, it will be linked in eInsight
            $update = "UPDATE `cb2b_pmsprofiles` SET `ready_to_link`='1', `is_update_dup`='-2', `date_modified`='{$timedate->nowDb()}' "
                    . "WHERE `id` IN ('" . implode("','", $pmsProfileIds) . "');";
            $db->query($update, true);
        }

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$insert : ' . print_r($insert, 1)) : '';
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$update : ' . print_r($update, 1)) : '';
    }

    if (!empty($profileIds)) {
        // This will turn all the pms profiles `is_update_dup`='-1' but not those which we have set `is_update_dup`='-2'
        // because they are no longer `is_update_dup`='0'. So where clause save us
        $update = "UPDATE `cb2b_pmsprofiles` SET `is_update_dup`='-1', `date_modified`='{$timedate->nowDb()}' WHERE `id` IN ('" . implode("','", $profileIds) . "') AND `is_update_dup`='0';";
        $db->query($update, true);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$update : ' . print_r($update, 1)) : '';
    }

    return true;
}
