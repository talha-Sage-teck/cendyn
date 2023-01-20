<?php

$dictionary['Task']['fields']['b2b_account_id'] = array(
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

$dictionary['Task']['fields']['b2b_activity_id'] = array(
    'inline_edit' => '',
    'labelValue' => 'b2b_activity_id',
    'required' => false,
    'name' => 'b2b_activity_id',
    'vname' => 'LBL_B2B_ACTIVITY_ID',
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

$dictionary['Task']['fields']['b2b_base_type'] = array(
    'inline_edit' => '1',
    'labelValue' => 'b2b_base_type',
    'required' => false,
    'name' => 'b2b_base_type',
    'vname' => 'LBL_B2B_BASE_TYPE',
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

$dictionary['Task']['fields']['b2b_contact_id'] = array(
    'inline_edit' => '',
    'labelValue' => 'b2b_contact_id',
    'required' => false,
    'name' => 'b2b_contact_id',
    'vname' => 'LBL_B2B_CONTACT_ID',
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

$dictionary['Task']['fields']['b2b_potential_id'] = array(
    'inline_edit' => '',
    'labelValue' => 'b2b_potential_id',
    'required' => false,
    'name' => 'b2b_potential_id',
    'vname' => 'LBL_B2B_POTENTIAL_ID',
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

$dictionary['Task']['fields']['remarks'] = array(
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

$dictionary['Task']['fields']['result'] = array(
    'inline_edit' => '1',
    'labelValue' => 'result',
    'required' => false,
    'name' => 'result',
    'vname' => 'LBL_RESULT',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => 'NON',
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
    'options' => 'activity_results_list',
    'studio' => 'visible',
    'dependency' => NULL,
);

$dictionary['Task']['fields']['type'] = array(
    'inline_edit' => '1',
    'labelValue' => 'Type',
    'required' => false,
    'name' => 'type',
    'vname' => 'LBL_TYPE',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => 'UNK',
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
    'options' => 'activity_type_list',
    'studio' => 'visible',
    'dependency' => NULL,
);

$dictionary["Task"]["fields"]["sales_rep_code"] = array(
    'name' => 'sales_rep_code',
    'vname' => 'LBL_SALES_REP_CODE',
    'inline_edit' => '1',
    'required' => false,
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

$dictionary['Task']['fields']['name']['importable'] = 'true';

