<?php

/* * *
 *  link related profiles to selected account in PMS Profile's record view
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$entry_point_registry['usersToSecurityGroupsMapping'] = array(
    'file' => 'custom/modules/Accounts/usersToSecurityGroupsMapping.php',
    'auth' => false,
);
