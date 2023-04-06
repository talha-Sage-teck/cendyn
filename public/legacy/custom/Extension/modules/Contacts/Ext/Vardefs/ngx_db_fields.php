<?php
$dictionary["Contact"]["fields"]["donotmail"] = array(
    'required' => false,
    'name' => 'donotmail',
    'vname' => 'LBL_DONOTMAIL',
    'type' => 'bool',
    'default' => 0,
    'importable' => 'true',
    'reportable' => true,
    'len' => '1',
);

$dictionary["Contact"]["fields"]["donotphone"] = array(
    'required' => false,
    'name' => 'donotphone',
    'vname' => 'LBL_DONOTPHONE',
    'type' => 'bool',
    'default' => 0,
    'importable' => 'true',
    'reportable' => true,
    'len' => '1',
);

$dictionary["Contact"]["fields"]['donotemail'] = array (
    'name' => 'donotemail',
    'vname' => 'LBL_DONOTEMAIL',
    'source' => 'non-db',
    'type' => 'varchar',
    'massupdate' => false,
    'studio' => 'false',
);

$dictionary["Contact"]["fields"]['donotemail_source'] = array (
    'name' => 'donotemail_source',
    'vname' => 'LBL_DONOTEMAIL_SOURCE',
    'source' => 'non-db',
    'type' => 'varchar',
    'massupdate' => false,
    'studio' => 'false',
);

$dictionary["Contact"]["fields"]['donotemail_date'] = array (
    'name' => 'donotemail_date',
    'vname' => 'LBL_DONOTEMAIL_DATE',
    'source' => 'non-db',
    'type' => 'datetime',
    'massupdate' => false,
    'studio' => 'false',
);
