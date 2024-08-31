<?php
$module_name = 'CB2B_Hotels';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SHORTNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHORTNAME',
    'width' => '10%',
    'default' => true,
  ),
  'BRAND' => 
  array (
    'studio' => 'visible',
    'label' => 'LBL_BRAND',
    'width' => '10%',
    'default' => true,
  ),
  'REGION' => 
  array (
    'studio' => 'visible',
    'label' => 'LBL_REGION',
    'width' => '10%',
    'default' => true,
  ),
  'HOTEL_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HOTEL_ADDRESS_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'HOTEL_ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_HOTEL_ADDRESS_COUNTRY',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'HOTEL_ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_HOTEL_ADDRESS_STREET',
    'width' => '10%',
    'default' => false,
  ),
  'HOTEL_ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_HOTEL_ADDRESS_STATE',
    'width' => '10%',
    'default' => false,
  ),
  'HOTEL_ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_HOTEL_ADDRESS_POSTALCODE',
    'width' => '10%',
    'default' => false,
  ),
  'FAX' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_FAX',
    'width' => '10%',
    'default' => false,
  ),
  'MAPPINGTARGET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_MAPPINGTARGET',
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
  'REMARKS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_REMARKS',
    'width' => '10%',
    'default' => false,
  ),
  'ACTIVE' => 
  array (
    'type' => 'radioenum',
    'studio' => 'visible',
    'default' => false,
    'label' => 'LBL_ACTIVE',
    'width' => '10%',
  ),
  'WEBSITE' => 
  array (
    'type' => 'url',
    'label' => 'LBL_WEBSITE',
    'width' => '10%',
    'default' => false,
  ),
  'TOTALROOMS' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TOTALROOMS',
    'width' => '10%',
  ),
  'TOTALBEDS' => 
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_TOTALBEDS',
    'width' => '10%',
  ),
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
?>
