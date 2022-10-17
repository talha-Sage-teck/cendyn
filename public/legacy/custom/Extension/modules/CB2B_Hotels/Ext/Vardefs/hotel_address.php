<?php

$dictionary['CB2B_Hotels']['fields']['hotel_address_street'] = array(
    'inline_edit' => '1',
    'required' => false,
    'name' => 'hotel_address_street',
    'vname' => 'LBL_HOTEL_ADDRESS_STREET',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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
    'len' => '255',
    'size' => '20',
    'id' => 'CB2B_Hotelshotel_address_street',
    'group' => 'hotel_address',
);

$dictionary['CB2B_Hotels']['fields']['hotel_address_city'] = array(
    'inline_edit' => 1,
    'required' => false,
    'name' => 'hotel_address_city',
    'vname' => 'LBL_HOTEL_ADDRESS_CITY',
    'type' => 'varchar',
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
    'len' => '100',
    'size' => '20',
    'id' => 'CB2B_Hotelshotel_address_city',
    'group' => 'hotel_address',
);

$dictionary['CB2B_Hotels']['fields']['hotel_address_country'] = array(
    'inline_edit' => 1,
    'required' => false,
    'name' => 'hotel_address_country',
    'vname' => 'LBL_HOTEL_ADDRESS_COUNTRY',
    'type' => 'varchar',
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
    'len' => '100',
    'size' => '20',
    'id' => 'CB2B_Hotelshotel_address_country',
    'group' => 'hotel_address',
);

$dictionary['CB2B_Hotels']['fields']['hotel_address_postalcode'] = array(
    'inline_edit' => 1,
    'required' => false,
    'name' => 'hotel_address_postalcode',
    'vname' => 'LBL_HOTEL_ADDRESS_POSTALCODE',
    'type' => 'varchar',
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
    'len' => '20',
    'size' => '20',
    'id' => 'CB2B_Hotelshotel_address_postalcode',
    'group' => 'hotel_address',
);

$dictionary['CB2B_Hotels']['fields']['hotel_address_state'] = array(
    'inline_edit' => 1,
    'required' => false,
    'name' => 'hotel_address_state',
    'vname' => 'LBL_HOTEL_ADDRESS_STATE',
    'type' => 'varchar',
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
    'len' => '100',
    'size' => '20',
    'id' => 'CB2B_Hotelshotel_address_state',
    'group' => 'hotel_address',
);

$dictionary['CB2B_Hotels']['fields']['is_update'] = array(
    'name' => 'is_update',
    'vname' => 'LBL_IS_UPDATE',
    'type' => 'bool',
    'default' => '0',
    'reportable' => false,
    'comment' => 'is_update = 0 in case of Create & is_update = 1 in case of Update',
);
