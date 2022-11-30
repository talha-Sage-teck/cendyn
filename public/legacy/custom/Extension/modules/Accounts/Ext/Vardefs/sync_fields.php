<?php

$dictionary["Account"]["fields"]["ready_to_sync"] = array(
    'required' => false,
    'name' => 'ready_to_sync',
    'vname' => 'LBL_READY_TO_SYNC',
    'type' => 'int',
    'default' => '0',
    'audited' => false,
);

$dictionary["Account"]["fields"]['last_sync_date'] = array(
    'name' => 'last_sync_date',
    'vname' => 'LBL_LAST_SYNC_DATE',
    'type' => 'datetime',
    'comment' => 'Date last synchronized with eInsight',
    'enable_range_search' => true,
    'inline_edit' => false,
);
