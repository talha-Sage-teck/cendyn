<?php

/***
 * Adds the PMS Profiles Matching Configuration link to the admins page
 */

$admin_option_defs = [];
$admin_option_defs['Administration']['manage_profile_matching_criteria'] = array (
    '',
    'Manage Profile Matching Criteria',
    'View and Manage P2P Profiles Matching Criteria',
    'index.php?module=Users&action=MatchCriteriaConfig'
);


$admin_group_header[] = array (
    'P2P Profiles',
    '',
    false,
    $admin_option_defs,
    ''
);

