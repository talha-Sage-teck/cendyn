<?php
// created: 2023-01-10 12:19:22
$dictionary["CB2B_Hotels"]["fields"]["opportunities_cb2b_hotels_1"] = array (
  'name' => 'opportunities_cb2b_hotels_1',
  'type' => 'link',
  'relationship' => 'opportunities_cb2b_hotels_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_CB2B_HOTELS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_cb2b_hotels_1opportunities_ida',
);
$dictionary["CB2B_Hotels"]["fields"]["opportunities_cb2b_hotels_1_name"] = array (
  'name' => 'opportunities_cb2b_hotels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_CB2B_HOTELS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_cb2b_hotels_1opportunities_ida',
  'link' => 'opportunities_cb2b_hotels_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["CB2B_Hotels"]["fields"]["opportunities_cb2b_hotels_1opportunities_ida"] = array (
  'name' => 'opportunities_cb2b_hotels_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_cb2b_hotels_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_CB2B_HOTELS_1_FROM_CB2B_HOTELS_TITLE',
);
