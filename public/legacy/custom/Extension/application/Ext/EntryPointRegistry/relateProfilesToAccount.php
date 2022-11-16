<?php

/* * *
 *  link related profiles to selected account in PMS Profile's record view
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$entry_point_registry['relateProfilesToAccount'] = array(
    'file' => 'custom/modules/CB2B_PMSProfiles/relateProfilesToAccount.php',
    'auth' => false,
);
