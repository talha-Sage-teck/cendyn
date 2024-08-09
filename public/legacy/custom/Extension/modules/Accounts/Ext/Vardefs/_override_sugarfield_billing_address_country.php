<?php
$dictionary['Account']['fields']['billing_address_country'] = array (
    'inline_edit' => '1',
    'required' => false,
    'name' => 'billing_address_country',
    'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'group' =>'billing_address',
    'type' => 'enum',
    'options' => 'cendyn_country_list',
    'massupdate' => '0',
    'default' => NULL,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'studio' => 'visible',
    'dependency' => false,
);

?>