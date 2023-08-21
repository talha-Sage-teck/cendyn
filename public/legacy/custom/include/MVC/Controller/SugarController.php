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

            // Check if $valueToCheck exists in the array
            if (in_array($this->module, $GLOBALS['customerAdminModuleList'])) {
                $hasAccess = true;
            }

            foreach ($GLOBALS['modulesAndActions'] as $entry) {
                if (
                    ($entry['module'] === $this->module && $entry['action'] === $this->action)
                    || ($this->module == "Import" && $_REQUEST['import_module'] != "Users")
                ) {
                    // Access is granted if module and action match
                    $hasAccess = true;

                    if (($this->module == 'Users' && $this->action == 'EditView' || $this->module == 'Users' && $this->action == 'DetailView') && $current_user->id != $_REQUEST['record']) {
                        $hasAccess = false; // Deny access if it's a Users/EditView and user ID doesn't match
                    }

                    break; // Exit the loop since access is granted or denied
                }
            }

            // Now, $hasAccess indicates whether access is granted or not
            $this->hasAccess = $hasAccess;
        }
        //check to ensure we have access to the module.
        parent::process();
    }
}