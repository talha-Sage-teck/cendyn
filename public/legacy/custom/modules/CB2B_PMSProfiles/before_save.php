<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class beforeSaveHandler {

    /**
     * 
     * @param type $bean
     * @param type $event
     * @param type $arguments
     */
    function beforeSave(&$bean, $event, $arguments) {
        // Check if it's a new or existing record
        if ($bean->fetched_row == false) {
            $bean->is_update = 0;
            $GLOBALS['log']->fatal('It is a new record');
        } else {
            $bean->is_update = 1;
            $GLOBALS['log']->fatal('It is an existing record');
        }
    }

}
