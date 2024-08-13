<?php

// created: 2022-07-04 23:45:06
$layout_defs["Accounts"]["subpanel_setup"]['accounts_cb2b_production_summary_data_by_month'] = array(
    'order' => 100,
    'module' => 'cb2b_production_summary_data',
    'subpanel_name' => 'accounts_cb2b_production_summary_data_by_month',
    'title_key' => 'LBL_ACCOUNTS_CB2B_PRODUCTION_SUMMARY_DATA_BY_MONTH',
    'top_buttons' => array(),
    'get_subpanel_data' => 'function:get_accounts_cb2b_production_summary_data_by_month',
    'function_parameters' => array(
        'import_function_file' => 'custom/modules/cb2b_production_summary_data/customSubpanelQueries/accounts_cb2b_production_summary_data_by_property.php',
    ),
    'generate_select' => false,
);