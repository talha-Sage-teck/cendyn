<?php
$module_name = 'cb2b_production_summary_data';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PROPERTY_NAME' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PROPERTY_NAME',
    'id' => 'PROPERTY_ID',
    'link' => true,
    'width' => '10%',
    'module' => 'CB2B_Hotels',
//    'ACLTag' => 'CONTACT',
  ),
  'DATE_FILTER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DATE_FILTER',
    'width' => '10%',
    'default' => true,
  ),
  'YEAR' => 
  array (
    'type' => 'int',
    'label' => 'LBL_YEAR',
    'width' => '10%',
    'default' => true,
  ),
  'MONTH' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MONTH',
    'width' => '10%',
    'default' => true,
  ),
  'ROOM_NIGHTS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_ROOM_NIGHTS',
    'width' => '10%',
    'default' => true,
  ),
  'MISSED_ROOM_NIGHTS' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MISSED_ROOM_NIGHTS',
    'width' => '10%',
    'default' => true,
  ),
  'ROOM_REVENUE_USDOLLAR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ROOM_REVENUE_USDOLLAR',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_REVENUE_USDOLLAR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_REVENUE_USDOLLAR',
    'width' => '10%',
    'default' => true,
  ),
  'ADR' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ADR',
    'width' => '10%',
    'default' => true,
  ),
  'ROOM_REVENUE_CORPORATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ROOM_REVENUE_CORPORATE',
    'width' => '10%',
    'default' => true,
  ),
  'TOTAL_REVENUE_CORPORATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_TOTAL_REVENUE_CORPORATE',
    'width' => '10%',
    'default' => true,
  ),
  'ADR_CORPORATE' => 
  array (
    'type' => 'decimal',
    'label' => 'LBL_ADR_CORPORATE',
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
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
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
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
);
;
?>
