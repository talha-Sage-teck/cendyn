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
$sugar_config['PMS_PROFILES_MATCHING_FIELDS'] = array(
    'name' => 'Name',
    'iata' => 'IATA',
    'pms_address_city' => 'City',
    'pms_address_postalcode' => 'Zip/Postal Code',
    'pms_address_country' => 'Country',
    'phone' => 'Phone',
    'contactemail' => 'Email'
);
$sugar_config['http_referer']['actions'][0] = 'studio';
$sugar_config['http_referer']['actions'][1] = 'index';
$sugar_config['http_referer']['actions'][2] = 'ListView';
$sugar_config['http_referer']['actions'][3] = 'DetailView';
$sugar_config['http_referer']['actions'][4] = 'EditView';
$sugar_config['http_referer']['actions'][5] = 'oauth';
$sugar_config['http_referer']['actions'][6] = 'authorize';
$sugar_config['http_referer']['actions'][7] = 'Authenticate';
$sugar_config['http_referer']['actions'][8] = 'Login';
$sugar_config['http_referer']['actions'][9] = 'SupportPortal';
$sugar_config['http_referer']['actions'][10] = 'Studio';
$sugar_config['passwordsetting']['SystemGeneratedPasswordON'] = '0';
$sugar_config['passwordsetting']['oneupper'] = '0';
$sugar_config['passwordsetting']['onelower'] = '0';
$sugar_config['passwordsetting']['onenumber'] = '0';
$sugar_config['passwordsetting']['onespecial'] = '0';
$sugar_config['passwordsetting']['minpwdlength'] = '';
$sugar_config['authenticationClass'] = '';
$sugar_config['list_max_entries_per_page'] = '300';
/***CONFIGURATOR***/

