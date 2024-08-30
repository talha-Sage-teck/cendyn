<?php

/* * *
 *  link related profiles to selected account in PMS Profile's record view
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$entry_point_registry['ISOCodesEntryPoint'] = array(
    'file' => 'custom/modules/Accounts/ISOCodesEntryPoint.php',
    'auth' => false,
);
