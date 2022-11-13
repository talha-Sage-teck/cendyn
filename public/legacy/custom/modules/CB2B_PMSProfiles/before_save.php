<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeSaveHandler
{

    function linkAccountToRelatedProfiles(&$bean, $event, $arguments)
    {
        if ($bean->profiles_to_relate != "" && $bean->profiles_to_relate != null) {
            //defining relationship
            $accountRel = "accounts_cb2b_pmsprofiles_1";

            //loading the IDs and converting them to array
            $ids = $bean->profiles_to_relate;
            $ids_array = explode(', ', $ids);

            //loading the related account
            $bean->load_relationship($accountRel);
            $relAccount = $bean->$accountRel->getBeans();

            //if account exists than relate
            if (sizeof($relAccount) > 0) {
                $account = $relAccount[0];

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
