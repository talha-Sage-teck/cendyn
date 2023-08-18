<?php
// add the module and action to the array
$admin_option_defs_all = [];
$admin_option_defs['Administration']['index'] = [
    'index',
];
$admin_option_defs['Users']['EditView'] = [
    'EditView',
];

$admin_option_defs_all[] = $admin_option_defs;

//email manager.
$admin_option_defs = [];
$admin_option_defs['Emails']['mailboxes'] = [
    'EmailInbound',
    'LBL_MANAGE_MAILBOX',
    'LBL_MAILBOX_DESC',
    './index.php?module=InboundEmail&action=index',
    'inbound-email'
];
$admin_option_defs['Emails']['mailboxes_outbound'] = [
    'EmailOutbound',
    'LBL_MANAGE_MAILBOX_OUTBOUND',
    'LBL_MAILBOX_OUTBOUND_DESC',
    './index.php?module=OutboundEmailAccounts&action=index',
    'outbound-email'
];
$admin_option_defs['Emails']['external_oauth_connections'] = [
    'ExternalOAuthConnection',
    'LBL_MANAGE_EXTERNAL_OAUTH_CONNECTIONS',
    'LBL_MANAGE_EXTERNAL_OAUTH_CONNECTIONS_DESC',
    'index.php?module=ExternalOAuthConnection&action=index',
    'oauth2'
];
$admin_option_defs['Emails']['external_oauth_providers'] = [
    'ExternalOAuthProvider',
    'LBL_MANAGE_EXTERNAL_OAUTH_PROVIDERS',
    'LBL_MANAGE_EXTERNAL_OAUTH_PROVIDERS_DESC',
    'index.php?module=ExternalOAuthProvider&action=index',
    'oauth2'
];

$customer_admin_group_header[] = ['LBL_EMAIL_TITLE', '', false, $admin_option_defs, 'LBL_EMAIL_DESC'];
$admin_option_defs_all[] = $admin_option_defs;

//admin tools
$admin_option_defs = [];

$admin_option_defs['Administration']['import'] = [
    'Import',
    'LBL_IMPORT_WIZARD',
    'LBL_IMPORT_WIZARD_DESC',
    './index.php?module=Import&action=step1&import_module=Administration',
    'import'
];

$customer_admin_group_header[] = ['LBL_ADMIN_TOOLS_TITLE', '', false, $admin_option_defs, 'LBL_ADMIN_TOOLS_HEADER_DESC'];

$admin_option_defs_all[] = $admin_option_defs;

// Developer Tools.
$admin_option_defs = [];
$admin_option_defs['any']['workflow_management'] = [
    'Workflow',
    'LBL_WORKFLOW_MANAGER',
    'LBL_WORKFLOW_MANAGER_DESC',
    './index.php?module=AOW_WorkFlow',
    'workflow'
];

$customer_admin_group_header[] = ['LBL_STUDIO_TITLE', '', false, $admin_option_defs, 'LBL_TOOLS_DESC'];
$admin_option_defs_all[] = $admin_option_defs;

// Administrator Management
$admin_option_defs = [];
// Changed the module from "Administration" to "Users" because this adjustment will trigger the Users module as specified in the link.
$admin_option_defs['Users']['dashboard_config'] = array(
    'standardDashboardConfig', // added the action name 'standardDashboardConfig', as the action name was initially empty
    'Manage Dashboard Sharing',
    'Configure SuiteCRM dashboard and assign tabs to Users.',
    'index.php?module=Users&action=standardDashboardConfig'
);


$customer_admin_group_header[] = array(
    'Administrator Management',
    '',
    false,
    $admin_option_defs,
    ''
);
$admin_option_defs_all[] = $admin_option_defs;

$admin_option_defs = [];
$admin_option_defs['Users']['manage_profile_matching_criteria'] = array(
    'matchCriteriaConfig',
    'Manage PMS Profile Matching Criteria',
    'Configure PMS Profiles Matching Criteria',
    'index.php?module=Users&action=matchCriteriaConfig'
);


$customer_admin_group_header[] = array(
    'Matching Criteria',
    '',
    false,
    $admin_option_defs,
    ''
);
$admin_option_defs_all[] = $admin_option_defs;


// Loop through each module in $admin_option_defs
$modulesAndActions = [];
//foreach ($admin_option_defs_all as $module => $actions) {
//    foreach ($actions as $action => $value) {
//        // Add module and action to $modulesAndActions array
//        $modulesAndActions[] = ['module' => $module, 'action' => $action];
//    }
//}

foreach ($admin_option_defs_all as $entry) {
    foreach ($entry as $module => $actions) {
        foreach ($actions as $action => $value) {
            // Check if the value at index 0 is not empty before adding to $modulesAndActions
            if (!empty($value[0])) {
                $modulesAndActions[] = ['module' => $module, 'action' => $value[0]];
            }
        }
    }
}

// check if user is admin and restrict_admin_features is enable
global $current_user, $admin_group_header;
if (!empty($current_user)) {
    if ($current_user->id != 1 && $current_user->customer_admin == 1) {
        $admin_group_header = $customer_admin_group_header;
        $GLOBALS['customer_admin_group_header'] = $customer_admin_group_header;
        $GLOBALS['modulesAndActions'] = $modulesAndActions;
    }
}