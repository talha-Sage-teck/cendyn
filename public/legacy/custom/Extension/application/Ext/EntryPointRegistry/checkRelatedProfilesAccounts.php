<?php
/***
 *  Entrypoint registration for check related profiles' accounts
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$entry_point_registry['checkRelatedProfilesAccounts'] = array(
    'file' => 'custom/modules/CB2B_PMSProfiles/checkRelatedProfilesAccounts.php',
    'auth' => false,
);
