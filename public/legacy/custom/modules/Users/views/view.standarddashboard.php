<?php

/* * *
 * Custom view for Standard Dashboard Config page
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class UsersViewstandarddashboard extends SugarView {

    function getUsersList() {
        global $db;

        $users = array();
        $selectUsersQuery = "SELECT id, user_name FROM users WHERE deleted=0";
        $selectUsersResult = $db->query($selectUsersQuery);
        while($user = $db->fetchByAssoc($selectUsersResult)) {
            $users[] = $user;
        }
        return $users;
    }

    function findTabNames($tabs) {
        $names = array();
        foreach ($tabs as $tabNo => $tab) {
            $name = "";
            if(isset($tab['pageTitle'])) {
                $name = $tab['pageTitle'];
            }
            else if(isset($tab['pageTitleLabel'])) {
                $name = $tab['pageTitleLabel'];
            }
            if(!$name) {
                $name = 'NAMELESS TAB # ' . ($tabNo + 1);
            }
            $names[] = $name;
        }
        return $names;
    }

    function display() {
        global $current_user;
        $settings = $this->standardDashboardSettings();
        $tab_ids = $settings['tab_ids'];
        $tab_ids = preg_replace('/&#38;/i', '"', $tab_ids);
        $settingArray = $settings["dashboard"];
        $settingArray = preg_replace('/&#38;/i', '"', $settingArray);
        $pages = $current_user->getPreference('pages', 'Home');
        $dashlets = $current_user->getPreference('dashlets', 'Home');
        $tabNames = $this->findTabNames($pages);
        $users = $this->getUsersList();

        $this->ss->assign('APP', $GLOBALS['app_strings']);
        $this->ss->assign('MOD', $GLOBALS['mod_strings']);
        $this->ss->assign('title', $GLOBALS['mod_strings']['LBL_SETUP_STANDARD_DASHBOARD_TITLE']);
        $this->ss->assign('tabs', $pages);
        $this->ss->assign('tabNames', $tabNames);
        $this->ss->assign('dashlets', $dashlets);

        echo '<script>'
            . ($settingArray !== "" ? 'var configs = JSON.parse(\'' . $settingArray . '\')' : 'var configs = []') . ';'
            . ($tab_ids !== "" ? 'var tab_ids = JSON.parse(\'' . $tab_ids . '\')' : 'var tab_ids = []') . ';'
            . 'var tab_names = ' . json_encode($tabNames) . ';'
            . 'var dass = ' . json_encode($dashlets) . ';'
            . 'var tabDetails = ' . json_encode($pages) . ';'
            . 'var users = ' . json_encode($users) . ';'
            . 'var create = false; </script>';
        echo $this->ss->fetch('custom/modules/Users/views/view.standarddashboard.tpl');
    }

    function standardDashboardSettings() {
        global $db;
        $query = "SELECT * FROM config WHERE category = 'MySettings' AND name = 'StandardDashboardConfig'";
        $result = $db->query($query, true);
        if ($result->num_rows > 0) {
            $record = $db->fetchByAssoc($result);
            return unserialize(base64_decode($record['value']));
        } else {
            return null;
        }
    }

}
