<?php
$module_name = 'cb2b_production_summary_data';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'property_name',
            'studio' => 'visible',
            'label' => 'LBL_PROPERTY_NAME',
          ),
          1 => 
          array (
            'name' => 'date_filter',
            'label' => 'LBL_DATE_FILTER',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'room_nights',
            'label' => 'LBL_ROOM_NIGHTS',
          ),
          1 => 
          array (
            'name' => 'missed_room_nights',
            'label' => 'LBL_MISSED_ROOM_NIGHTS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'room_revenue_usdollar',
            'label' => 'LBL_ROOM_REVENUE_USDOLLAR',
          ),
          1 => 
          array (
            'name' => 'total_revenue_usdollar',
            'label' => 'LBL_TOTAL_REVENUE_USDOLLAR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'adr',
            'label' => 'LBL_ADR',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'room_revenue_corporate',
            'label' => 'LBL_ROOM_REVENUE_CORPORATE',
          ),
          1 => 
          array (
            'name' => 'total_revenue_corporate',
            'label' => 'LBL_TOTAL_REVENUE_CORPORATE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'adr_corporate',
            'label' => 'LBL_ADR_CORPORATE',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
