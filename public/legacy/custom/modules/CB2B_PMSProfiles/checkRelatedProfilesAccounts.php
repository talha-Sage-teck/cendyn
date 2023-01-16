<?php

/***
 * Checks if at least one of all the related profiles of the selected profile has a related account
 * @Input
 * Current Profile ID
 * @Output
 * Number of profiles that do not have an account associated with them
 */

// defining relationship variables
$profilesRel = "cb2b_pmsprofiles_cb2b_pmsprofiles_2";
$accountRel = "accounts_cb2b_pmsprofiles_1";

// fetching profile ID and populate the bean
$profileID = $_REQUEST['profileID'];
$profileBean = BeanFactory::getBean("CB2B_PMSProfiles", $profileID);

// loading relationship: current profile -> related profiles
if($profileBean) {
    if($profileBean->load_relationship($profilesRel)) {
        // loading all the profiles related to the current profile
        $relatedProfiles = $profileBean->$profilesRel->getBeans();
        // looping over all related profiles to check if any profile does not have a related account
        $count = 0;
        foreach ($relatedProfiles as $profile) {
            if($profile->load_relationship($accountRel)) {
                $relAccount = $profile->$accountRel->getBeans();
                if (sizeof($relAccount) == 0) {
                    ++$count;
                }
            }
        }
        echo $count;
    }
    else
        echo 0;
}
else
    echo 0;
