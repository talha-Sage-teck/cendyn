<?php
/***CONFIGURATOR***/
$sugar_config['default_export_charset'] = 'ISO-8859-1';
$sugar_config['dbconfigoption']['collation'] = 'utf8_general_ci';
$sugar_config['logger']['file']['name'] = 'b2b';
$sugar_config['addAjaxBannedModules'][0] = 'AOK_Knowledge_Base_Categories';
$sugar_config['addAjaxBannedModules'][1] = 'Bugs';
$sugar_config['addAjaxBannedModules'][2] = 'jjwg_Maps';
$sugar_config['addAjaxBannedModules'][3] = 'jjwg_Address_Cache';
$sugar_config['addAjaxBannedModules'][4] = 'jjwg_Markers';
$sugar_config['addAjaxBannedModules'][5] = 'jjwg_Areas';
$sugar_config['hide_history_contacts_emails']['Accounts'] = false;
$sugar_config['hide_history_contacts_emails']['Cases'] = false;
$sugar_config['hide_history_contacts_emails']['Opportunities'] = false;
$sugar_config['ACCOUNTS_INITIAL_TOKEN'] = '000001';
$sugar_config['P2P_PROFILES_MATCHING_FIELDS'] = array(
    'name' => 'Name',
    'iata' => 'IATA',
    'pms_address_city' => 'City',
    'pms_address_postalcode' => 'Zip/Postal Code',
    'pms_address_country' => 'Country',
    'phone' => 'Phone',
    'contactemail' => 'Email'
);
$sugar_config['http_referer']['actions'] =array( 'studio', 'index', 'ListView', 'DetailView', 'EditView', 'oauth', 'authorize', 'Authenticate', 'Login', 'SupportPortal', 'Studio' ); ;
/***CONFIGURATOR***/
