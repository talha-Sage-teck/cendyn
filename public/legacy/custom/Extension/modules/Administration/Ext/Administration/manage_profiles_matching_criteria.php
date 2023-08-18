<?php

/* * *
 * Adds the PMS Profiles Matching Configuration link to the admins page
 */

global $sugar_config;
if(!empty($sugar_config['SUPER_ADMIN_ID'])){
    global $current_user;
    if(!empty($current_user)){
        if($current_user->id==$sugar_config['SUPER_ADMIN_ID']){
            $admin_option_defs = [];
            $admin_option_defs['Users']['manage_profile_matching_criteria'] = array(
                'matchCriteriaConfig',
                'Manage PMS Profile Matching Criteria',
                'Configure PMS Profiles Matching Criteria',
                'index.php?module=Users&action=matchCriteriaConfig'
            );


            $admin_group_header[] = array(
                'Matching Criteria',
                '',
                false,
                $admin_option_defs,
                ''
            );
        }
    }
}
