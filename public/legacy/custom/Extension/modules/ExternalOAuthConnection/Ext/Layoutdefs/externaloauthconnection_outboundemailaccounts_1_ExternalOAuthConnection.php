<?php
 // created: 2023-06-05 07:48:10
$layout_defs["ExternalOAuthConnection"]["subpanel_setup"]['externaloauthconnection_outboundemailaccounts_1'] = array (
  'order' => 100,
  'module' => 'OutboundEmailAccounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EXTERNALOAUTHCONNECTION_OUTBOUNDEMAILACCOUNTS_1_FROM_OUTBOUNDEMAILACCOUNTS_TITLE',
  'get_subpanel_data' => 'externaloauthconnection_outboundemailaccounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
