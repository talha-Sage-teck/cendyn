<?php

/* * *
 * Overriding original Users' module controller to add actions related to Match Criteria and Standard Dashboard config
 */


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once __DIR__ . '/../../../modules/Users/controller.php';
require_once('custom/include/MVC/Controller/SugarController.php');

class CustomUsersController extends CustomSugarController {

    function action_matchCriteriaConfig() {
        if (is_admin($GLOBALS['current_user'])) {
            $this->view = 'matchcriteriaconfig';
            $GLOBALS['view'] = $this->view;
        } else {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        return true;
    }

    function action_manageProductionDataSummaryCurrency() {
        if (is_admin($GLOBALS['current_user'])) {
            $this->view = 'manageproductiondatasummarycurrency';
            $GLOBALS['view'] = $this->view;
        } else {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        return true;
    }

    function action_standardDashboardConfig() {
        if (is_admin($GLOBALS['current_user'])) {
            $this->view = 'standarddashboard';
            $GLOBALS['view'] = $this->view;
        } else {
            sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
        }
        return true;
    }

    function action_saveMatchCriteriaConfig() {
        global $db;
        $query = "SELECT * FROM config WHERE category = 'MySettings' AND name = 'MatchCriteriaConfig'";
        $result = $db->query($query, true);
        if ($result->num_rows == 0)
            $query = "INSERT INTO config (category, name, value) VALUES ('MySettings', 'MatchCriteriaConfig'," . "'" . base64_encode(serialize($_REQUEST)) . "')";
        else
            $query = "UPDATE config SET value = '" . base64_encode(serialize($_REQUEST)) . "' WHERE category = 'MySettings' AND name = 'MatchCriteriaConfig'";
        $db->query($query, true);
        SugarApplication::redirect("index.php?module=Administration&action=index");
    }

    function action_saveManageProductionDataSummaryCurrency() {
        $cfg = new Configurator();
        $cfg->populateFromPost();
        $cfg->handleOverride();

        SugarApplication::redirect("index.php?module=Administration&action=index");
    }

    function unsubscribeUsers($delete) {
        global $db;
        $selectQ = "SELECT * FROM user_preferences WHERE category='Home' AND deleted = 0 AND assigned_user_id <> '1'";
        $resultQ = $db->query($selectQ);
        while ($row = $db->fetchByAssoc($resultQ)) {
            if ($row['contents'] && strlen(trim($row['contents'])) !== 0) {
                $rowData = unserialize(base64_decode($row['contents']));
                $array = $rowData['pages'];
                $subkey = "id";
                if (!empty($array) && is_countable($array)) {
                    $array = array_filter($array, function ($v) use (&$array, $subkey, $delete) {
                        if (empty($v['is_managed'])) {
                            return true;
                        }
                        if (!array_key_exists($subkey, $v))
                            return false;
                        if (in_array($v[$subkey], $delete))
                            return false;
                        else
                            return true;
                    });
                    $rowData['pages'] = array_values($array);
                }

                $data = base64_encode(serialize($rowData));

                //perhaps we would have to remove dashlets too; not likely

                $deleteQ = "UPDATE user_preferences SET contents = '{$data}' WHERE category='Home' AND deleted=0 AND assigned_user_id='{$row['assigned_user_id']}'";
                $dresultQ = $db->query($deleteQ);
                if (!$dresultQ)
                    $GLOBALS['log']->debug("Error updating dashboard tabs for user with ID: {$row['assigned_user_id']}");
            }
        }
    }

    function unsubscribeTabUsersByIds($tab, $users) {
        global $db;
        $selected_users = array_map(function ($user) {
            return "'{$user}'";
        }, $users);
        $selected_users = implode(", ", $selected_users);

        if (empty($selected_users)) {
            $selected_users = "''";
        }

        $selectQ = "SELECT * FROM user_preferences WHERE category='Home' AND deleted = 0 AND assigned_user_id <> '1' AND assigned_user_id IN ({$selected_users})";
        $resultQ = $db->query($selectQ);
        while ($row = $db->fetchByAssoc($resultQ)) {
            if ($row['contents'] && strlen(trim($row['contents'])) !== 0) {
                $rowData = unserialize(base64_decode($row['contents']));
                $array = $rowData['pages'];
                $subkey = "id";
                $array = array_filter($array, function ($v) use (&$array, $subkey, $tab) {
                    if (!array_key_exists($subkey, $v))
                        return false;
                    if ($v[$subkey] == $tab)
                        return false;
                    else
                        return true;
                });
                $rowData['pages'] = array_values($array);
                $data = base64_encode(serialize($rowData));

                //perhaps we would have to remove dashlets too; not likely

                $deleteQ = "UPDATE user_preferences SET contents = '{$data}' WHERE category='Home' AND deleted=0 AND assigned_user_id='{$row['assigned_user_id']}'";
                $dresultQ = $db->query($deleteQ);
                if (!$dresultQ)
                    $GLOBALS['log']->debug("Error updating dashboard tabs for user with ID: {$row['assigned_user_id']}");
            }
        }
    }

    function action_saveStandardDashboardConfig() {
        global $db;

        $settingArray = $_REQUEST["dashboard"];
        $settingArray = preg_replace('/&#38;/i', '"', $settingArray);
        $dash = json_decode($settingArray, true);

        $tab_ids = $_REQUEST['tab_ids'];
        $tab_ids = preg_replace('/&#38;/i', '"', $tab_ids);
        $tab_ids = json_decode($tab_ids, true);

        $dashlets_ = $_REQUEST['dashlets'];
        $dashlets_ = preg_replace('/&#38;/i', '"', $dashlets_);
        $dashlets_ = json_decode($dashlets_, true);

        // IDENTIFY ANY DELETED TAB FROM THE ADMIN'S END AND UNSUBSCRIBE USERS
        $delete = array();
        foreach ($dash as $p => $d) {
            foreach ($d['dashlets'] as $page => $datum) {
                if (!in_array($datum['id'], $tab_ids))
                    $delete[] = $datum['id'];
            }
        }
        $this->unsubscribeUsers($delete);

        //UPDATE THE NEW SETTINGS COMING FROM THE FRONTEND
        $query = "SELECT * FROM config WHERE category = 'MySettings' AND name = 'StandardDashboardConfig'";
        $result = $db->query($query, true);
        if ($result->num_rows == 0)
            $query = "INSERT INTO config (category, name, value) VALUES ('MySettings', 'StandardDashboardConfig'," .
                    "'" . base64_encode(serialize($_REQUEST)) . "')";
        else
            $query = "UPDATE config SET value = '" . base64_encode(serialize($_REQUEST)) .
                    "' WHERE category = 'MySettings' AND name = 'StandardDashboardConfig'";
        $db->query($query, true);

        //We only need the updated or new config from here onwards
        $updated = null;
        foreach ($dash as $d) {
            if ($d['update'] == 1)
                $updated = $d;
        }
        $users = $updated['users'];

        //REMOVE TABS FROM USERS THAT MAY STILL CONTAIN TABS THAT THEY WERE DESELECTED FROM
        $selected_users = array_map(function ($user) {
            return "'{$user}'";
        }, $users);
        $selected_users = implode(", ", $selected_users);
        $tabs = $updated['tabs'];
        $selectPrefQuery = "SELECT * FROM user_preferences WHERE category='Home' AND deleted = 0 AND assigned_user_id <> '1'";
        $selectPrefQuery .= (trim($selected_users) !== "") ? " AND assigned_user_id NOT IN ({$selected_users})" : "";
        $selectPrefResult = $db->query($selectPrefQuery);
        for ($i = 0; $i < sizeof($tabs); $i++) {
            $tabId = $updated['dashlets'][$i]['id'];
            $users_to_unsub = array();
            while ($pref = $db->fetchByAssoc($selectPrefResult)) {
                $rowD = unserialize(base64_decode($pref['contents']));
                foreach ($rowD['pages'] as $page => $da) {
                    if ($da['id'] == $tabId)
                        $users_to_unsub[] = $pref['assigned_user_id'];
                }
            }
            $this->unsubscribeTabUsersByIds($tabId, $users_to_unsub);
        }

        //UPDATE USERS' PREFERENCES TO ADD THE TABS
        foreach ($users as $user) {
            if ($user == '1')
                continue;
            $this->setDashboardInitial($user);
            $selectPreferenceQuery = "SELECT * FROM user_preferences WHERE category='Home' AND assigned_user_id = '{$user}' AND deleted = 0";
            $selectPreferenceResult = $db->query($selectPreferenceQuery);
            $prefRow = $db->fetchByAssoc($selectPreferenceResult);
            $rowData = unserialize(base64_decode($prefRow['contents']));
            $updatePreferenceQuery = "";
            if ($rowData && is_array($rowData)) {
                //empty out the existing managed tabs so they get re inserted in proper sequence
                $pages = $rowData['pages'];
                for ($i = count($pages) - 1; $i >= 0; $i--) {
                    $datum = $pages[$i];
                    if (!empty($datum['is_managed']) && $datum['is_managed'] == 'yes') {
                        array_splice($pages, $i, 1);
                    }
                }
                $rowData['pages'] = $pages;
                //append or replace a field
                foreach ($updated['dashlets'] as $p => $d) {
                    $found = false;
                    $d['is_managed'] = 'yes';
                    $d['managed_id'] = $d['id'];
                    foreach ($rowData['pages'] as $page => $datum) {
                        if ($datum['id'] && $datum['id'] == $d['id']) {
                            $found = true;
                            $rowData['pages'][$page] = $d;
                            break;
                        }
                    }
                    if (!$found)
                        $rowData['pages'][] = $d;
                }

                //append dashlets
                $rowData['dashlets'] = array_merge($rowData['dashlets'] ?? [], $dashlets_);
                $data = base64_encode(serialize($rowData));

                $updatePreferenceQuery = "UPDATE user_preferences SET contents='{$data}' WHERE assigned_user_id = '{$user}' AND deleted=0 AND category='Home'";
            } else {
                $n_updated = [];
                foreach ($updated['dashlets'] as $p => $d) {
                    $d['is_managed'] = 'yes';
                    $d['managed_id'] = $d['id'];
                    $n_updated[$p] = $d;
                }
                $rowData = array(
                    "dashlets" => $dashlets_,
                    "pages" => $n_updated
                );
                $data = base64_encode(serialize($rowData));
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $updatePreferenceQuery = "INSERT INTO user_preferences (id, category, deleted, date_entered, date_modified, assigned_user_id, contents) 
    VALUES('{$guid}', 'Home', 0, '{$now}', '{$now}', '{$user}', '{$data}')";
            }
            $updatePreferenceResult = $db->query($updatePreferenceQuery);
            if (!$updatePreferenceResult)
                $GLOBALS['log']->debug("Error inserting dashboard tabs for user with ID: " . $user);
        }

        //UPDATE ADMIN TO MAKE SURE ID'S ARE MAINTAINED

        $selectAdminQuery = "SELECT * FROM user_preferences WHERE category='Home' AND assigned_user_id = '1' AND deleted = 0";
        $selectAdminResult = $db->query($selectAdminQuery);
        $prefRow = $db->fetchByAssoc($selectAdminResult);
        $rowData = unserialize(base64_decode($prefRow['contents']));
        if ($rowData && is_array($rowData)) {
            for ($i = 0; $i < sizeof($tab_ids); $i++)
                $rowData['pages'][$i]['id'] = $tab_ids[$i];

            $data = base64_encode(serialize($rowData));

            $updateAdminQuery = "UPDATE user_preferences SET contents='{$data}' WHERE assigned_user_id = '1' AND deleted=0 AND category='Home'";
            $updateAdminResult = $db->query($updateAdminQuery);
            if (!$updateAdminResult)
                $GLOBALS['log']->debug("Error updating dashboard tabs for super admin");
        }

        SugarApplication::redirect("index.php?module=Administration&action=index");
    }

    private function setDashboardInitial($userId) {
        require_once('include/MySugar/MySugar.php');

        require('modules/Home/dashlets.php');
        if (!is_file($cachefile = sugar_cached('dashlets/dashlets.php'))) {
            require_once('include/Dashlets/DashletCacheBuilder.php');

            $dc = new DashletCacheBuilder();
            $dc->buildCache();
        }
        require $cachefile;
        $dash_user = BeanFactory::getBean('Users', $userId);
        $pages = $dash_user->getPreference('pages', 'Home');
        $dashlets = $dash_user->getPreference('dashlets', 'Home');
        $hasUserPreferences = (!isset($pages) || empty($pages) || !isset($dashlets) || empty($dashlets)) ? false : true;

        if (!$hasUserPreferences) {
            $dashlets = array();

            //list of preferences to move over and to where
            $prefstomove = array(
                'mypbss_date_start' => 'MyPipelineBySalesStageDashlet',
                'mypbss_date_end' => 'MyPipelineBySalesStageDashlet',
                'mypbss_sales_stages' => 'MyPipelineBySalesStageDashlet',
                'mypbss_chart_type' => 'MyPipelineBySalesStageDashlet',
                'lsbo_lead_sources' => 'OpportunitiesByLeadSourceByOutcomeDashlet',
                'lsbo_ids' => 'OpportunitiesByLeadSourceByOutcomeDashlet',
                'pbls_lead_sources' => 'OpportunitiesByLeadSourceDashlet',
                'pbls_ids' => 'OpportunitiesByLeadSourceDashlet',
                'pbss_date_start' => 'PipelineBySalesStageDashlet',
                'pbss_date_end' => 'PipelineBySalesStageDashlet',
                'pbss_sales_stages' => 'PipelineBySalesStageDashlet',
                'pbss_chart_type' => 'PipelineBySalesStageDashlet',
                'obm_date_start' => 'OutcomeByMonthDashlet',
                'obm_date_end' => 'OutcomeByMonthDashlet',
                'obm_ids' => 'OutcomeByMonthDashlet');

            //upgrading from pre-5.0 homepage
            $old_columns = $dash_user->getPreference('columns', 'home');
            $old_dashlets = $dash_user->getPreference('dashlets', 'home');

            if (isset($old_columns) && !empty($old_columns) && isset($old_dashlets) && !empty($old_dashlets)) {
                $columns = $old_columns;
                $dashlets = $old_dashlets;

                // resetting old columns and dashlets to have no preference and data
                $old_columns = array();
                $old_dashlets = array();
                $dash_user->setPreference('columns', $old_columns, 0, 'home');
                $dash_user->setPreference('dashlets', $old_dashlets, 0, 'home');
            } else {
                // This is here to get Sugar dashlets added above the rest
                $dashlets[create_guid()] = array('className' => 'SugarFeedDashlet',
                    'module' => 'SugarFeed',
                    'forceColumn' => 1,
                    'fileLocation' => $dashletsFiles['SugarFeedDashlet']['file'],
                );

                foreach ($defaultDashlets as $dashletName => $module) {
                    // clint - fixes bug #20398
                    // only display dashlets that are from visibile modules and that the user has permission to list
                    $myDashlet = new MySugar($module);
                    $displayDashlet = $myDashlet->checkDashletDisplay();
                    if (isset($dashletsFiles[$dashletName]) && $displayDashlet) {
                        $options = array();
                        $prefsforthisdashlet = array_keys($prefstomove, $dashletName);
                        foreach ($prefsforthisdashlet as $pref) {
                            $options[$pref] = $dash_user->getPreference($pref);
                        }
                        $dashlets[create_guid()] = array('className' => $dashletName,
                            'module' => $module,
                            'forceColumn' => 0,
                            'fileLocation' => $dashletsFiles[$dashletName]['file'],
                            'options' => $options);
                    }
                }

                $count = 0;
                $columns = array();
                $columns[0] = array();
                $columns[0]['width'] = '60%';
                $columns[0]['dashlets'] = array();
                $columns[1] = array();
                $columns[1]['width'] = '40%';
                $columns[1]['dashlets'] = array();

                foreach ($dashlets as $guid => $dashlet) {
                    if ($dashlet['forceColumn'] == 0) {
                        array_push($columns[0]['dashlets'], $guid);
                    } else {
                        array_push($columns[1]['dashlets'], $guid);
                    }
                    $count++;
                }
            }




            $dash_user->setPreference('dashlets', $dashlets, 0, 'Home');
        }
        // handles upgrading from versions that had the 'Dashboard' module; move those items over to the Home page
        $pagesDashboard = $dash_user->getPreference('pages', 'Dashboard');
        $dashletsDashboard = $dash_user->getPreference('dashlets', 'Dashboard');
        if (!empty($pagesDashboard)) {
            // move dashlets from the dashboard to be at the end of the home screen dashlets
            foreach ($pagesDashboard[0]['columns'] as $dashboardColumnKey => $dashboardColumn) {
                foreach ($dashboardColumn['dashlets'] as $dashletItem) {
                    $pages[0]['columns'][$dashboardColumnKey]['dashlets'][] = $dashletItem;
                }
            }
            $pages = array_merge($pages, $pagesDashboard);
            $dash_user->setPreference('pages', $pages, 0, 'Home');
        }
        if (!empty($dashletsDashboard)) {
            $dashlets = array_merge($dashlets, $dashletsDashboard);
            $dash_user->setPreference('dashlets', $dashlets, 0, 'Home');
        }
        if (!empty($pagesDashboard) || !empty($dashletsDashboard)) {
            $dash_user->resetPreferences('Dashboard');
        }

        if (empty($pages)) {
            $pages = array();
            $pageIndex = 0;
            $pages[0]['columns'] = $columns;
            $pages[0]['numColumns'] = '3';
            $pages[0]['pageTitleLabel'] = 'LBL_HOME_PAGE_1_NAME'; // "My Sugar"
            $pageIndex++;
            $dash_user->setPreference('pages', $pages, 0, 'Home');
            $dash_user->savePreferencesToDB();
            $activePage = 0;
        }
    }
}
