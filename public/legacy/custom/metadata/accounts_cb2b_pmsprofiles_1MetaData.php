<?php
// created: 2022-07-04 23:45:06
$dictionary["accounts_cb2b_pmsprofiles_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_cb2b_pmsprofiles_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'CB2B_PMSProfiles',
      'rhs_table' => 'cb2b_pmsprofiles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_cb2b_pmsprofiles_1_c',
      'join_key_lhs' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
      'join_key_rhs' => 'accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
    ),
  ),
  'table' => 'accounts_cb2b_pmsprofiles_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_cb2b_pmsprofiles_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_cb2b_pmsprofiles_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_cb2b_pmsprofiles_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_cb2b_pmsprofiles_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
      ),
    ),
  ),
);