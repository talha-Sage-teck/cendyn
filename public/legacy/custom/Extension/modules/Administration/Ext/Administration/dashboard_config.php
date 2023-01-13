<?php

/* * *
 * Config page for dashboards
 */
global $sugar_config;
if(!empty($sugar_config['SUPER_ADMIN_ID'])){
    global $current_user;
    if(!empty($current_user)){
        if($current_user->id==$sugar_config['SUPER_ADMIN_ID']){
            $admin_option_defs = [];
            $admin_option_defs['Administration']['dashboard_config'] = array(
                '',
                'Manage Dashboard Sharing',
                'Configure SuiteCRM dashboard and assign tabs to Users.',
                'index.php?module=Users&action=standardDashboardConfig'
            );


            $admin_group_header[] = array(
                'Administrator Management',
                '',
                false,
                $admin_option_defs,
                ''
            );
        }
    }
}

