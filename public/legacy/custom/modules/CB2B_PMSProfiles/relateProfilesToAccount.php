<?php

/* * *
 * Entrypoint to relate Account with PMS Profiles
 * @Condition:
 * The PMS Profile must not already be related to another account
 */

// defining relationship variables
$profilesRel = "cb2b_pmsprofiles_cb2b_pmsprofiles_2";
$accountRel = "accounts_cb2b_pmsprofiles_1";

// fetching profile ID and populate the bean
$profileID = $_REQUEST['profileID'];
$profileBean = BeanFactory::getBean("CB2B_PMSProfiles", $profileID);

// loading relationship: current profile -> related profiles
$profileBean->load_relationship($profilesRel);

// loading all the profiles related to the current profile
$relatedProfiles = $profileBean->$profilesRel->getBeans();

// looping over all related profiles to check if any profile has a related account,
// if no account is already related then the profile ID is added to the string
$profileIdsArr = array();
foreach ($relatedProfiles as $profile) {
    if (empty($profile->accounts_cb2b_pmsprofiles_1accounts_ida)) {
        array_push($profileIdsArr, $profile->id);
    }
}

// saving the profile
$profileBean->profiles_to_relate = implode(',', $profileIdsArr);
$profileBean->fromEntryPoint = true;
$profileBean->save();
