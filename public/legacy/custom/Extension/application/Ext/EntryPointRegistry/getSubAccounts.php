<?php
/***
 *  Entrypoint registration for check related profiles' accounts
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$entry_point_registry['getSubAccounts'] = array(
    'file' => 'custom/modules/Accounts/getSubAccounts.php',
    'auth' => false,
);
