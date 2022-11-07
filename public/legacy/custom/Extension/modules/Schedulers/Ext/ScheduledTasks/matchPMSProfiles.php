<?php

/**
 *  This scheduler runs every 10 minutes and matches PMS Profiles with each other on the basis of the set criteria in PMS Profiles Criteria config
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

function checkRelatedBeanExists($profileBean, $matchedProfileBean) {
    $relationship = "cb2b_pmsprofiles_cb2b_pmsprofiles_1";
    $profileBean->load_relationship($relationship);
    $getRelatedBeans = $profileBean->$relationship->get();
    foreach($getRelatedBeans as $relatedBean) {
        if($relatedBean->id == $matchedProfileBean->id)
            return true;
    }
    return false;
}

function matchPMSProfiles() {
    global $db;
    $relationship = "cb2b_pmsprofiles_cb2b_pmsprofiles_1";
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);
    if ($result->num_rows > 0) {
        $record = $db->fetchByAssoc($result);
        $settings = unserialize(base64_decode($record['value']))['criteria'];
        $getAllProfilesQuery = "SELECT * FROM `cb2b_pmsprofiles` WHERE deleted=0";
        $getAllProfilesResult = $db->query($getAllProfilesQuery);
        if($getAllProfilesResult->num_rows > 0) {
            for($i = 0; $i < $getAllProfilesResult->num_rows; ++$i) {
                $profile = $db->fetchByAssoc($getAllProfilesResult);
                $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $profile['id']);
                foreach($settings as $criteria => $fields) {
                    $selectMatchingQuery = "SELECT A.*, B.* FROM `cb2b_pmsprofiles` A, `cb2b_pmsprofiles` B WHERE A.id='{$profile['id']}' AND A.id <> B.id AND B.deleted=0";
                    foreach ($fields as $field)
                        $selectMatchingQuery .= " AND A.{$field}=B.{$field}";
                    $selectMatchingQuery .= ";";
                    $selectMatchingResult = $db->query($selectMatchingQuery);
                    if($selectMatchingResult->num_rows > 0) {
                        for($j = 0; $j < $selectMatchingResult->num_rows; ++$j) {
                            $matchedProfile = $db->fetchByAssoc($selectMatchingResult);
                            $matchedProfileBean = BeanFactory::getBean('CB2B_PMSProfiles', $matchedProfile['id']);
                            $alreadyExists = checkRelatedBeanExists($profileBean, $matchedProfileBean);
                            if(!$alreadyExists) {
                                $profileBean->load_relationship($relationship);
                                $profileBean->$relationship->add($matchedProfileBean);
                                $profileBean->save();
                            }
                        }
                    }
                }
            }
        }
    }
    return true;
}
