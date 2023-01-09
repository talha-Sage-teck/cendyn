<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class UsersLogicHooks {
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

    function trimAdminDashlets($pages, $dashlets) {
        $dashes = array_keys($dashlets);
        for($i = 0; $i < sizeof($pages); $i++) {
            $j = 0;
            while(is_array($pages[$i]['columns'][$j]['dashlets'])) {
                $array = $pages[$i]['columns'][$j]['dashlets'];
                $array = array_filter($array, function($v) use ($dashes) {
                    if (!in_array($v, $dashes))
                        return false;
                    else
                        return true;
                });
                $pages[$i]['columns'][$j]['dashlets'] = array_values($array);
                ++$j;
            }
        }

        return $pages;
    }

    function trimDashlets($user, $adminDashlets) {
        $extraUserDashlets = array_diff(array_keys($user['dashlets']), $adminDashlets);
        $falsePositives = array();
        foreach($extraUserDashlets as $dashlet) {
            $found = false;
            for($i = 0; $i < sizeof($user['pages']); $i++) {
                $j = 0;
                while(is_array($user['pages'][$i]['columns'][$j]['dashlets'])) {
                    if(in_array($dashlet, $user['pages'][$i]['columns'][$j]['dashlets']))
                        $found = true;
                    ++$j;
                }
            }
            if(!$found)
                $falsePositives[] = $dashlet;
        }

        $array = $user['dashlets'];
        $array = array_filter($array, function ($key) use (&$array, $falsePositives) {
            if (in_array($key, $falsePositives))
                return false;
            else
                return true;
        }, ARRAY_FILTER_USE_KEY);
        return $array;
    }

    function after_login_method($bean, $event, $arguments) {
        global $db, $sugar_config;
        if($bean->id === $sugar_config['SUPER_ADMIN_ID'])
            return;

        $settings = $this->standardDashboardSettings();
        $tab_ids = $settings['tab_ids'];
        $tab_ids = preg_replace('/&#38;/i', '"', $tab_ids);
        $tab_ids = json_decode($tab_ids, true);

        $selectAdminPrefs = "SELECT * FROM user_preferences WHERE category='Home' AND deleted=0 AND assigned_user_id='{$sugar_config['SUPER_ADMIN_ID']}'";
        $selectAdminResult = $db->query($selectAdminPrefs);
        $admin = $db->fetchByAssoc($selectAdminResult);
        $adminData = unserialize(base64_decode($admin['contents']));
        $dashlets_ = $adminData['dashlets'];
        $pages = $this->trimAdminDashlets($adminData['pages'], $adminData['dashlets']);

        $selectPreferenceQuery = "SELECT * FROM user_preferences WHERE category='Home' AND assigned_user_id = '{$bean->id}' AND deleted = 0";
        $selectPreferenceResult = $db->query($selectPreferenceQuery);
        $prefRow = $db->fetchByAssoc($selectPreferenceResult);
        $rowData = unserialize(base64_decode($prefRow['contents']));
        if($rowData && is_array($rowData)) {
            if(!empty($tab_ids)&&is_countable($tab_ids)){
                for($i = 0; $i < sizeof($tab_ids); $i++){
                    foreach ($rowData['pages'] as $page => $datum) {
                        if(empty($datum['is_managed'])){
                            continue;
                        }
                        if ($datum['id'] && $datum['id'] == $tab_ids[$i]) {
                            if(empty($pages[$i])){
                                unset($rowData['pages'][$page]);
                            }
                            else{
                                $rowData['pages'][$page] = $pages[$i];
                                $rowData['pages'][$page]['is_managed']='yes';
                                $rowData['pages'][$page]['id'] = $tab_ids[$i];
                            }

                        }
                    }
                }
            }
            $new_array=[];
            //First keep the synced dashboards
            $new_array[]=$rowData['pages'][0];
            for ($i=1;$i<count($rowData['pages']);$i++){
                $datum=$rowData['pages'][$i];
                if(empty($datum['is_managed'])){
                    $new_array[]=$datum;
                }
            }
            //Then put the user own dashboards
            for ($i=1;$i<count($rowData['pages']);$i++){
                $datum=$rowData['pages'][$i];
                if(!empty($datum['is_managed'])){
                    $new_array[]=$datum;
                }
            }
            $rowData['pages']=$new_array;

            $rowData['dashlets'] = array_merge($rowData['dashlets']??[], $dashlets_);
            $rowData['dashlets'] = $this->trimDashlets($rowData, $adminData['dashlets']);
            $data = base64_encode(serialize($rowData));
            $updatePreferenceQuery = "UPDATE user_preferences SET contents='{$data}' WHERE assigned_user_id = '{$bean->id}' AND category='Home' AND deleted=0";
            $updatePreferenceResult = $db->query($updatePreferenceQuery);
            if(!$updatePreferenceResult)
                $GLOBALS['log']->fatal("After Login: Error updating dashboard tabs for user with ID: " . $bean->id);
        }
    }
}
