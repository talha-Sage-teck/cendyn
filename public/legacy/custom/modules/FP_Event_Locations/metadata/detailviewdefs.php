<?php
$module_name = 'FP_Event_Locations';
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
      'useTabs' => true,
      'tabDefs' =>
      array (
        'DEFAULT' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' =>
        array (
          'newTab' => true,
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
          1 => 'date_entered',
        ),
        1 =>
        array (
          0 => 'description',
          1 =>
          array (
            'name' => 'capacity',
            'label' => 'LBL_CAPACITY',
          ),
        ),
        2 =>
        array (
          0 => 'hotel_name',
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 =>
          array (
            'name' => 'projector',
            'label' => 'LBL_PROJECTOR',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'address_city',
            'label' => 'LBL_ADDRESS_CITY',
          ),
          1 =>
          array (
            'name' => 'tv',
            'label' => 'LBL_TV',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'address_postalcode',
            'label' => 'LBL_ADDRESS_POSTALCODE',
          ),
          1 =>
          array (
            'name' => 'microphone1',
            'label' => 'LBL_MICROPHONE1',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'address_state',
            'label' => 'LBL_ADDRESS_STATE',
          ),
          1 =>
          array (
            'name' => 'microphone2',
            'label' => 'LBL_MICROPHONE2',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'address_country',
            'label' => 'LBL_ADDRESS_COUNTRY',
          ),
          1 =>
          array (
            'name' => 'wifi',
            'label' => 'LBL_WIFI',
          ),
        ),
        5 =>
        array (
          0 => '',
          1 =>
          array (
            'name' => 'water',
            'label' => 'LBL_WATER',
          ),
        ),
      ),
      'lbl_editview_panel2' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'arrangement',
            'studio' => 'visible',
            'label' => 'LBL_ARRANGEMENT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
