<?php
$module_name = 'FP_events';
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
        'hidden' =>
        array (
          0 => '<input id="custom_hidden_1" type="hidden" name="custom_hidden_1" value=""/>',
          1 => '<input id="custom_hidden_2" type="hidden" name="custom_hidden_2" value=""/>',
        ),
      ),
      'maxColumns' => '2',
      'includes' =>
      array (
        0 =>
        array (
          'file' => 'include/javascript/checkbox.js',
        ),
        1 =>
        array (
          'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
        ),
      ),
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
        'LBL_PANEL_OVERVIEW' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' =>
    array (
      'LBL_PANEL_OVERVIEW' =>
      array (
        0 =>
        array (
          0 => 'name',
          1 =>
          array (
            'name' => 'fp_event_locations_fp_events_1_name',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'acc',
            'studio' => 'visible',
            'label' => 'LBL_ACC',
          ),
          1 =>
          array (
            'name' => 'contract',
            'studio' => 'visible',
            'label' => 'LBL_CONTRACT',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'date_start',
            'comment' => 'Date of start of meeting',
            'label' => 'LBL_DATE',
          ),
          1 =>
          array (
            'name' => 'opportunity',
            'studio' => 'visible',
            'label' => 'LBL_OPPORTUNITY',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'date_end',
            'comment' => 'Date meeting ends',
            'label' => 'LBL_DATE_END',
          ),
          1 =>
          array (
            'name' => 'duration',
            'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV} ',
            'label' => 'LBL_DURATION',
          ),
        ),
        4 =>
        array (
          0 => 'description',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'activity_status_type',
            'label' => 'LBL_ACTIVITY_STATUS',
          ),
        ),
        6 =>
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'chk_projector',
            'label' => 'LBL_CHK_PROJECTOR',
          ),
          1 =>
          array (
            'name' => 'chk_tv',
            'label' => 'LBL_CHK_TV',
          ),
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'chk_micro',
            'label' => 'LBL_CHK_MICRO',
          ),
          1 =>
          array (
            'name' => 'chk_micro2',
            'label' => 'LBL_CHK_MICRO2',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'chk_refreshments',
            'label' => 'LBL_CHK_REFRESHMENTS',
          ),
          1 =>
          array (
            'name' => 'date1',
            'label' => 'LBL_DATE1',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'chk_lunch',
            'label' => 'LBL_CHK_LUNCH',
          ),
          1 =>
          array (
            'name' => 'date2',
            'label' => 'LBL_DATE2',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'information',
            'label' => 'LBL_INFORMATION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
