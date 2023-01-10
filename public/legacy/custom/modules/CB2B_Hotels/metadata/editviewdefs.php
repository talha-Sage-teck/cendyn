<?php
$module_name = 'CB2B_Hotels';
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
          0 => 'description',
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aos_contracts_cb2b_hotels_1_name',
          ),
          1 => 
          array (
            'name' => 'aos_quotes_cb2b_hotels_1_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'opportunities_cb2b_hotels_1_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
