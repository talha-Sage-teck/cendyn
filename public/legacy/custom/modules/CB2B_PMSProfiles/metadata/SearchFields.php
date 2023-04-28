<?php
// created: 2022-10-18 20:27:01
$searchFields['CB2B_PMSProfiles'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'is_assigned_account' => 
  array (
    'db_field' => 
    array (
      0 => 'id',
    ),
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT cb2b_pmsprofiles.id FROM cb2b_pmsprofiles LEFT JOIN accounts_cb2b_pmsprofiles_1_c ON cb2b_pmsprofiles.id = accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb LEFT JOIN accounts ON accounts.id = accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida WHERE (({0} = 0 AND ((accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida IS NULL OR accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = "") OR accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NULL AND accounts.name IS NOT NULL AND accounts.name = "")) OR ({0} = 1 AND ((accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida IS NOT NULL AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida != "") AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NOT NULL AND accounts.name IS NOT NULL AND accounts.name != ""))) AND accounts_cb2b_pmsprofiles_1_c.deleted = 0',
  ),
);
