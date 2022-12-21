<?php
$popupMeta = array (
    'moduleMain' => 'FP_Event_Locations',
    'varName' => 'FP_Event_Locations',
    'orderBy' => 'fp_event_locations.name',
    'whereClauses' => array (
  'name' => 'fp_event_locations.name',
),
    'searchInputs' => array (
  0 => 'fp_event_locations_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'NAME' =>
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'DESCRIPTION' =>
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
    'name' => 'description',
  ),
  'CAPACITY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CAPACITY',
    'width' => '10%',
    'name' => 'capacity',
  ),
  'HOTEL_NAME' =>
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_HOTEL_NAME',
    'id' => 'CB2B_HOTELS_ID',
    'link' => true,
    'width' => '10%',
    'name' => 'hotel_name',
  ),
  'PROJECTOR' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_PROJECTOR',
    'width' => '10%',
    'name' => 'projector',
  ),
  'TV' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_TV',
    'width' => '10%',
    'name' => 'tv',
  ),
  'WIFI' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_WIFI',
    'width' => '10%',
    'name' => 'wifi',
  ),
  'MICROPHONE1' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_MICROPHONE1',
    'width' => '10%',
    'name' => 'microphone1',
  ),
  'MICROPHONE2' =>
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_MICROPHONE2',
    'width' => '10%',
    'name' => 'microphone2',
  ),
  'ADDRESS_CITY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_CITY',
    'width' => '10%',
    'name' => 'address_city',
  ),
  'ADDRESS_COUNTRY' =>
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_ADDRESS_COUNTRY',
    'width' => '10%',
    'name' => 'address_country',
  ),
  'ASSIGNED_USER_NAME' =>
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
