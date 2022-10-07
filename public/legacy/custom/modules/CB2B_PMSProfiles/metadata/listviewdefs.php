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
  'ACCOUNTS_CB2B_PMSPROFILES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_CB2B_PMSPROFILES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'HOTEL_SHORT_NAME' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_HOTEL_SHORT_NAME',
    'width' => '10%',
  ),
  'TYPE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'PMS_ADDRESS_STREET' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PMS_ADDRESS_STREET',
    'width' => '10%',
  ),
  'PMS_ADDRESS_CITY' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_PMS_ADDRESS_CITY',
    'width' => '10%',
  ),
  'PHONE' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_PHONE',
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
  'PMS_ADDRESS_STATE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PMS_ADDRESS_STATE',
    'width' => '10%',
  ),
  'PMS_ADDRESS_POSTALCODE' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PMS_ADDRESS_POSTALCODE',
    'width' => '10%',
  ),
  'PMS_ADDRESS_COUNTRY' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_PMS_ADDRESS_COUNTRY',
    'width' => '10%',
  ),
  'WEBSITE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_WEBSITE',
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
  'EMAIL' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_EMAIL',
    'width' => '10%',
    'default' => false,
  ),
  'DONOTEMAIL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_DONOTEMAIL',
    'width' => '10%',
  ),
  'B2BPROFILEID' => 
  array (
    'type' => 'int',
    'label' => 'LBL_B2BPROFILEID',
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
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
