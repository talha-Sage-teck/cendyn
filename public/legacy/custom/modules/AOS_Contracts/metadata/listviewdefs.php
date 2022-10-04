<?php
$listViewDefs ['AOS_Contracts'] = 
array (
  'B2BCONTRACTID' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_B2BCONTRACTID',
    'width' => '10%',
  ),
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CONTRACT_ACCOUNT' => 
  array (
    'width' => '15%',
    'label' => 'LBL_CONTRACT_ACCOUNT',
    'default' => true,
    'module' => 'Accounts',
    'id' => 'CONTRACT_ACCOUNT_ID',
    'link' => true,
    'related_fields' => 
    array (
      0 => 'contract_account_id',
    ),
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CONTRACT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT_TYPE',
    'width' => '10%',
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'RATE_CODE' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_RATE_CODE',
    'width' => '10%',
  ),
  'ROOM_NIGHTS' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_ROOM_NIGHTS',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
    'module' => 'Users',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
  ),
  'TOTAL_CONTRACT_VALUE' => 
  array (
    'label' => 'LBL_TOTAL_CONTRACT_VALUE',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'REVENUE' =>
  array (
    'type' => 'currency',
    'default' => false,
    'label' => 'LBL_REVENUE',
    'currency_format' => true,
    'width' => '10%',
  ),
  'SUBTOTAL_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SUBTOTAL_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
  'DISCOUNT_AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DISCOUNT_AMOUNT',
    'currency_format' => true,
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
