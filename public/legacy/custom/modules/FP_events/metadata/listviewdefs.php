<?php
$module_name = 'FP_events';
$listViewDefs [$module_name] =
array (
  'NAME' =>
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DATE_START' =>
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '15%',
    'default' => true,
  ),
  'DATE_END' =>
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '15%',
    'default' => true,
  ),
  'DURATION' =>
  array (
    'type' => 'enum',
    'label' => 'LBL_DURATION',
    'width' => '10%',
    'default' => true,
  ),
  'FP_EVENT_LOCATIONS_FP_EVENTS_1_NAME' =>
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE',
    'id' => 'FP_EVENT_LOCATIONS_FP_EVENTS_1FP_EVENT_LOCATIONS_IDA',
    'width' => '15%',
    'default' => true,
  ),
  'CHK_LUNCH' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CHK_LUNCH',
    'width' => '10%',
  ),
  'CHK_REFRESHMENTS' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_CHK_REFRESHMENTS',
    'width' => '10%',
  ),
  'DESCRIPTION' =>
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
