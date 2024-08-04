<?php
$dictionary['AOS_Quotes']['fields']['cb2b_hotels_id'] = array (
    'inline_edit' => 1,
    'required' => false,
    'name' => 'cb2b_hotels_id',
    'vname' => 'LBL_ASSOCIATE_CB2B_HOTELS_ID',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => NULL,
    'source' => 'non-db',
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
    'id' => 'AOS_Quotescb2b_hotels_id_c',
);
$dictionary['AOS_Quotes']['fields']['associate_hotels_quotes'] = array (
    'inline_edit' => '0',
    'labelValue' => 'Associate Hotels',
    'required' => false,
    'source' => 'non-db',
    'name' => 'associate_hotels_quotes',
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
    'relation' => 'aos_quotes_cb2b_hotels_1',
    'id' => 'AOS_Quotesassociate_hotels_quotes',
    'report_query'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.name,'^')
                    ORDER 
                    BY aos_quotes_cb2b_hotels_1_c.date_modified
                    SEPARATOR ',')
        FROM
            aos_quotes_cb2b_hotels_1_c
                JOIN
            cb2b_hotels aaa ON aaa.id = aos_quotes_cb2b_hotels_1_c.aos_quotes_cb2b_hotels_1cb2b_hotels_idb and aaa.deleted=0
        WHERE
            aos_quotes_cb2b_hotels_1_c.deleted = 0
                AND aos_quotes_cb2b_hotels_1_c.aos_quotes_cb2b_hotels_1aos_quotes_ida = {{table_name}}.id
        GROUP BY aos_quotes_cb2b_hotels_1aos_quotes_ida)",
    'report_query_where'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.id,'^')
                    ORDER 
                    BY aos_quotes_cb2b_hotels_1_c.date_modified
                    SEPARATOR ',')
        FROM
            aos_quotes_cb2b_hotels_1_c
                JOIN
            cb2b_hotels aaa ON aaa.id = aos_quotes_cb2b_hotels_1_c.aos_quotes_cb2b_hotels_1cb2b_hotels_idb and aaa.deleted=0
        WHERE
            aos_quotes_cb2b_hotels_1_c.deleted = 0
                AND aos_quotes_cb2b_hotels_1_c.aos_quotes_cb2b_hotels_1aos_quotes_ida = {{table_name}}.id
        GROUP BY aos_quotes_cb2b_hotels_1aos_quotes_ida)"
);
