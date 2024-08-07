<?php
$dictionary['AOS_Contracts']['fields']['cb2b_hotels_id'] = array (
    'inline_edit' => 1,
    'required' => false,
    'name' => 'cb2b_hotels_id',
    'vname' => 'LBL_ASSOCIATE_CB2B_HOTELS_ID',
    'type' => 'varchar',
    'massupdate' => '0',
    'source' => 'non-db',
    'default' => NULL,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => '1000',
    'size' => '20',
    'id' => 'AOS_Contractscb2b_hotels_id_c',
);
$dictionary['AOS_Contracts']['fields']['associate_hotels_contracts'] = array (
    'inline_edit' => '0',
    'labelValue' => 'Associate Hotels',
    'required' => false,
    'source' => 'non-db',
    'name' => 'associate_hotels_contracts',
    'vname' => 'LBL_ASSOCIATE_HOTELS',
    'type' => 'multirelate',
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
    'len' => '255',
    'size' => '20',
    'id_name' => 'cb2b_hotels_id',
    'ext2' => 'CB2B_Hotels',
    'module' => 'CB2B_Hotels',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
    'relation' => 'aos_contracts_cb2b_hotels_2',
    'id' => 'AOS_Contractsassociate_hotels_contracts',
    'report_query'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.name,'^')
                    ORDER 
                    BY aos_contracts_cb2b_hotels_2_c.date_modified asc
                    SEPARATOR ',')
        FROM
            aos_contracts_cb2b_hotels_2_c
                JOIN
            cb2b_hotels aaa ON aaa.id = aos_contracts_cb2b_hotels_2_c.aos_contracts_cb2b_hotels_2cb2b_hotels_idb and aaa.deleted=0
        WHERE
            aos_contracts_cb2b_hotels_2_c.deleted = 0
                AND aos_contracts_cb2b_hotels_2_c.aos_contracts_cb2b_hotels_2aos_contracts_ida = {{table_name}}.id
        GROUP BY aos_contracts_cb2b_hotels_2aos_contracts_ida)",
    'report_query_where'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.id,'^')
                    ORDER 
                    BY aos_contracts_cb2b_hotels_2_c.date_modified
                    SEPARATOR ',')
        FROM
            aos_contracts_cb2b_hotels_2_c
                JOIN
            cb2b_hotels aaa ON aaa.id = aos_contracts_cb2b_hotels_2_c.aos_contracts_cb2b_hotels_2cb2b_hotels_idb and aaa.deleted=0
        WHERE
            aos_contracts_cb2b_hotels_2_c.deleted = 0
                AND aos_contracts_cb2b_hotels_2_c.aos_contracts_cb2b_hotels_2aos_contracts_ida = {{table_name}}.id
        GROUP BY aos_contracts_cb2b_hotels_2aos_contracts_ida)",

);
