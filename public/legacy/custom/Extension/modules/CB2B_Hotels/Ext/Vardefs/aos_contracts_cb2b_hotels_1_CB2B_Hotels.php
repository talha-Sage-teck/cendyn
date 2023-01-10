<?php
// created: 2023-01-10 12:08:43
$dictionary["CB2B_Hotels"]["fields"]["aos_contracts_cb2b_hotels_1"] = array (
  'name' => 'aos_contracts_cb2b_hotels_1',
  'type' => 'link',
  'relationship' => 'aos_contracts_cb2b_hotels_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_AOS_CONTRACTS_CB2B_HOTELS_1_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'aos_contracts_cb2b_hotels_1aos_contracts_ida',
);
$dictionary["CB2B_Hotels"]["fields"]["aos_contracts_cb2b_hotels_1_name"] = array (
  'name' => 'aos_contracts_cb2b_hotels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_CONTRACTS_CB2B_HOTELS_1_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'aos_contracts_cb2b_hotels_1aos_contracts_ida',
  'link' => 'aos_contracts_cb2b_hotels_1',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["CB2B_Hotels"]["fields"]["aos_contracts_cb2b_hotels_1aos_contracts_ida"] = array (
  'name' => 'aos_contracts_cb2b_hotels_1aos_contracts_ida',
  'type' => 'link',
  'relationship' => 'aos_contracts_cb2b_hotels_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_CONTRACTS_CB2B_HOTELS_1_FROM_CB2B_HOTELS_TITLE',
);
