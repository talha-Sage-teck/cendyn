<?php
$module_name = 'cb2b_production_summary_data';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'property_name' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PROPERTY_NAME',
        'id' => 'PROPERTY_ID',
        'link' => true,
        'width' => '10%',
        'name' => 'property_name',
      ),
      'date_filter' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_DATE_FILTER',
        'width' => '10%',
        'default' => true,
        'name' => 'date_filter',
      ),
      'year' => 
      array (
        'type' => 'int',
        'label' => 'LBL_YEAR',
        'width' => '10%',
        'default' => true,
        'name' => 'year',
      ),
      'month' => 
      array (
        'type' => 'int',
        'label' => 'LBL_MONTH',
        'width' => '10%',
        'default' => true,
        'name' => 'month',
      ),
      'room_nights' => 
      array (
        'type' => 'int',
        'label' => 'LBL_ROOM_NIGHTS',
        'width' => '10%',
        'default' => true,
        'name' => 'room_nights',
      ),
      'missed_room_nights' => 
      array (
        'type' => 'int',
        'label' => 'LBL_MISSED_ROOM_NIGHTS',
        'width' => '10%',
        'default' => true,
        'name' => 'missed_room_nights',
      ),
      'room_revenue_usdollar' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ROOM_REVENUE_USDOLLAR',
        'width' => '10%',
        'default' => true,
        'name' => 'room_revenue_usdollar',
      ),
      'total_revenue_usdollar' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_TOTAL_REVENUE_USDOLLAR',
        'width' => '10%',
        'default' => true,
        'name' => 'total_revenue_usdollar',
      ),
      'adr' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ADR',
        'width' => '10%',
        'default' => true,
        'name' => 'adr',
      ),
      'room_revenue_corporate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ROOM_REVENUE_CORPORATE',
        'width' => '10%',
        'default' => true,
        'name' => 'room_revenue_corporate',
      ),
      'total_revenue_corporate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_TOTAL_REVENUE_CORPORATE',
        'width' => '10%',
        'default' => true,
        'name' => 'total_revenue_corporate',
      ),
      'adr_corporate' => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_ADR_CORPORATE',
        'width' => '10%',
        'default' => true,
        'name' => 'adr_corporate',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
