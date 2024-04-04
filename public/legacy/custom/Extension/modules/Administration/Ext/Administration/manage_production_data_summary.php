<?php

/* * *
 * Adds the PMS Profiles Matching Configuration link to the admins page
 */

global $sugar_config;
if (!empty($sugar_config['SUPER_ADMIN_ID'])) {
    global $current_user;
    if (!empty($current_user)) {
        if ($current_user->id == $sugar_config['SUPER_ADMIN_ID']) {
            $admin_option_defs = [];
            $admin_option_defs['Users']['manage_production_data_summary_currency'] = array(
                'manageProductionDataSummaryCurrency',
                'Manage PMS Production Data Currency',
                'Configure PMS Production Data Currency Settings for Subpanels',
                'index.php?module=Users&action=manageProductionDataSummaryCurrency'
            );

            $admin_group_header[] = array(
                'PMS Production Data Summary',
                '',
                false,
                $admin_option_defs,
                ''
            );
        }
    }
}
