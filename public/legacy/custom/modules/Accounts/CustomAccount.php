<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Accounts/Account.php');

class CustomAccount extends Account
{
    function get_emails_by_assign_or_link($type=array())
    {
        return get_emails_by_assign_or_link($type, $this);
    }
}