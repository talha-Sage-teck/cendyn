<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeSaveHandler {

    /**
     *
     * @param type $bean
     * @param type $event
     * @param type $arguments
     */
    function beforeSave(&$bean, $event, $arguments) {
        // Check if it's a new or existing record
        if ($bean->fetched_row == false) {
            $bean->is_update = 0;
        } else {
            $bean->is_update = 1;
        }
    }

    function linkAccountToRelatedProfiles(&$bean, $event, $arguments)
    {
        //get the related profile IDs that do not already have an account related to them
        global $db;
        $select_relate = "SELECT * FROM cb2b_pmsprofiles WHERE id='{$bean->id}' AND deleted = 0";
        $result_relate = $db->query($select_relate);
        $profile = $db->fetchByAssoc($result_relate);

        //if related profiles exist, and if the save did not occur in the entry point "relateProfilesToAccount"
        if ($profile['profiles_to_relate'] != "" && $profile['profiles_to_relate'] != null && !$bean->fromEntryPoint) {
            //defining relationship
            $accountRel = "accounts_cb2b_pmsprofiles_1";

            //loading the IDs and converting them to array
            $ids = $profile['profiles_to_relate'];
            $ids_array = explode(', ', $ids);

            //loading the related account
            $bean->load_relationship($accountRel);
            $relAccount = $bean->$accountRel->getBeans();

            //if account exists than relate
            foreach($relAccount as $account) {
            //looping over every profile to link the account
                foreach ($ids_array as $id) {
                    $profile = BeanFactory::getBean('CB2B_PMSProfiles', $id);
                    $profile->load_relationship($accountRel);
                    $profile->$accountRel->add($account);
                    $profile->save();
                }
            }

            //emptying profiles_to_relate value
            $bean->profiles_to_relate = "";
        }
    }
}
