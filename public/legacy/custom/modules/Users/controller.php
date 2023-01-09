<?php

/* * *
 * Overriding original Users' module controller to add actions related to Match Criteria and Standard Dashboard config
 */


if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once __DIR__ . '/../../../modules/Users/controller.php';

class CustomUsersController extends UsersController {

    function action_matchCriteriaConfig() {
        if (is_admin($GLOBALS['current_user'])) {
            $this->view = 'matchcriteriaconfig';
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

    function unsubscribeUsers($delete) {
        global $db;
        $selectQ = "SELECT * FROM user_preferences WHERE category='Home' AND deleted = 0 AND assigned_user_id <> '1'";
        $resultQ = $db->query($selectQ);
        while ($row = $db->fetchByAssoc($resultQ)) {
            if ($row['contents'] && strlen(trim($row['contents'])) !== 0) {
                $rowData = unserialize(base64_decode($row['contents']));
                $array = $rowData['pages'];
                $subkey = "id";
                $array = array_filter($array, function ($v) use (&$array, $subkey, $delete) {
                    if(empty($v['is_managed'])){
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
                $data = base64_encode(serialize($rowData));

                //perhaps we would have to remove dashlets too; not likely

                $deleteQ = "UPDATE user_preferences SET contents = '{$data}' WHERE category='Home' AND deleted=0 AND assigned_user_id='{$row['assigned_user_id']}'";
                $dresultQ = $db->query($deleteQ);
                if (!$dresultQ)
                    $GLOBALS['log']->fatal("Error updating dashboard tabs for user with ID: {$row['assigned_user_id']}");
            }
        }
    }

    function unsubscribeTabUsersByIds($tab, $users) {
        global $db;
        $selected_users = array_map(function($user) {
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
                    $GLOBALS['log']->fatal("Error updating dashboard tabs for user with ID: {$row['assigned_user_id']}");
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
        $selected_users = array_map(function($user) {
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
            $selectPreferenceQuery = "SELECT * FROM user_preferences WHERE category='Home' AND assigned_user_id = '{$user}' AND deleted = 0";
            $selectPreferenceResult = $db->query($selectPreferenceQuery);
            $prefRow = $db->fetchByAssoc($selectPreferenceResult);
            $rowData = unserialize(base64_decode($prefRow['contents']));
            $updatePreferenceQuery = "";
            if ($rowData && is_array($rowData)) {
                //append or replace a field
                foreach ($updated['dashlets'] as $p => $d) {
                    $found = false;
                    $d['is_managed']='yes';
                    $d['managed_id']=$d['id'];
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
                $rowData['dashlets'] = array_merge($rowData['dashlets'], $dashlets_);
                $data = base64_encode(serialize($rowData));

                $updatePreferenceQuery = "UPDATE user_preferences SET contents='{$data}' WHERE assigned_user_id = '{$user}' AND deleted=0 AND category='Home'";
            }
            else {
                $rowData = array(
                    "dashlets" => $dashlets_,
                    "pages" => $updated['dashlets']
                );
                $data = base64_encode(serialize($rowData));
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $updatePreferenceQuery = "INSERT INTO user_preferences (id, category, deleted, date_entered, date_modified, assigned_user_id, contents) 
    VALUES('{$guid}', 'Home', 0, '{$now}', '{$now}', '{$user}', '{$data}')";
            }
            $updatePreferenceResult = $db->query($updatePreferenceQuery);
            if (!$updatePreferenceResult)
                $GLOBALS['log']->fatal("Error inserting dashboard tabs for user with ID: " . $user);
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
                $GLOBALS['log']->fatal("Error updating dashboard tabs for super admin");
        }

        SugarApplication::redirect("index.php?module=Administration&action=index");
    }

}
