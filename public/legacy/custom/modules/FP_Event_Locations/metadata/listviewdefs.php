<?php
$module_name = 'FP_Event_Locations';
$listViewDefs [$module_name] =
array (
  'NAME' =>
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'DESCRIPTION' =>
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'CAPACITY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAPACITY',
    'width' => '10%',
  ),
  'PROJECTOR' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_PROJECTOR',
    'width' => '10%',
  ),
  'TV' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TV',
    'width' => '10%',
  ),
  'WIFI' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_WIFI',
    'width' => '10%',
  ),
  'MICROPHONE1' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_MICROPHONE1',
    'width' => '10%',
  ),
  'MICROPHONE2' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_MICROPHONE2',
    'width' => '10%',
  ),
  'ADDRESS_CITY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
  ),
  'ADDRESS_COUNTRY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
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
