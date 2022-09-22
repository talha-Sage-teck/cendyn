<?php
$module_name = 'CB2B_PMSProfiles';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS',
    'width' => '10%',
    'default' => true,
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTACTNAME',
    'width' => '15%',
    'default' => true,
  ),
  'CONTACTFIRSTNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CONTACTFIRSTNAME',
    'width' => '10%',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
;
?>
