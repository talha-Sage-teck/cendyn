<?php

/***
 * Returns all the multi-related record IDs in the given module through the given field
 * @Input
 * Module
 * Record ID
 * Field name
 * @Output
 * Comma separated IDs
 */

// getting values from URL
$module = $_REQUEST['module'];
$id = $_REQUEST['id'];
$field = $_REQUEST['field'];

// loading bean and relationship name
$bean = BeanFactory::getBean(ucfirst($module), $id);
$rel = $bean->field_defs[$field]['relation'];

// making and displaying IDs string
if($bean->load_relationship($rel)) {
    $ids = $bean->$rel->get();
    echo implode(", ", $ids);
}
else {
    $GLOBALS['log']->fatal("getMultiRelatedIds(): Error occurred while loading multi-related IDs for $id of module $module");
    echo "";
}
