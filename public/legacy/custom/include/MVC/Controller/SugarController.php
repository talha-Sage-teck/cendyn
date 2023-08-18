<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/Controller/SugarController.php');

class CustomSugarController extends SugarController
{
    public function process()
    {
        $GLOBALS['action'] = $this->action;
        $GLOBALS['module'] = $this->module;

        global $current_user;

        if ($current_user->id != 1 && $current_user->customer_admin == 1) {
            require_once "custom/Extension/modules/Administration/Ext/Administration/dashboard_customer_admin.php";

            $hasAccess = false;

            foreach ($GLOBALS['modulesAndActions'] as $entry) {
                if ($entry['module'] === $this->module && $entry['action'] === $this->action || $this->module == "Import"  && $_REQUEST['import_module'] != "Users") {
                    $hasAccess = true;
                    break; // Exit the loop since access is granted
                }
            }

            // Now, $hasAccess indicates whether access is granted or not
            $this->hasAccess = $hasAccess;
        }
        //check to ensure we have access to the module.
        parent::process();
    }
}