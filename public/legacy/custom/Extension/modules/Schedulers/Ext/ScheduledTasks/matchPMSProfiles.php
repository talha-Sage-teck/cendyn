<?php

/**
 *  This scheduler runs every 10 minutes and matches PMS Profiles with each other on the basis of the set criteria in
 *  PMS Profiles Criteria config
 * @Conditions:
 * 1. If the first criteria matches then there is no need to match subsequent criteria
 * @Actions:
 * 1. Relate the two PMS Profiles through the relationship "suggested profiles"
 * @Returns:
 * True, if scheduler ran successfully, otherwise false.
 */
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

require_once('custom/CurlDataHandler.php');

$job_strings[] = 'matchPMSProfiles';

function ifRelationshipAlreadyExists($left_pmsProfileId, $matchedProfileBeanId, $matchingProfiles) {
    if (isset($matchingProfiles[$left_pmsProfileId][$matchedProfileBeanId])) {
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
                cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb,
                match_criteria
            FROM
                cb2b_pmsprofiles_cb2b_pmsprofiles_2_c
            WHERE
                deleted = 0";
    $result = $db->query($query, true);

    while ($row = $db->fetchByAssoc($result)) {
        if (!array_key_exists($row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'], $matchingProfiles)) {
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']] = array();
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']][$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb']] = $row['match_criteria'];
        } else {
            $matchingProfiles[$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida']][$row['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb']] = $row['match_criteria'];
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

function getMatchedCriteriaString($fields) {
    global $sugar_config;
    $match_criteria = array();

    foreach ($fields as $field) {
        if (array_key_exists($field, $sugar_config['PMS_PROFILES_MATCHING_FIELDS'])) {
            array_push($match_criteria, $sugar_config['PMS_PROFILES_MATCHING_FIELDS'][$field]);
        } else {
            $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('getMatchedCriteriaString :: Key ' . $field . ' does not exist in PMS_PROFILES_MATCHING_FIELDS Configuration Array.') : '';
        }
    }

    return implode(', ', $match_criteria);
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
    global $db, $sugar_config;
    $returnArr = array();
    $query = "SELECT cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida, cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb"
            . " FROM `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` WHERE "
            . "(`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$pmsProfileId}'"
            . "OR `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$pmsProfileId}') AND deleted = 0;";
    $results = $db->query($query);

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$query : ' . print_r($query, 1)) : '';

    while ($middleTableEntries = $db->fetchByAssoc($results)) {
        $returnArr[] = $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'] . "|" . $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb'];
        $returnArr[] = $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb'] . "|" . $middleTableEntries['cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida'];
    }

    $returnArr = array_unique($returnArr);
    return $returnArr;
}

function matchPMSProfiles() {
    global $db, $timedate, $sugar_config;
    // We have this DELETE time in a separate variable to keep it smaller than the Insert time.
    // If we took this time at the end of code (at run time) where we are doing the DELETE, it's modified time would always be
    // greater than the INSERT time, which is not right from the Audit perspective.
    // Action: First Delete will happen then Insert will happen, so we get the delete time first (to have a smaller delete timestamp)
    // then the Insert time (to have a greater insert timestamp)
    $deleteTime = $timedate->nowDb();

    $error = array(
        'name' => "Found No Matching Configuration",
        'endpoint' => null,
        'input_data' => null,
        'http_code' => null,
        'request_type' => null,
        'curl_error_message' => null,
        'error_status' => 'new',
        'related_to_module' => 'PMS Profile',
        'parent_id' => null,
        'parent_type' => "PMS Profile",
        'concerned_team' => "b2b_dev_team",
        'action_type' => "PMS Profile Matching",
        'api_response' => null,
        'assigned_user_id' => 1,
        'resolution' => '1- Go to Administration Section. 2- Find Manage "PMS Profile Matching Criteria". 3- Setup the "PMS Profiles Matching Criteria Rules".'
    );

    // Get Matching Criterias from Configuration
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);

    if ($result->num_rows <= 0) {
        $dataHandler = new CurlDataHandler();
        $dataHandler->storeCurlRequest($error);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('matchPMSProfiles --> : Did not found MatchCriteriaConfig') : '';
        return true;
    }

    // Unserialize the Configurations
    $record = $db->fetchByAssoc($result);
    $settings = unserialize(base64_decode($record['value']))['criteria'];

    if (!isset($settings['criteria']) || empty($settings['criteria'])) {
        $dataHandler = new CurlDataHandler();
        $dataHandler->storeCurlRequest($error);
    }

    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$settings : ' . print_r($settings, 1)) : '';

    $getAllProfilesQuery = "SELECT id FROM `cb2b_pmsprofiles` WHERE deleted=0 AND is_update != -1";
    $getAllProfilesResult = $db->query($getAllProfilesQuery);
    if ($getAllProfilesResult->num_rows <= 0) {
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('matchPMSProfiles --> : No PMS Profiles Found') : '';
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
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('----------------------------------------------------') : '';
        $queryArray = array();
        $existingRelationShipIds = array();
        $relationShipCheckFlag = false;
        $newRelationShipIds = array();

        $existingRelationShipIds = getExistingRelationShipIds($profile['id']);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$existingRelationShipIds : ' . print_r($existingRelationShipIds, 1)) : '';

        foreach ($settings as $criteria => $fields) {
            $match_criteria = getMatchedCriteriaString($fields);
            $selectMatchingQuery = getMatchingProfilesPreparedQuery($profile['id'], $fields);
            $selectMatchingResult = $db->query($selectMatchingQuery);

            $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$selectMatchingQuery : ' . print_r($selectMatchingQuery, 1)) : '';
            $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$selectMatchingResult->num_rows : ' . print_r($selectMatchingResult->num_rows, 1)) : '';

            if ($selectMatchingResult->num_rows <= 0)
                continue;

            while ($matchedProfile = $db->fetchByAssoc($selectMatchingResult)) {

                if ($relationShipCheckFlag) {
                    // Validating and sustaining the Existing Relationships
                    if (in_array($profile['id'] . "|" . $matchedProfile['matched_profile'], $existingRelationShipIds)) {
                        $newRelationShipIds[] = $profile['id'] . "|" . $matchedProfile['matched_profile'];
                        $newRelationShipIds[] = $matchedProfile['matched_profile'] . "|" . $profile['id'];

                        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('In relationShipCheckFlag') : '';
                    }

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Out relationShipCheckFlag') : '';

                    continue;
                } else {
                    $newRelationShipIds[] = $profile['id'] . "|" . $matchedProfile['matched_profile'];
                    $newRelationShipIds[] = $matchedProfile['matched_profile'] . "|" . $profile['id'];
                }

                $alreadyExists = ifRelationshipAlreadyExists($profile['id'], $matchedProfile['matched_profile'], $matchingProfiles);
                if (!$alreadyExists) {

                    // At time of new entry creation, date_entered and date_modified will be same
                    $dateTimeStamp = $timedate->nowDb();
                    array_push($queryArray, "('" . create_guid() . "', '{$dateTimeStamp}', '0', '{$profile['id']}', '{$matchedProfile['matched_profile']}', '{$match_criteria}', '{$dateTimeStamp}')");
                    array_push($queryArray, "('" . create_guid() . "', '{$dateTimeStamp}', '0', '{$matchedProfile['matched_profile']}', '{$profile['id']}', '{$match_criteria}', '{$dateTimeStamp}')");

                    if (is_array($matchingProfiles[$profile['id']])) {
                        $matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] = $match_criteria;
                    } else {
                        $matchingProfiles[$profile['id']] = array();
                        $matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] = $match_criteria;
                    }

                    if (is_array($matchingProfiles[$matchedProfile['matched_profile']])) {
                        $matchingProfiles[$matchedProfile['matched_profile']][$profile['id']] = $match_criteria;
                    } else {
                        $matchingProfiles[$matchedProfile['matched_profile']] = array();
                        $matchingProfiles[$matchedProfile['matched_profile']][$profile['id']] = $match_criteria;
                    }

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Adding Relationship between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                } else {
                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship already exist between : ' . print_r($profile['id'], 1) . ' AND ' . print_r($matchedProfile['matched_profile'], 1)) : '';
                    if ($matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] != $match_criteria) {
                        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('In the Match Criteria Update Section.') : '';
                        // Delete the Existing Relationship
                        // When we unset it here from the $newRelationShipIds Array, at time of array_diff these ids
                        // will be sent to $relationShipsToDelete for deletion
                        unset($newRelationShipIds[$profile['id'] . "|" . $matchedProfile['matched_profile']]);
                        unset($newRelationShipIds[$matchedProfile['matched_profile'] . "|" . $profile['id']]);

                        $query = "UPDATE `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` SET `deleted`='1', `date_modified`='{$deleteTime}' WHERE "
                                . "`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$profile['id']}' "
                                . "AND `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$matchedProfile['matched_profile']}' "
                                . "AND `deleted`='0' "
                                . "ORDER BY date_modified DESC LIMIT 1;";
                        $db->query($query, true);
                        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship Delete / Update (1) : ' . print_r($query, 1)) : '';

                        $query = "UPDATE `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` SET `deleted`='1', `date_modified`='{$deleteTime}' WHERE "
                                . "`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$matchedProfile['matched_profile']}' "
                                . "AND `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$profile['id']}' "
                                . "AND `deleted`='0' "
                                . "ORDER BY date_modified DESC LIMIT 1;";
                        $db->query($query, true);
                        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship Delete / Update (2) : ' . print_r($query, 1)) : '';

                        // Insert the same Relationship but with new match criteria
                        $matchingProfiles[$profile['id']][$matchedProfile['matched_profile']] = $match_criteria;
                        $matchingProfiles[$matchedProfile['matched_profile']][$profile['id']] = $match_criteria;
                        // At time of new entry creation, date_entered and date_modified will be same
                        $dateTimeStamp = $timedate->nowDb();
                        array_push($queryArray, "('" . create_guid() . "', '{$dateTimeStamp}', '0', '{$profile['id']}', '{$matchedProfile['matched_profile']}', '{$match_criteria}', '{$dateTimeStamp}')");
                        array_push($queryArray, "('" . create_guid() . "', '{$dateTimeStamp}', '0', '{$matchedProfile['matched_profile']}', '{$profile['id']}', '{$match_criteria}', '{$dateTimeStamp}')");
                    }
                }
            }

            // We have to break the loop so that, If the first condition matches then
            // there is no need to match subsequent conditions
            if (empty($existingRelationShipIds)) {
                break;
            } else {
                $relationShipCheckFlag = true;
            }
        }

        if (!empty($queryArray)) {
            $insert = "INSERT INTO cb2b_pmsprofiles_cb2b_pmsprofiles_2_c "
                    . "(`id`, `date_modified`, `deleted`, `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`, `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`, `match_criteria`, `date_entered`) "
                    . "VALUES "
                    . implode(", ", $queryArray);
            $db->query($insert, true);

            $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship Insert : ' . print_r($insert, 1)) : '';
        }

        setIsUpdateFlag($profile['id']);

        $newRelationShipIds = array_unique($newRelationShipIds);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$newRelationShipIds : ' . print_r($newRelationShipIds, 1)) : '';

        $relationShipsToDelete = array_diff($existingRelationShipIds, $newRelationShipIds);
        $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('$relationShipsToDelete : ' . print_r($relationShipsToDelete, 1)) : '';

        foreach ($relationShipsToDelete as $idsString) {
            if (!empty($idsString)) {
                $pieces = explode("|", $idsString);
                if (!empty($pieces[0]) && !empty($pieces[1])) {
                    $query = "UPDATE `cb2b_pmsprofiles_cb2b_pmsprofiles_2_c` SET `deleted`='1', `date_modified`='{$deleteTime}' WHERE "
                            . "`cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida`='{$pieces[0]}' "
                            . "AND `cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb`='{$pieces[1]}' "
                            . "AND `deleted`='0' "
                            . "ORDER BY date_modified DESC LIMIT 1;";
                    $db->query($query, true);

                    $sugar_config['scheduler_log'] ? $GLOBALS['log']->debug('Relationship Delete : ' . print_r($query, 1)) : '';
                }
            }
        }
    }

//    $sugar_config['scheduler_log'] ? $GLOBALS['log']->fatal('$matchingProfiles : ' . print_r($matchingProfiles, 1)) : '';

    return true;
}
