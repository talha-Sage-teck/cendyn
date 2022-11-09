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

$job_strings[] = 'matchPMSProfiles';

function ifRelationshipAlreadyExists($left_pmsProfileId, $matchedProfileBeanId) {
    global $db;
    $query = "SELECT 
                id
            FROM
                cb2b_pmsprofiles_cb2b_pmsprofiles_1_c
            WHERE
                cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_ida = '$left_pmsProfileId'
                AND cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = '$matchedProfileBeanId'
                AND deleted = 0";
    $result = $db->query($query, true);
    if ($result->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}

// Set PMS Profile to -1 so that, it will not pull the is_update = 0 and is_update = 1 in the Schdeuler next time.
// is_update = 0 is the default value
// is_update = 1 is set by PMS ETL to inform CRM that the existing record is updated
// is_update = -1 is set by CRM scheduler to keep track that this record is already taken care of by Matching Engine 
function setIsUpdateFlag($left_pmsProfileId) {
    global $db;
    $query = "UPDATE `cb2b_pmsprofiles` SET `is_update`='-1' WHERE `id`='$left_pmsProfileId';";
    $db->query($query, true);
}

/*
  @Inputs:
 *  @Output:
 * 
 *  */

function getMatchingProfilesPreparedQuery($left_pmsProfileId, $fields) {
    $selectMatchingQuery = "SELECT 
                            L.id, R.id AS matched_profile
                        FROM
                            `cb2b_pmsprofiles` L,
                            `cb2b_pmsprofiles` R
                        WHERE
                            L.id = '$left_pmsProfileId' 
                                AND L.id <> R.id
                                AND R.deleted = 0";
    foreach ($fields as $field) {
        $selectMatchingQuery .= " AND L.{$field} = R.{$field}";
    }

    $selectMatchingQuery .= ";";

    return $selectMatchingQuery;
}

function matchPMSProfiles() {
    global $db, $timedate, $sugar_config;

    // Get Matching Criterias from Configuration
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);
    if ($result->num_rows <= 0) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('matchPMSProfiles --> : Did not found MatchCriteriaConfig') : '';
        return false;
    }

    // Unserialize the Configurations
    $record = $db->fetchByAssoc($result);
    $settings = unserialize(base64_decode($record['value']))['criteria'];

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$settings : ' . print_r($settings, 1)) : '';

    // 
    $relationship = "cb2b_pmsprofiles_cb2b_pmsprofiles_1";
    $getAllProfilesQuery = "SELECT id FROM `cb2b_pmsprofiles` WHERE deleted=0 AND is_update != -1";
    $getAllProfilesResult = $db->query($getAllProfilesQuery);
    if ($getAllProfilesResult->num_rows <= 0) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('matchPMSProfiles --> : No PMS Profiles Found') : '';
        return false;
    }

    // Iterating the PMS Profiles 
    while ($profile = $db->fetchByAssoc($getAllProfilesResult)) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('----------------------------------------------------') : '';

        foreach ($settings as $criteria => $fields) {
            $selectMatchingQuery = getMatchingProfilesPreparedQuery($profile['id'], $fields);
            $selectMatchingResult = $db->query($selectMatchingQuery);

            $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$selectMatchingQuery : ' . print_r($selectMatchingQuery, 1)) : '';

            if ($selectMatchingResult->num_rows <= 0)
                continue;

            while ($matchedProfile = $db->fetchByAssoc($selectMatchingResult)) {

                $alreadyExists = ifRelationshipAlreadyExists($profile['id'], $matchedProfile['matched_profile']);
                if (!$alreadyExists) {

                    $insert = "INSERT INTO cb2b_pmsprofiles_cb2b_pmsprofiles_1_c "
                            . "(`id`, `date_modified`, `deleted`, `cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_ida`, `cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb`) "
                            . "VALUES "
                            . "('" . create_guid() . "', '{$timedate->nowDb()}', '0', '{$profile['id']}', '{$matchedProfile['matched_profile']}')";
                    $db->query($insert, true);

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Adding Relationship between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                } else {
                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Relationship already exist between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                }
            }

            $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('If the first condition matches then there is no need to match subsequent conditions') : '';
            // If the first condition matches then there is no need to match subsequent conditions
            break;
        }

        setIsUpdateFlag($profile['id']);
    }

    return true;
}
