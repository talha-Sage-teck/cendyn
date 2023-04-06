<?php
$dictionary["EmailAddress"]["fields"]["donotemail"] = array(
    'required' => false,
    'name' => 'donotemail',
    'vname' => 'LBL_DONOTEMAIL',
    'type' => 'bool',
    'default' => 0,
    'importable' => 'true',
    'reportable' => true,
    'len' => '1',
);

$dictionary["EmailAddress"]["fields"]["donotemail_date"] = array(
    'required' => false,
    'name' => 'donotemail_date',
    'vname' => 'LBL_DONOTEMAIL_DATE',
    'type' => 'datetime',
    'importable' => 'true',
    'reportable' => true,
    'enable_range_search' => true,
    'options' => 'date_range_search_dom'
);

$dictionary["EmailAddress"]["fields"]["donotemail_source"] = array(
    'required' => false,
    'name' => 'donotemail_source',
    'vname' => 'LBL_DONOTEMAIL_SOURCE',
    'type' => 'varchar',
    'importable' => 'true',
    'reportable' => true,
    'len' => '3',
);