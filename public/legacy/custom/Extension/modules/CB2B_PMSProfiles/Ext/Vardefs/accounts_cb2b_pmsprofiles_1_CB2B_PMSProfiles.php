<?php
// created: 2022-07-04 23:45:06
$dictionary["CB2B_PMSProfiles"]["fields"]["accounts_cb2b_pmsprofiles_1"] = array (
  'name' => 'accounts_cb2b_pmsprofiles_1',
  'type' => 'link',
  'relationship' => 'accounts_cb2b_pmsprofiles_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
);
$dictionary["CB2B_PMSProfiles"]["fields"]["accounts_cb2b_pmsprofiles_1_name"] = array (
  'name' => 'accounts_cb2b_pmsprofiles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
  'link' => 'accounts_cb2b_pmsprofiles_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["CB2B_PMSProfiles"]["fields"]["accounts_cb2b_pmsprofiles_1accounts_ida"] = array (
  'name' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_cb2b_pmsprofiles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_CB2B_PMSPROFILES_TITLE',
);
