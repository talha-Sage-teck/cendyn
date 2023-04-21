<?php
// created: 2023-04-21 01:00:54
$dictionary["aos_contracts_cb2b_hotels_2"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aos_contracts_cb2b_hotels_2' => 
    array (
      'lhs_module' => 'AOS_Contracts',
      'lhs_table' => 'aos_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'CB2B_Hotels',
      'rhs_table' => 'cb2b_hotels',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aos_contracts_cb2b_hotels_2_c',
      'join_key_lhs' => 'aos_contracts_cb2b_hotels_2aos_contracts_ida',
      'join_key_rhs' => 'aos_contracts_cb2b_hotels_2cb2b_hotels_idb',
    ),
  ),
  'table' => 'aos_contracts_cb2b_hotels_2_c',
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
      'name' => 'aos_contracts_cb2b_hotels_2aos_contracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aos_contracts_cb2b_hotels_2cb2b_hotels_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aos_contracts_cb2b_hotels_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aos_contracts_cb2b_hotels_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aos_contracts_cb2b_hotels_2aos_contracts_ida',
        1 => 'aos_contracts_cb2b_hotels_2cb2b_hotels_idb',
      ),
    ),
  ),
);