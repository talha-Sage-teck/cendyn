<?php

$dictionary['FP_Event_Locations']['fields']['hotel_name'] =
array (
    'name' => 'hotel_name',
    'rname' => 'name',
    'id_name' => 'hotel_id',
    'vname' => 'LBL_HOTEL_NAME',
    'type' => 'relate',
    'table' => 'cb2b_hotels',
    'join_name' => 'cb2b_hotels',
    'isnull' => 'true',
    'module' => 'CB2B_Hotels',
    'len' => 100,
    'source' => 'non-db',
    'unified_search' => true,
    'comment' => 'The name of the hotel represented by the hotel_id field',
    'required' => false,
    'importable' => 'required',
);

$dictionary['FP_Event_Locations']['fields']['hotel_id'] =
array (
    'name' => 'hotel_id',
    'type' => 'relate',
    'dbType' => 'id',
    'rname' => 'id',
    'module' => 'CB2B_Hotels',
    'id_name' => 'hotel_id',
    'reportable' => false,
    'vname' => 'LBL_HOTEL_ID',
    'audited' => true,
    'massupdate' => false,
    'comment' => 'The hotel to which the record is associated',
);
