<?php

// http://localhost/cendyn/public/legacy/index.php?entryPoint=testEntryPoint
function matchPMSProfiles() {
    global $db, $sugar_config;

    // Get Matching Criterias from Configuration
    $getMatchCriteriaQuery = "SELECT * FROM `config` WHERE `category`='MySettings' AND `name`='MatchCriteriaConfig'";
    $result = $db->query($getMatchCriteriaQuery, true);
    if ($result->num_rows <= 0) {
        $GLOBALS['log']->debug('matchPMSProfiles --> : Did not found MatchCriteriaConfig');
        return true;
    }

    // Unserialize the Configurations
    $record = $db->fetchByAssoc($result);
    $settings = unserialize(base64_decode($record['value']))['criteria'];

    $GLOBALS['log']->debug('$settings : ' . print_r($settings, 1));
}

matchPMSProfiles();
