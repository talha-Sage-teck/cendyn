<?php

/**
 *  This scheduler runs every 10 minutes and matches PMS Profiles with each other on the basis of the set criteria in
 *  PMS Profiles Criteria config
 * @Conditions:
 * 1. Any of the criteria match
 * @Actions:
 * 1. Relate the two PMS Profiles through the relationship "suggested profiles"
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'autoLinkingPMSProfilesAndAccounts';

function getRuleQuery($fields) {
    global $sugar_config;
    $joinPieceQuery = '';
    $leftSelectList = array('L.id AS accountId');
    $rightSelectList = array('R.id AS profileId');

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
    L.deleted = 0 AND R.deleted = 0 AND R.is_update_dup != -1
ORDER BY R.id";

    $selectMatchingQuery .= ";";
    return $selectMatchingQuery;
}

function autoLinkingPMSProfilesAndAccounts() {
    global $db, $timedate, $sugar_config;
    $matchingRecords = array();
    $queryArray = array();
    $pmsProfileIds = array();

    // Get Matching Criterias from Configuration
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);
    if ($result->num_rows <= 0) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('matchPMSProfiles --> : Did not found MatchCriteriaConfig') : '';
        return true;
    }

    // Unserialize the Configurations
    $record = $db->fetchByAssoc($result);
    $settings = unserialize(base64_decode($record['value']))['criteria'];

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$settings : ' . print_r($settings, 1)) : '';

    foreach ($settings as $rule => $fields) {
        // Get Query for each Rule
        $selectMatchingQuery = getRuleQuery($fields);
        $selectMatchingResult = $db->query($selectMatchingQuery);

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$selectMatchingQuery : ' . print_r($selectMatchingQuery, 1)) : '';

        // If no matching PMS Profile and Account Record for then skip it and look for next Rule
        if ($selectMatchingResult->num_rows <= 0)
            continue;

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$selectMatchingResult->num_rows : ' . print_r($selectMatchingResult->num_rows, 1)) : '';

        // Prepare and array having the profileId as a key and accountId as value Array
        // This will help to identify if we have one Account or multiple Accounts matching a PMS Profile 
        while ($matchedProfileAndAccount = $db->fetchByAssoc($selectMatchingResult)) {
            if (is_array($matchingRecords[$matchedProfileAndAccount['profileId']])) {
                // This check will avoid adding more than 1 entry of and account against the PMS Profile key 
                // because this could be possible that a profile matched to same account for each Rule, 
                // So it will add multiple entries of same account against PMS Profile. We have to avoid this 
                // otherwise it will be skipped at this check if (count($value) > 1) {
                if (!in_array($matchedProfileAndAccount['accountId'], $matchingRecords[$matchedProfileAndAccount['profileId']])) {
                    $matchingRecords[$matchedProfileAndAccount['profileId']][] = $matchedProfileAndAccount['accountId'];
                }
            } else {
                $matchingRecords[$matchedProfileAndAccount['profileId']] = array();
                $matchingRecords[$matchedProfileAndAccount['profileId']][] = $matchedProfileAndAccount['accountId'];
            }
        }
    }

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Before $matchingRecords : ' . print_r($matchingRecords, 1)) : '';


    // Query the middle table and find out what PMS Profile and Accounts have already been linked
    // If the PMS Profile and Accounts have already been linked in past or they are currently linked, These
    // PMS Profile and Accounts will never be linked again automatically.
    $query = "select accounts_cb2b_pmsprofiles_1accounts_ida, accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb from accounts_cb2b_pmsprofiles_1_c;";
    $result = $db->query($query, true);

    while ($row = $db->fetchByAssoc($result)) {
        if (array_key_exists($row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb'], $matchingRecords)) {
            $matchingRecords[$row['accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb']][] = $row['accounts_cb2b_pmsprofiles_1accounts_ida'];
        }
    }

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('After $matchingRecords : ' . print_r($matchingRecords, 1)) : '';

    foreach ($matchingRecords as $key => $value) {
        // If $value > 1, means this PMS Profile can be linked with more than 1 Account, which is not possible
        // So we are not linking it automatically. User will do the manual linking himself.
        // We will only link those PMS Profiles and Accounts which have one to one match (one PMS Profile match to one Account)
        if (count($value) > 1) {
            continue;
        }

        array_push($pmsProfileIds, $key);
        array_push($queryArray, "('" . create_guid() . "', '{$timedate->nowDb()}', '0', '{$value[0]}', '{$key}', '1')");
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
        $update = "UPDATE `cb2b_pmsprofiles` SET `ready_to_link`='1', `is_update_dup`='-1' WHERE `id` IN ('" . implode("','", $pmsProfileIds) . "');";
        $db->query($update, true);
    }

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$insert : ' . print_r($insert, 1)) : '';
    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$update : ' . print_r($update, 1)) : '';

    return true;
}
