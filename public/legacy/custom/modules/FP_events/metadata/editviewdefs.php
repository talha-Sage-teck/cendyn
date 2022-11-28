<?php
$module_name = 'FP_events';
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
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'required' => true,
            ),
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
            'type' => 'datetimecombo',
            'displayParams' =>
            array (
              'required' => true,
            ),
          ),
          1 =>
          array (
            'name' => 'duration',
            'customCode' => '
                @@FIELD@@
                <input id="duration_hours" name="duration_hours" type="hidden" value="{$fields.duration_hours.value}">
                <input id="duration_minutes" name="duration_minutes" type="hidden" value="{$fields.duration_minutes.value}">
                {sugar_getscript file="modules/FP_events/duration_dependency.js"}
                <script type="text/javascript">
                    var date_time_format = "{$CALENDAR_FORMAT}";
                    {literal}
                    SUGAR.util.doWhen(function(){return typeof DurationDependency != "undefined" && typeof document.getElementById("duration") != "undefined"}, function(){
                        var duration_dependency = new DurationDependency("date_start","date_end","duration",date_time_format);
                        initEditView(YAHOO.util.Selector.query(\'select#duration\')[0].form);
                    });
                    {/literal}
                </script>            
            ',
            'customCodeReadOnly' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV} ',
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
