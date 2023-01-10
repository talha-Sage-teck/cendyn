<?php
// created: 2023-01-10 12:14:03
$dictionary["CB2B_Hotels"]["fields"]["aos_quotes_cb2b_hotels_1"] = array (
  'name' => 'aos_quotes_cb2b_hotels_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_cb2b_hotels_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_CB2B_HOTELS_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_cb2b_hotels_1aos_quotes_ida',
);
$dictionary["CB2B_Hotels"]["fields"]["aos_quotes_cb2b_hotels_1_name"] = array (
  'name' => 'aos_quotes_cb2b_hotels_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_CB2B_HOTELS_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_cb2b_hotels_1aos_quotes_ida',
  'link' => 'aos_quotes_cb2b_hotels_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["CB2B_Hotels"]["fields"]["aos_quotes_cb2b_hotels_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_cb2b_hotels_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_cb2b_hotels_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_CB2B_HOTELS_1_FROM_CB2B_HOTELS_TITLE',
);
