<?php

// created: 2022-07-04 23:45:06
$dictionary["Account"]["fields"]["account_base_type"] = array(
    'inline_edit' => '1',
    'required' => true,
    'name' => 'account_base_type',
    'vname' => 'LBL_ACCOUNT_BASE_TYPE',
    'type' => 'enum',
    'comments' => 'Account Base type',
    'help' => 'Account Base Types',
    'audited' => true,
    'merge_filter' => 'disabled',
    'len' => 100,
    'options' => 'account_base_list',
    'studio' => 'visible',
);

$dictionary["Account"]["fields"]["account_level"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Account Level',
    'required' => false,
    'name' => 'account_level',
    'vname' => 'LBL_ACCOUNT_LEVEL',
    'type' => 'enum',
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
    'len' => 100,
    'size' => '20',
    'options' => 'account_level_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["b2b_account_id"] = array(
    'inline_edit' => '',
    'labelValue' => 'b2b_account_id',
    'required' => false,
    'name' => 'b2b_account_id',
    'vname' => 'LBL_B2B_ACCOUNT_ID',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
);

$dictionary["Account"]["fields"]["b2b_account_no"] = array(
    'inline_edit' => '',
    'labelValue' => 'b2b_account_no',
    'required' => false,
    'name' => 'b2b_account_no',
    'vname' => 'LBL_B2B_ACCOUNT_NO',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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
);

$dictionary["Account"]["fields"]["b2b_commission"] = array(
    /*     * *
     *  Generates Commission field dependent on selection of Travel Agent account base type.
     * @Objectives
     * 1. Show Commission fields in type(Travel Agent).
     * 2. Hide from other types
     * @Input
     * none
     * @Return
     * No value is returned
     */
    'inline_edit' => '1',
    'labelValue' => 'Commission',
    'required' => false,
    'name' => 'b2b_commission',
    'vname' => 'LBL_B2B_COMMISSION',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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
    'len' => '2',
    'size' => '20',
    'display' => 'none',
    'logic' => array(
        'display' => array(
            'key' => 'displayType',
            'modes' => array('detail', 'edit', 'create'),
            'params' => array(
                'fieldDependencies' => array(
                    'account_base_type',
                ),
                'targetDisplayType' => 'block',
                'activeOnFields' => array(
                    'account_base_type' => array('A')
                ),
            ),
        ),
    ),
);

$dictionary["Account"]["fields"]["black_list_reason"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Black List Reason',
    'required' => false,
    'name' => 'black_list_reason',
    'vname' => 'LBL_BLACK_LIST_REASON',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => NULL,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'account_black_list_reason_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["black_list"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Black List',
    'required' => true,
    'name' => 'black_list',
    'vname' => 'LBL_BLACK_LIST',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => 'N',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => true,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'len' => 100,
    'size' => '20',
    'options' => 'account_blacklist_info_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["iata"] = array(
    /*     * *
     *  Generates IATA fields dependent on selection of Travel Agent account base type.
     * @Objectives
     * 1. Show IATA fields in type(Travel Agent).
     * 2. Hide from other types
     * @Input
     * none
     * @Return
     * No value is returned
     */
    'inline_edit' => '1',
    'labelValue' => 'IATA',
    'required' => false,
    'name' => 'iata',
    'vname' => 'LBL_IATA',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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
    'display' => 'none',
    'logic' => array(
        'display' => array(
            'key' => 'displayType',
            'modes' => array('detail', 'edit', 'create'),
            'params' => array(
                'fieldDependencies' => array(
                    'account_base_type',
                ),
                'targetDisplayType' => 'block',
                'activeOnFields' => array(
                    'account_base_type' => array('A'),
                ),
            ),
        ),
    ),
);

$dictionary["Account"]["fields"]["industry_codes"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Industry Codes',
    'required' => false,
    'name' => 'industry_codes',
    'vname' => 'LBL_INDUSTRY_CODES',
    'type' => 'multienum',
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
    'size' => '20',
    'options' => 'account_industry_codes_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
);

$dictionary["Account"]["fields"]["priority"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Priority',
    'required' => false,
    'name' => 'priority',
    'vname' => 'LBL_PRIORITY',
    'type' => 'enum',
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
    'len' => 100,
    'size' => '20',
    'options' => 'account_priority_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["sales_rep_code"] = array(
    'inline_edit' => '1',
    'labelValue' => 'SRep',
    'required' => false,
    'name' => 'sales_rep_code',
    'vname' => 'LBL_SALES_REP_CODE',
    'type' => 'varchar',
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
);

//$dictionary['Account']['fields']['is_update_dup'] = array(
//    'name' => 'is_update_dup',
//    'vname' => 'LBL_IS_UPDATE_DUP',
//    'type' => 'bool',
//    'default' => '0',
//    'reportable' => false,
//    'comment' => 'is_update_dup = 0 in case of Create & is_update_dup = 1 in case of Update & is_update_dup = -1 in case processed by Auto Linking Engine (Profile and Account Auto Linking)',
//);

$dictionary["Account"]["fields"]["status"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Status',
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => 'Active',
    'no_default' => false,
    'audited' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'account_status_list',
);
