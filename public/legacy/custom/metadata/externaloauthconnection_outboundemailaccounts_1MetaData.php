<?php
// created: 2023-06-05 07:48:10
$dictionary["externaloauthconnection_outboundemailaccounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'externaloauthconnection_outboundemailaccounts_1' => 
    array (
      'lhs_module' => 'ExternalOAuthConnection',
      'lhs_table' => 'external_oauth_connections',
      'lhs_key' => 'id',
      'rhs_module' => 'OutboundEmailAccounts',
      'rhs_table' => 'outbound_email',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'externaloauthconnection_outboundemailaccounts_1_c',
      'join_key_lhs' => 'externaloae73fnection_ida',
      'join_key_rhs' => 'externaloa752bccounts_idb',
    ),
  ),
  'table' => 'externaloauthconnection_outboundemailaccounts_1_c',
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
      'name' => 'externaloae73fnection_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'externaloa752bccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'externaloauthconnection_outboundemailaccounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'externaloauthconnection_outboundemailaccounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'externaloae73fnection_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'externaloauthconnection_outboundemailaccounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'externaloa752bccounts_idb',
      ),
    ),
  ),
);