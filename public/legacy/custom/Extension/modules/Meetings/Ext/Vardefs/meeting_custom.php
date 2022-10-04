<?php


$dictionary["Meeting"]["fields"]["b2b_account_id"] = array (
    'inline_edit' => '',
    'labelValue' => 'b2b_account_id',
    'required' => false,
    'name' => 'b2b_account_id',
    'vname' => 'LBL_B2B_ACCOUNT_ID',
    'type' => 'int',
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


$dictionary["Meeting"]["fields"]["b2b_activity_id"] = array (
    'inline_edit' => '1',
    'labelValue' => 'b2b_activity_id',
    'required' => false,
    'name' => 'b2b_activity_id',
    'vname' => 'LBL_B2B_ACTIVITY_ID',
    'type' => 'int',
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

$dictionary["Meeting"]["fields"]["b2b_contact_id"] = array (
    'inline_edit' => '1',
    'labelValue' => 'b2b_contact_id',
    'required' => false,
    'name' => 'b2b_contact_id',
    'vname' => 'LBL_B2B_CONTACT_ID',
    'type' => 'int',
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

$dictionary["Meeting"]["fields"]["b2b_reult"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Result',
    'required' => false,
    'name' => 'b2b_reult',
    'vname' => 'LBL_B2B_REULT',
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
    'options' => 'b2b_reult_c_list',
    'studio' => 'visible',
    'dependency' => NULL,
);

$dictionary["Meeting"]["fields"]["priority"] = array (
    'inline_edit' => '1',
    'labelValue' => 'priority',
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
    'options' => 'activity_priority_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Meeting"]["fields"]["remarks"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Remarks',
    'required' => false,
    'name' => 'remarks',
    'vname' => 'LBL_REMARKS',
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

//
//$dictionary["Meeting"]["fields"]["b2baccountid"] = array (
//
//            'inline_edit' => '',
//            'labelValue' => 'b2baccountid',
//            'required' => false,
//
//            'name' => 'b2baccountid',
//            'vname' => 'LBL_B2BACCOUNTID',
//            'type' => 'int',
//            'massupdate' => '0',
//            'default' => '',
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => '255',
//            'size' => '20',
//            'enable_range_search' => false,
//            'disable_num_format' => '',
//            'min' => false,
//            'max' => false,
//
//
//);
//
//
//$dictionary["Meeting"]["fields"]["b2bactivityid"] = array (
//
//            'inline_edit' => '1',
//            'labelValue' => 'b2bactivityid',
//            'required' => false,
//
//            'name' => 'b2bactivityid',
//            'vname' => 'LBL_B2BACTIVITYID',
//            'type' => 'int',
//            'massupdate' => '0',
//            'default' => '',
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => '255',
//            'size' => '20',
//            'enable_range_search' => false,
//            'disable_num_format' => '',
//            'min' => false,
//            'max' => false,
//
//);
//
//$dictionary["Meeting"]["fields"]["b2bcontactid"] = array (
//
//            'inline_edit' => '1',
//            'labelValue' => 'b2bcontactid',
//            'required' => false,
//
//            'name' => 'b2bcontactid',
//            'vname' => 'LBL_B2BCONTACTID',
//            'type' => 'int',
//            'massupdate' => '0',
//            'default' => '',
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => '255',
//            'size' => '20',
//            'enable_range_search' => false,
//            'disable_num_format' => '',
//            'min' => false,
//            'max' => false,
//
//
//);
//
//$dictionary["Meeting"]["fields"]["b2b_reult"] = array (
//
//            'inline_edit' => '1',
//            'labelValue' => 'Result',
//            'required' => false,
//            'name' => 'b2b_reult',
//            'vname' => 'LBL_B2B_REULT',
//            'type' => 'enum',
//            'massupdate' => '0',
//            'default' => NULL,
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => 100,
//            'size' => '20',
//            'options' => 'b2b_reult_c_list',
//            'studio' => 'visible',
//            'dependency' => NULL,
//
//
//);
//
//$dictionary["Meeting"]["fields"]["priority"] = array (
//
//            'inline_edit' => '1',
//            'labelValue' => 'priority',
//            'required' => false,
//
//            'name' => 'priority',
//            'vname' => 'LBL_PRIORITY',
//            'type' => 'enum',
//            'massupdate' => '0',
//            'default' => NULL,
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => 100,
//            'size' => '20',
//            'options' => 'activity_priority_list',
//            'studio' => 'visible',
//            'dependency' => false,
//
//
//);
//
//$dictionary["Meeting"]["fields"]["remarks"] = array (
//
//            'inline_edit' => '1',
//            'labelValue' => 'Remarks',
//            'required' => false,
//
//            'name' => 'remarks',
//            'vname' => 'LBL_REMARKS',
//            'type' => 'varchar',
//            'massupdate' => '0',
//            'default' => '',
//            'no_default' => false,
//            'comments' => '',
//            'help' => '',
//            'importable' => 'true',
//            'duplicate_merge' => 'disabled',
//            'duplicate_merge_dom_value' => '0',
//            'audited' => false,
//            'reportable' => true,
//            'unified_search' => false,
//            'merge_filter' => 'disabled',
//            'len' => '255',
//            'size' => '20',
//
//
//);
