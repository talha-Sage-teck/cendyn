<?php
// created: 2024-02-15 03:49:34
$dictionary["opportunities_cb2b_hotels_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_cb2b_hotels_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'CB2B_Hotels',
      'rhs_table' => 'cb2b_hotels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_cb2b_hotels_1_c',
      'join_key_lhs' => 'opportunities_cb2b_hotels_1opportunities_ida',
      'join_key_rhs' => 'opportunities_cb2b_hotels_1cb2b_hotels_idb',
    ),
  ),
  'table' => 'opportunities_cb2b_hotels_1_c',
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
      'name' => 'opportunities_cb2b_hotels_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_cb2b_hotels_1cb2b_hotels_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_cb2b_hotels_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_cb2b_hotels_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_cb2b_hotels_1opportunities_ida',
        1 => 'opportunities_cb2b_hotels_1cb2b_hotels_idb',
      ),
    ),
  ),
);