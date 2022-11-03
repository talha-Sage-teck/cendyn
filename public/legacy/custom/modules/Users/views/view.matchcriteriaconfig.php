<?php

/***
 * Custom view for Matching Criteria Config page
 */

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class UsersViewmatchcriteriaconfig extends SugarView
{

    function display()
    {
        global $sugar_config;
        $this->ss->assign('APP', $GLOBALS['app_strings']);
        $this->ss->assign('MOD', $GLOBALS['mod_strings']);
        $this->ss->assign('title', "P2P Profiles Matching Criteria");
        $settingArray = $this->MatchCriteriaSettings();
        echo '<script>'
            . 'criteria = ' . json_encode($settingArray['criteria']) . '</script>';

        $vals = array();
        $labels = array();
        $fields = $sugar_config['P2P_PROFILES_MATCHING_FIELDS'];
        foreach ($fields as $field => $label) {
            $vals[] = $field;
            $labels[] = $label;
        }
        $this->ss->assign('vals', $vals);
        $this->ss->assign('labels', $labels);
        $this->ss->assign('vals_s', implode(",", $vals));
        $this->ss->assign('labels_s', implode(",", $labels));
        echo $this->ss->fetch('custom/modules/Users/views/view.matchcriteriaconfig.tpl');
    }

    function MatchCriteriaSettings()
    {
        global $db;
        $query = "SELECT * FROM config WHERE category = 'MySettings' AND name = 'MatchCriteriaConfig'";
        $result = $db->query($query, true);
        if ($result->num_rows > 0) {
            $record = $db->fetchByAssoc($result);
            return unserialize(base64_decode($record['value']));
        }
        else {
            return null;
        }
    }
}
