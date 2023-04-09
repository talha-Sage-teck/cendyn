<?php
$dictionary["Opportunity"]["fields"]["lost_reason"] = array(
    'inline_edit' => '1',
    'required' => false,
    'name' => 'lost_reason',
    'vname' => 'LBL_LOST_REASON',
    'type' => 'dynamicenum',
    'dbType' => 'varchar',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 50,
    'size' => '20',
    'options' => 'lost_reason_list',
    'studio' => 'visible',
    'display' => 'none',
    'parentenum' => 'sales_stage',
    'logic' => [
        'display' => [
            'key' => 'displayType',
            'modes' => ['detail', 'edit', 'create'],
            'params' => [
                'fieldDependencies' => [
                    'sales_stage',
                ],
                'targetDisplayType' => 'block',
                'activeOnFields' =>  [
                    'sales_stage' => [
                        'Closed Lost',
                        'Closed_Lost_E'
                    ]
                ]
            ]
        ],
        'required' => [
            'key' => 'required',
            'modes' => ['edit', 'create'],
            'params' => [
                'fieldDependencies' => [
                    'sales_stage',
                ],
                'activeOnFields' =>  [
                    'sales_stage' => ['Closed Lost', 'Closed_Lost_E']
                ]
            ]
        ]
    ],
);
