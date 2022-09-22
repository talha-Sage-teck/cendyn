<?php
$module_name = 'CB2B_PMSProfiles';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'contactname' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTACTNAME',
        'width' => '10%',
        'default' => true,
        'name' => 'contactname',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'address_city' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_CITY',
        'width' => '10%',
        'default' => true,
        'name' => 'address_city',
      ),
      'address_state' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_STATE',
        'width' => '10%',
        'default' => true,
        'name' => 'address_state',
      ),
      'address_country' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_ADDRESS_COUNTRY',
        'width' => '10%',
        'default' => true,
        'name' => 'address_country',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
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
