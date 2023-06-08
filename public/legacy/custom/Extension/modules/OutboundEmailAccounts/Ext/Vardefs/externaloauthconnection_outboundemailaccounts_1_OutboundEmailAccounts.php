<?php
// created: 2023-06-05 07:48:11
$dictionary["OutboundEmailAccounts"]["fields"]["externaloauthconnection_outboundemailaccounts_1"] = array (
  'name' => 'externaloauthconnection_outboundemailaccounts_1',
  'type' => 'link',
  'relationship' => 'externaloauthconnection_outboundemailaccounts_1',
  'source' => 'non-db',
  'module' => 'ExternalOAuthConnection',
  'bean_name' => 'ExternalOAuthConnection',
  'vname' => 'LBL_EXTERNALOAUTHCONNECTION_OUTBOUNDEMAILACCOUNTS_1_FROM_EXTERNALOAUTHCONNECTION_TITLE',
  'id_name' => 'externaloae73fnection_ida',
);
$dictionary["OutboundEmailAccounts"]["fields"]["externaloauthconnection_outboundemailaccounts_1_name"] = array (
  'name' => 'externaloauthconnection_outboundemailaccounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_EXTERNALOAUTHCONNECTION_OUTBOUNDEMAILACCOUNTS_1_FROM_EXTERNALOAUTHCONNECTION_TITLE',
  'save' => true,
  'id_name' => 'externaloae73fnection_ida',
  'link' => 'externaloauthconnection_outboundemailaccounts_1',
  'table' => 'external_oauth_connections',
  'module' => 'ExternalOAuthConnection',
  'rname' => 'name',
);
$dictionary["OutboundEmailAccounts"]["fields"]["externaloae73fnection_ida"] = array (
  'name' => 'externaloae73fnection_ida',
  'type' => 'link',
  'relationship' => 'externaloauthconnection_outboundemailaccounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_EXTERNALOAUTHCONNECTION_OUTBOUNDEMAILACCOUNTS_1_FROM_OUTBOUNDEMAILACCOUNTS_TITLE',
);
