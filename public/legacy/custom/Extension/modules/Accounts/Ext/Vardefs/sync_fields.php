<?php

$dictionary["Account"]["fields"]["ready_to_sync"] =
    array (
    'required' => false,
    'name' => 'ready_to_sync',
    'vname' => 'LBL_READY_TO_SYNC',
    'type' => 'int',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'enable_range_search' => false,
);

$dictionary["Account"]["fields"]['last_sync_date'] =
    array (
    'name' => 'last_sync_date',
    'vname' => 'LBL_LAST_SYNC_DATE',
    'type' => 'datetime',
    'comment' => 'Date last synchronized with eInsight',
    'enable_range_search' => true,
    'inline_edit' => false,
);
