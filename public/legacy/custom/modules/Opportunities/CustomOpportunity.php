<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('modules/Opportunities/Opportunity.php');

class CustomOpportunity extends Opportunity
{
    function get_emails_by_assign_or_link($type=array())
    {
        return get_emails_by_assign_or_link($type, $this);
    }
}