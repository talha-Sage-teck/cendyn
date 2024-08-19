<?php
$dictionary['FP_Event_Locations']['fields']['address_country'] = array (
        'inline_edit' => '1',
        'required' => false,
        'name' => 'address_country',
        'vname' => 'LBL_ADDRESS_COUNTRY',
        'group' =>'billing_address',
        'type' => 'enum',
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
        'options' => 'cendyn_country_list',
        'studio' => 'visible',
        'dependency' => false,
);

 ?>