<?php
$module_name = 'FP_events';
$listViewDefs [$module_name] = 
array (
  'B2BACTIVITYID' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_B2BACTIVITYID',
    'width' => '8%',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_END' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVITY_STATUS_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_ACTIVITY_STATUS',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '25%',
    'default' => true,
  ),
  'RESULTS' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RESULTS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'BUDGET' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_BUDGET',
    'currency_format' => true,
    'width' => '15%',
    'default' => false,
  ),
  'FP_EVENT_LOCATIONS_FP_EVENTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id' => 'FP_EVENT_LOCATIONS_FP_EVENTS_1FP_EVENT_LOCATIONS_IDA',
    'width' => '15%',
    'default' => false,
  ),
  'PRIORITY' =>
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
);
;
?>
