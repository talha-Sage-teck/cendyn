<?php
$listViewDefs ['Tasks'] = 
array (
  'B2BACTIVITYID' =>
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_B2BACTIVITYID',
    'width' => '8%',
  ),
  'TYPE' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYPE',
    'width' => '8%',
  ),
  'NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '40%',
    'default' => true,
  ),
  'DATE_DUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DUE_DATE',
    'link' => false,
    'default' => true,
  ),
  'SET_COMPLETE' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => true,
    'ACLTag' => 'CONTACT',
    'related_fields' => 
    array (
      0 => 'contact_id',
    ),
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => true,
  ),
  'RESULT' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RESULT',
    'width' => '8%',
  ),
  'PRIORITY' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
  'DATE_START' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_START_DATE',
    'link' => false,
    'default' => false,
  ),
  'PARENT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_RELATED_TO',
    'dynamic_module' => 'PARENT_TYPE',
    'id' => 'PARENT_ID',
    'link' => true,
    'default' => false,
    'sortable' => false,
    'ACLTag' => 'PARENT',
    'related_fields' => 
    array (
      0 => 'parent_id',
      1 => 'parent_type',
    ),
  ),
  'TIME_DUE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DUE_TIME',
    'sortable' => false,
    'link' => false,
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '10%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'SUBJECT' =>
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_SUBJECT',
    'width' => '20%',
  ),
);
;
?>
