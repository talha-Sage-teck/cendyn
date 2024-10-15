<?php
/***
 *  Entrypoint registration for checking sugar_config value for whether to show table heading in accounts or not
 */

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$entry_point_registry['getBoolForHeading'] = array(
    'file' => 'custom/modules/Accounts/getBoolForHeading.php',
    'auth' => false,
);
?>