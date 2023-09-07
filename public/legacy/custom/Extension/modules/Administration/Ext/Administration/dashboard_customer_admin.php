<?php
// add the module and action to the array
$admin_option_defs_all = [];
$admin_option_defs['Administration']['index'] = [
    'index',
];
$admin_option_defs['Users']['EditView'] = [
    'EditView',
];
$admin_option_defs['Users']['SaveTimezone'] = [
    'SaveTimezone',
];
$admin_option_defs['Users']['Save'] = [
    'Save',
];
$admin_option_defs['Users']['DetailView'] = [
    'DetailView',
];
$admin_option_defs['Users']['resetPreferences'] = [
    'resetPreferences',
];
$admin_option_defs['Users']['SubPanelViewer'] = [
    'SubPanelViewer',
];
$admin_option_defs['Users']['Popup'] = [
    'Popup',
];
$admin_option_defs['Users']['saveMatchCriteriaConfig'] = [
    'saveMatchCriteriaConfig',
];
$admin_option_defs['Users']['standardDashboardConfig'] = [
    'standardDashboardConfig',
];
$admin_option_defs['Users']['saveStandardDashboardConfig'] = [
    'saveStandardDashboardConfig',
];
$admin_option_defs['ExternalOAuthProvider']['EditView'] = [
    'EditView',
];
$admin_option_defs['ExternalOAuthProvider']['Save'] = [
    'Save',
];
$admin_option_defs['ExternalOAuthProvider']['DetailView'] = [
    'DetailView',
];
$admin_option_defs['ExternalOAuthProvider']['SubPanelViewer'] = [
    'SubPanelViewer',
];
$admin_option_defs['SecurityGroups']['Popup'] = [
    'Popup',
];
$admin_option_defs['ExternalOAuthProvider']['Save2'] = [
    'Save2',
];
$admin_option_defs['ExternalOAuthProvider']['Delete'] = [
    'Delete',
];
$admin_option_defs['ExternalOAuthProvider']['DetailView'] = [
    'DetailView',
];
$admin_option_defs['ExternalOAuthProvider']['DeleteRelationship'] = [
    'DeleteRelationship',
];
$admin_option_defs['ExternalOAuthConnection']['Popup'] = [
    'Popup',
];
$admin_option_defs['ExternalOAuthConnection']['EditView'] = [
    'EditView',
];
$admin_option_defs['ExternalOAuthConnection']['Save'] = [
    'Save',
];
$admin_option_defs['ExternalOAuthConnection']['DetailView'] = [
    'DetailView',
];
$admin_option_defs['ExternalOAuthConnection']['Delete'] = [
    'Delete',
];
$admin_option_defs['ExternalOAuthProvider']['Popup'] = [
    'Popup',
];
$admin_option_defs['EmailTemplates']['Popup'] = [
    'Popup',
];
//$admin_option_defs['ACLRoles']['EditView'] = [
//    'EditView',
//];
//$admin_option_defs['ACLRoles']['Save'] = [
//    'Save',
//];
//$admin_option_defs['ACLRoles']['DetailView'] = [
//    'DetailView',
//];
//$admin_option_defs['Schedulers']['index'] = [
//    'index',
//];

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
//$admin_option_defs = [];
// Changed the module from "Administration" to "Users" because this adjustment will trigger the Users module as specified in the link.
//$admin_option_defs['Users']['dashboard_config'] = array(
//    'standardDashboardConfig', // added the action name 'standardDashboardConfig', as the action name was initially empty
//    'Manage Dashboard Sharing',
//    'Configure SuiteCRM dashboard and assign tabs to Users.',
//    'index.php?module=Users&action=standardDashboardConfig'
//);
//
//
//$customer_admin_group_header[] = array(
//    'Administrator Management',
//    '',
//    false,
//    $admin_option_defs,
//    ''
//);
//$admin_option_defs_all[] = $admin_option_defs;

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

        $GLOBALS['customerAdminModuleList'] = array(
            'Home',
            'Calendar',
            'Calls',
            'Meetings',
            'Tasks',
            'Notes',
            'Leads',
            'Contacts',
            'Accounts',
            'Opportunities',
            'Emails',
            'EmailTemplates',
            'Campaigns',
            'Prospects',
            'ProspectLists',
            'Documents',
            'Cases',
            'Project',
            'Bugs',
            'ResourceCalendar',
            'AOBH_BusinessHours',
            'AM_ProjectTemplates',
            'AOK_Knowledge_Base_Categories',
            'AOK_KnowledgeBase',
            'FP_events',
            'FP_Event_Locations',
            'AOR_Reports',
            'AOR_Scheduled_Reports',
            'AOS_Contracts',
            'AOS_Invoices',
            'AOS_PDF_Templates',
            'AOS_Product_Categories',
            'AOS_Products',
            'AOS_Quotes',
            'AOW_WorkFlow',
            'jjwg_Maps',
            'jjwg_Markers',
            'jjwg_Areas',
            'jjwg_Address_Cache',
            'SecurityGroups',
            'Surveys',
            'AOS_Contracts',
            'CB2B_PMSProfiles',
            'CB2B_Hotels',
            'Contacts',
            'CB2B_AutomatedMonitoring',
            'Tasks'
        );
    }
}