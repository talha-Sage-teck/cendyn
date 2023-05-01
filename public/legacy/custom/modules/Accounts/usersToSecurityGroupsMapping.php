<?php

// http://localhost/cendyn_hasham/cendyn/public/legacy/index.php?entryPoint=usersToSecurityGroupsMapping


function usersToSecurityGroupsMapping() {
    require_once 'test.php';
    global $db, $timedate;
    $dateTimeStamp = $timedate->nowDb();

    foreach ($usersToSecurityGroupsMappingArr as $key => $value) {
        print '<pre>';
        if (count($value) !== 0) {

            $findUserQuery = "SELECT id, user_name FROM `users` WHERE `user_name`='{$key}'";
            $res = $db->query($findUserQuery, true);
            $userRecord = $db->fetchByAssoc($res);
            if ($res->num_rows > 0) {
                $GLOBALS['log']->fatal("+++ User {$key} found");
            } else {
                $GLOBALS['log']->fatal("--- User {$key} not found");
            }


            $GLOBALS['log']->fatal('$key : ' . print_r($key, 1));
            $GLOBALS['log']->fatal('$value : ' . print_r($value, 1));
            foreach ($value as $securityGroup) {
//                $GLOBALS['log']->fatal('$securityGroup : ' . print_r($securityGroup, 1));
                $findSecurityGroupQuery = "SELECT id, name FROM `securitygroups` WHERE `name`='{$securityGroup}'";
                $result = $db->query($findSecurityGroupQuery, true);
                $securityGroupRecord = $db->fetchByAssoc($result);
                if ($result->num_rows > 0) {
                    $GLOBALS['log']->fatal("+++ Security Group {$securityGroup} found");
                } else {
                    $GLOBALS['log']->fatal("--- Security Group {$securityGroup} not found");
                }

                $insertQuery = "INSERT INTO `securitygroups_users` (`id`, `date_modified`, `deleted`, `securitygroup_id`, `user_id`, `noninheritable`) VALUES "
                        . "('" . create_guid() . "', '{$dateTimeStamp}', '0', '{$securityGroupRecord['id']}', '{$userRecord['id']}', '0');";
                print_r($insertQuery);
                echo '<br>';
            }
            $GLOBALS['log']->fatal('');
            $GLOBALS['log']->fatal('');
            $GLOBALS['log']->fatal('-------------------------------------------------------');
            $GLOBALS['log']->fatal('');
            $GLOBALS['log']->fatal('');
        }
    }
}

usersToSecurityGroupsMapping();
