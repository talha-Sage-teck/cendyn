<?php
    /***
     *  Creates an entrypoint for B2BAccountNo generation code
     */

    if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    $entry_point_registry['getNextB2BAccountNo'] = array(
        'file' => 'custom/modules/Accounts/getNextB2BAccountNo.php',
        'auth' => false,
    );
?>