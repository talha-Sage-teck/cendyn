<?php

/* * *
 * Adds the PMS Profiles Matching Configuration link to the admins page
 */

$admin_option_defs = [];
$admin_option_defs['Administration']['manage_profile_matching_criteria'] = array(
    '',
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

