<?php
$dictionary["Opportunity"]["fields"]["lost_reason"] = array(
    'inline_edit' => '1',
    'required' => false,
    'name' => 'lost_reason',
    'vname' => 'LBL_LOST_REASON',
    'type' => 'enum',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'lost_reason_list',
    'studio' => 'visible',
    'logic' => [
        'display' => [
            'key' => 'displayType',
            'modes' => ['detail', 'edit', 'create'],
            'params' => [
                'fieldDependencies' => [
                    'sales_stage',
                ],
                'targetDisplayType' => 'none',
                'activeOnFields' =>  [
                    'sales_stage' => [
                        null,
                        '',
                        'Closed Won',
                        'Negotiation/Review',
                        'Proposal/Price Quote',
                        'Perception Analysis',
                        'Id. Decision Makers',
                        'Value Proposition',
                        'Needs Analysis',
                        'Qualification',
                        'Prospecting'
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
                    'sales_stage' => ['Closed Lost']
                ]
            ]
        ]
    ],
);
