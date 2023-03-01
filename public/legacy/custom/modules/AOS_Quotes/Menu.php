<?php
global $mod_strings, $app_strings, $sugar_config;

if (ACLController::checkAccess('AOS_Quotes', 'edit', true)) {
    $module_menu[]=array("index.php?module=AOS_Quotes&action=EditView&return_module=AOS_Quotes&return_action=DetailView", $mod_strings['LNK_NEW_RECORD'],"Create", 'AOS_Quotes');
}
if (ACLController::checkAccess('AOS_Quotes', 'list', true)) {
    $module_menu[]=array("index.php?module=AOS_Quotes&action=index&return_module=AOS_Quotes&return_action=DetailView", $mod_strings['LNK_LIST'],"List", 'AOS_Quotes');
}
if (ACLController::checkAccess('AOS_Quotes', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=AOS_Quotes&return_module=AOS_Quotes&return_action=index", $mod_strings['LBL_IMPORT_QUOTES'],"Import", 'AOS_Quotes');
}
if (ACLController::checkAccess('AOS_Quotes', 'import', true)) {
    $module_menu[]=array("index.php?module=Import&action=Step1&import_module=AOS_Products_Quotes&return_module=AOS_Quotes&return_action=index", $mod_strings['LBL_IMPORT_LINE_ITEMS'],"Import", 'AOS_Products_Quotes');
}
