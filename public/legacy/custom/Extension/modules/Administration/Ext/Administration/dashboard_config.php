<?php

/* * *
 * Config page for dashboards
 */

$admin_option_defs = [];
$admin_option_defs['Administration']['dashboard_config'] = array(
    '',
    'Manage Dashboard Config',
    'Configure SuiteCRM dashboard and assign tabs to users',
    'index.php?module=Users&action=standardDashboardConfig'
);


$admin_group_header[] = array(
    'Administrator Management',
    '',
    false,
    $admin_option_defs,
    ''
);
