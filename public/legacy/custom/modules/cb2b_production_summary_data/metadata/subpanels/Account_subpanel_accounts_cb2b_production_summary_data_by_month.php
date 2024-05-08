<?php
// created: 2024-05-08 11:38:14
$subpanel_layout['list_fields'] = array (
  'name' =>
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MONTHYEAR',
    'width' => '10%',
    'default' => true,
    'sortable' => false,
  ),
  'room_nights' =>
  array (
    'type' => 'int',
    'vname' => 'LBL_ROOM_NIGHTS_SUBPANEL',
    'width' => '16%',

  ),
  'missed_room_nights' =>
  array (
    'type' => 'int',
    'vname' => 'LBL_MISSED_ROOM_NIGHTS_SUBPANEL',
    'width' => '16%',
    'default' => true,
    'sortable' => false,
  ),
  'room_revenue_usdollar' =>
  array (
    'type' => 'decimal',
    'vname' => 'LBL_ROOM_REVENUE_SUBPANEL',
    'width' => '16%',
    'default' => true,
    'sortable' => false,
  ),
  'total_revenue_usdollar' =>
  array (
    'type' => 'decimal',
    'vname' => 'LBL_TOTAL_REVENUE_SUBPANEL',
    'width' => '16%',
    'default' => true,
    'sortable' => false,
  ),
  'adr' =>
  array (
    'type' => 'decimal',
    'vname' => 'LBL_ADR_SUBPANEL',
    'width' => '16%',
    'default' => true,
    'sortable' => false,
  ),
    'year' =>
        array (
            'name' => 'year',
            'usage' => 'query_only',
        ),
    'month' =>
        array (
            'name' => 'month',
            'usage' => 'query_only',
        ),
);
