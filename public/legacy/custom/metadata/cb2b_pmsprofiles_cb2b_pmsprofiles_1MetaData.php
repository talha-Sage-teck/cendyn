<?php
// created: 2022-11-04 07:39:09
$dictionary["cb2b_pmsprofiles_cb2b_pmsprofiles_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'cb2b_pmsprofiles_cb2b_pmsprofiles_1' => 
    array (
      'lhs_module' => 'CB2B_PMSProfiles',
      'lhs_table' => 'cb2b_pmsprofiles',
      'lhs_key' => 'id',
      'rhs_module' => 'CB2B_PMSProfiles',
      'rhs_table' => 'cb2b_pmsprofiles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1_c',
      'join_key_lhs' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_ida',
      'join_key_rhs' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
    ),
  ),
  'table' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1_c',
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
      'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cb2b_pmsprofiles_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb',
      ),
    ),
  ),
);