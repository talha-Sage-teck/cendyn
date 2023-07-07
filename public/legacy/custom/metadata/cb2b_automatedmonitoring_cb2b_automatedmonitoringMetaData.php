<?php
// created: 2023-07-07 14:45:48
$dictionary["cb2b_automatedmonitoring_cb2b_automatedmonitoring"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'cb2b_automatedmonitoring_cb2b_automatedmonitoring' => 
    array (
      'lhs_module' => 'CB2B_AutomatedMonitoring',
      'lhs_table' => 'cb2b_automatedmonitoring',
      'lhs_key' => 'id',
      'rhs_module' => 'CB2B_AutomatedMonitoring',
      'rhs_table' => 'cb2b_automatedmonitoring',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cb2b_automatedmonitoring_cb2b_automatedmonitoring_c',
      'join_key_lhs' => 'cb2b_autom76cbitoring_ida',
      'join_key_rhs' => 'cb2b_autom7164itoring_idb',
    ),
  ),
  'table' => 'cb2b_automatedmonitoring_cb2b_automatedmonitoring_c',
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
      'name' => 'cb2b_autom76cbitoring_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cb2b_autom7164itoring_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cb2b_automatedmonitoring_cb2b_automatedmonitoringspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cb2b_automatedmonitoring_cb2b_automatedmonitoring_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cb2b_autom76cbitoring_ida',
        1 => 'cb2b_autom7164itoring_idb',
      ),
    ),
  ),
);