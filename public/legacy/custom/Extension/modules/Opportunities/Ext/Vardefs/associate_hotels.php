<?php
$dictionary['Opportunity']['fields']['cb2b_hotels_id'] = array (
    'name' => 'cb2b_hotels_id',
    'vname' => 'LBL_ASSOCIATE_CB2B_HOTELS_ID',
    'type' => 'varchar',
    'source' => 'non-db',
    'default' => NULL,
    'no_default' => false,
    'audited' => false,
    'len' => '1000',
    'size' => '20',
);
$dictionary['Opportunity']['fields']['associate_hotels_opportunity'] = array (
    'inline_edit' => '0',
    'labelValue' => 'Associate Hotels',
    'required' => false,
    'source' => 'non-db',
    'name' => 'associate_hotels_opportunity',
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
    'relation' => 'opportunities_cb2b_hotels_1',
    'id' => 'Opportunityassociate_hotels_opportunity',
    'report_query'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.name,'^')
                    ORDER 
                    BY opportunities_cb2b_hotels_1_c.date_modified asc
                    SEPARATOR ',')
        FROM
            opportunities_cb2b_hotels_1_c
                JOIN
            cb2b_hotels aaa ON aaa.id = opportunities_cb2b_hotels_1_c.opportunities_cb2b_hotels_1cb2b_hotels_idb
        WHERE
            opportunities_cb2b_hotels_1_c.deleted = 0
                AND opportunities_cb2b_hotels_1_c.opportunities_cb2b_hotels_1opportunities_ida = {{table_name}}.id
        GROUP BY opportunities_cb2b_hotels_1opportunities_ida)",
    'report_query_where'=>"(SELECT 
                    GROUP_CONCAT(concat('^',aaa.id,'^')
                    ORDER 
                    BY opportunities_cb2b_hotels_1_c.date_modified
                    SEPARATOR ',')
        FROM
            opportunities_cb2b_hotels_1_c
                JOIN
            cb2b_hotels aaa ON aaa.id = opportunities_cb2b_hotels_1_c.opportunities_cb2b_hotels_1cb2b_hotels_idb
        WHERE
            opportunities_cb2b_hotels_1_c.deleted = 0
                AND opportunities_cb2b_hotels_1_c.opportunities_cb2b_hotels_1opportunities_ida = {{table_name}}.id
        GROUP BY opportunities_cb2b_hotels_1opportunities_ida)",
);
