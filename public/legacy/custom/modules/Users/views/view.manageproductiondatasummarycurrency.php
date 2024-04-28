<?php

/* * *
 * Custom view for Matching Criteria Config page
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class UsersViewmanageproductiondatasummarycurrency extends SugarView {

    function display() {
        echo '<div class="admin-locale">';
        global $current_user, $sugar_config;
        if (!is_admin($current_user)) {
            sugar_die("Unauthorized access to administration.");
        }

        $this->ss->assign('MOD', $GLOBALS['mod_strings']);
        $this->ss->assign('APP', $GLOBALS['app_strings']);
        $this->ss->assign('config', $sugar_config);
        $this->ss->assign('CURRENCY_OPTIONS', $sugar_config['pms_production_data_summary_currency']);
        $this->ss->assign('CORPORATE_CURRENCY_OPTIONS', $sugar_config['corporate_currency_options']);
        $this->ss->assign('SUMMARY_DATE_RANGE_OPTIONS', [
            'This Month'=>'This Month',
            'This quarter'=>'This quarter',
            'Last quarter'=>'Last quarter',
            'YTD'=>'YTD',
            'This year'=>'This year',
            'Last year'=>'Last year',
            'Last 24 months'=>'Last 24 months',
            'Next month'=>'Next month',
            'Next quarter'=>'Next quarter',
            'Next Year'=>'Next Year',

        ]);
        echo $this->ss->fetch('custom/modules/Users/views/view.manageproductiondatasummarycurrency.tpl');
    }
}
