<?php
$module_name = 'CB2B_Hotels';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 =>
          array (
            'name' => 'name',
            'type' => 'readonly',
          ),
          1 => 'assigned_user_name',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'b2bhotelid',
            'type' => 'readonly',
          ),
          1 =>
          array (
            'name' => 'brand',
            'type' => 'readonly',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'address',
            'type' => 'readonly',
          ),
          1 =>
          array (
            'name' => 'address_city',
            'type' => 'readonly',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'address_city',
            'type' => 'readonly',
          ),
          1 =>
          array (
            'name' => 'address_postalcode',
            'type' => 'readonly',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'address_country',
            'type' => 'readonly',
          ),
          1 =>
          array (
            'name' => 'region',
            'type' => 'readonly',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'phone',
            'type' => 'readonly',
          ),
        ),
        6 =>
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        7 =>
        array (
          0 => 'description',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
