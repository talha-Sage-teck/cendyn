<?php

$module_name = 'CB2B_AutomatedMonitoring';
$listViewDefs [$module_name] = array(
    'NAME' =>
    array(
        'width' => '32%',
        'label' => 'LBL_NAME',
        'default' => true,
        'link' => true,
    ),
//  'PARENT_NAME' => 
//  array (
//    'type' => 'parent',
//    'studio' => 'visible',
//    'label' => 'LBL_FLEX_RELATE',
//    'link' => true,
//    'sortable' => false,
//    'ACLTag' => 'PARENT',
//    'dynamic_module' => 'PARENT_TYPE',
//    'id' => 'PARENT_ID',
//    'related_fields' => 
//    array (
//      0 => 'parent_id',
//      1 => 'parent_type',
//    ),
//    'width' => '10%',
//    'default' => true,
//  ),
    'RELATED_TO_MODULE' =>
    array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RELATED_TO_MODULE',
        'width' => '10%',
        'default' => true,
    ),
    'REPORTED_TIME' =>
    array(
        'type' => 'datetimecombo',
        'label' => 'LBL_REPORTED_TIME',
        'width' => '10%',
        'default' => true,
    ),
    'ERROR_STATUS' =>
    array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ERROR_STATUS',
        'width' => '10%',
        'default' => true,
    ),
    'REQUEST_TYPE' =>
    array(
        'type' => 'varchar',
        'label' => 'LBL_REQUEST_TYPE',
        'width' => '10%',
        'default' => true,
    ),
    'CONCERNED_TEAM' =>
    array(
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CONCERNED_TEAM',
        'width' => '10%',
        'default' => false,
    ),
    'DATE_ENTERED' =>
    array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
    ),
    'DATE_MODIFIED' =>
    array(
        'type' => 'datetime',
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10%',
        'default' => true,
    ),
    'HTTP_CODE' =>
    array(
        'type' => 'varchar',
        'label' => 'LBL_HTTP_CODE',
        'width' => '10%',
        'default' => false,
    ),
    'OPERATION' =>
    array(
        'type' => 'varchar',
        'label' => 'LBL_OPERATION',
        'width' => '10%',
        'default' => false,
    ),
    'ASSIGNED_USER_NAME' =>
    array(
        'width' => '9%',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'module' => 'Employees',
        'id' => 'ASSIGNED_USER_ID',
        'default' => true,
    ),
);
;
?>
