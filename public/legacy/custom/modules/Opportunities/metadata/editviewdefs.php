<?php
$viewdefs ['Opportunities'] =
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
      'javascript' => '{$PROBABILITY_SCRIPT}',
      'useTabs' => false,
      'tabDefs' =>
      array (
        'DEFAULT' =>
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' =>
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
          0 =>
          array (
            'name' => 'name',
          ),
          1 => 'account_name',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'b2b_opportunity_type',
            'studio' => 'visible',
            'label' => 'LBL_B2B_OPPORTUNITY_TYPE',
          ),
          1 => 'opportunity_type',
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'date_closed',
          ),
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'amount',
          ),
        ),
        4 =>
        array (
          0 => 'sales_stage',
          1 => 'lead_source',
        ),
        5 =>
        array (
          0 => 'probability',
          1 => 'campaign_name',
        ),
        6 =>
        array (
          0 => 'next_step',
        ),
        7 =>
        array (
          0 => 'description',
          1 => 'associate_hotels_opportunity',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (
          0 => 'assigned_user_name',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 =>
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        2 =>
        array (
          0 =>
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 =>
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
    ),
  ),
);
;
?>
