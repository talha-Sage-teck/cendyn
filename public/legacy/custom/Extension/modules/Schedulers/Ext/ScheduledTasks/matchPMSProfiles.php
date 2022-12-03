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

function ifRelationshipAlreadyExists($left_pmsProfileId, $matchedProfileBeanId, $matchingProfiles) {
    if ($matchingProfiles[$left_pmsProfileId][$matchedProfileBeanId] == 1) {
        return true;
    } else {
        return false;
    }
}

function loadMatchingProfileRelationship() {
    global $db;
    $matchingProfiles = array();

    $query = "SELECT 
                cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida,
                cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb
            FROM
                cb2b_pmsprofiles_cb2b_pmsprofiles_2_c
            WHERE
                deleted = 0";
    $result = $db->query($query, true);

    while ($row = $db->fetchByAssoc($result)) {
        if (!array_key_exists($row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'], $matchingProfiles)) {
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']] = array();
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']][$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb']] = true;
        } else {
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']][$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb']] = true;
        }
    }

    return $matchingProfiles;
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
        $selectMatchingQuery .= " AND L.{$field} = R.{$field} AND L.{$field} != '' AND L.{$field} IS NOT NULL";
    }

    $selectMatchingQuery .= ";";

    return $selectMatchingQuery;
}

//function deleteUpdatedPMSProfilesRelationship() {
//    global $db;
//    $getAllUpdatedProfilesQuery = "SELECT id FROM `cb2b_pmsprofiles` WHERE deleted=0 AND `is_update`=1";
//    $getAllUpdatedProfilesResult = $db->query($getAllUpdatedProfilesQuery);
//    while ($matchedProfile = $db->fetchByAssoc($getAllUpdatedProfilesResult)) {
//        $query = "UPDATE `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` SET `deleted`='1' WHERE "
//                . "`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$matchedProfile['id']}'"
//                . "OR `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$matchedProfile['id']}';";
//        $db->query($query, true);
//    }
//}

function getExistingRelationShipIds($pmsProfileId) {
    global $db;
    $returnArr = array();
    $query = "SELECT cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida, cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb"
            . " FROM `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` WHERE "
            . "(`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$pmsProfileId}'"
            . "OR `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$pmsProfileId}') AND deleted = 0;";
    $results = $db->query($query);

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$query : ' . print_r($query, 1)) : '';

    while ($middleTableEntries = $db->fetchByAssoc($results)) {
        $returnArr[] = $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'] . "|" . $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb'];
        $returnArr[] = $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb'] . "|" . $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'];
    }

    $returnArr = array_unique($returnArr);
    return $returnArr;
}

function matchPMSProfiles() {
    global $db, $timedate, $sugar_config;

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

    $getAllProfilesQuery = "SELECT id FROM `cb2b_pmsprofiles` WHERE deleted=0 AND is_update != -1";
    $getAllProfilesResult = $db->query($getAllProfilesQuery);
    if ($getAllProfilesResult->num_rows <= 0) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('matchPMSProfiles --> : No PMS Profiles Found') : '';
        return true;
    }

    // Delete the relationships for the updated PMS Profiles
//    deleteUpdatedPMSProfilesRelationship();
    // Load all the middle table relationships cb2b_pmsprofiles_cb2b_pmsprofiles_2_c in Array 
    // to avoid the continuous queries
    $matchingProfiles = loadMatchingProfileRelationship();
//    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$matchingProfiles : ' . print_r($matchingProfiles, 1)) : '';
    // Iterating the PMS Profiles 
    while ($profile = $db->fetchByAssoc($getAllProfilesResult)) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('----------------------------------------------------') : '';
        $queryArray = array();
        $existingRelationShipIds = array();
        $newRelationShipIds = array();

        $existingRelationShipIds = getExistingRelationShipIds($profile['id']);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$existingRelationShipIds : ' . print_r($existingRelationShipIds, 1)) : '';

        foreach ($settings as $criteria => $fields) {
            $selectMatchingQuery = getMatchingProfilesPreparedQuery($profile['id'], $fields);
            $selectMatchingResult = $db->query($selectMatchingQuery);

            $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$selectMatchingQuery : ' . print_r($selectMatchingQuery, 1)) : '';
            $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$selectMatchingResult->num_rows : ' . print_r($selectMatchingResult->num_rows, 1)) : '';

            if ($selectMatchingResult->num_rows <= 0)
                continue;

            while ($matchedProfile = $db->fetchByAssoc($selectMatchingResult)) {

                $newRelationShipIds[] = $profile['id'] . "|" . $matchedProfile['matched_profile'];
                $newRelationShipIds[] = $matchedProfile['matched_profile'] . "|" . $profile['id'];

                $alreadyExists = ifRelationshipAlreadyExists($profile['id'], $matchedProfile['matched_profile'], $matchingProfiles);
                if (!$alreadyExists) {

                    array_push($queryArray, "('" . create_guid() . "', '{$timedate->nowDb()}', '0', '{$profile['id']}', '{$matchedProfile['matched_profile']}')");
                    array_push($queryArray, "('" . create_guid() . "', '{$timedate->nowDb()}', '0', '{$matchedProfile['matched_profile']}', '{$profile['id']}')");

                    if (is_array($matchingProfiles[$profile['id']])) {
                        $matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] = 1;
                    } else {
                        $matchingProfiles[$profile['id']] = array();
                        $matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] = 1;
                    }

                    if (is_array($matchingProfiles[$matchedProfile['matched_profile']])) {
                        $matchingProfiles[$matchedProfile['matched_profile']][$profile['id']] = 1;
                    } else {
                        $matchingProfiles[$matchedProfile['matched_profile']] = array();
                        $matchingProfiles[$matchedProfile['matched_profile']][$profile['id']] = 1;
                    }

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Adding Relationship between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                } else {
                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Relationship already exist between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                }
            }

            // We have to break the loop so that, If the first condition matches then 
            // there is no need to match subsequent conditions
            break;
        }

        if (!empty($queryArray)) {
            $insert = "INSERT INTO cb2b_pmsprofiles_cb2b_pmsprofiles_2_c "
                    . "(`id`, `date_modified`, `deleted`, `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`, `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`) "
                    . "VALUES "
                    . implode(", ", $queryArray);
            $db->query($insert, true);
        }

        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$newRelationShipIds : ' . print_r($newRelationShipIds, 1)) : '';

        setIsUpdateFlag($profile['id']);

        $relationShipsToDelete = array_diff($existingRelationShipIds, $newRelationShipIds);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$relationShipsToDelete : ' . print_r($relationShipsToDelete, 1)) : '';

        foreach ($relationShipsToDelete as $idsString) {
            if (!empty($idsString)) {
                $pieces = explode("|", $idsString);
                if (!empty($pieces[0]) && !empty($pieces[1])) {
                    $query = "UPDATE `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` SET `deleted`='1', `date_modified`='{$timedate->nowDb()}' WHERE "
                            . "`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$pieces[0]}' "
                            . "AND `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$pieces[1]}' "
                            . "ORDER BY date_modified DESC LIMIT 1;";
                    $db->query($query, true);

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('Relationship Delete / Update : ' . print_r($query, 1)) : '';
                }
            }
        }
    }

//    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$matchingProfiles : ' . print_r($matchingProfiles, 1)) : '';

    return true;
}
