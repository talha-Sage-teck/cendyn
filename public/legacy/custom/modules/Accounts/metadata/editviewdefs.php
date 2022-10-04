<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 =>
        array (
          'file' => 'custom/modules/Accounts/js/custom.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'priority',
            'studio' => 'visible',
            'label' => 'LBL_PRIORITY',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'b2b_account_no',
            'label' => 'LBL_B2B_ACCOUNT_NO',
            'type' => 'readonly', /*** Never editable */
          ),
          1 => '',
        ),
        2 =>
        array (
          0 => /*** added accountbasetype and refactored the array such that accountbasetype and account_type fields are next to each other  */
          array (
            'name' => 'account_base_type',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNT_BASE_TYPE',
          ),
          1 =>
          array (
            'name' => 'account_type',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 =>
        array (
          0 => 
          array (
            'name' => 'iata',
            'label' => 'LBL_IATA',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        4 =>
        array (
          0 => 
          array (
            'name' => 'black_list',
            'studio' => 'visible',
            'label' => 'LBL_BLACKLIST',
          ),
          1 => 
          array (
            'name' => 'black_list_reason',
            'studio' => 'visible',
            'label' => 'LBL_BLACK_LIST_REASON',
          ),
        ),
        5 =>
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 'industry',
        ),
        6 =>
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        7 =>
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'annual_revenue',
          1 => 
          array (
            'name' => 'b2b_commission',
            'label' => 'LBL_B2B_COMMISSION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
