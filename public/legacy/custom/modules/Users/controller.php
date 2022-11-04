<?php

/* * *
 * Overriding original Users' module controller to add actions related to Match Criteria Config
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

}
