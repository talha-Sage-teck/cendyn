<?php

$dictionary["Meeting"]["fields"]["b2b_account_id"] = array(
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
);


$dictionary["Meeting"]["fields"]["b2b_activity_id"] = array(
    'inline_edit' => '1',
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
);

$dictionary["Meeting"]["fields"]["b2b_contact_id"] = array(
    'inline_edit' => '1',
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
);

$dictionary["Meeting"]["fields"]["priority"] = array(
    'inline_edit' => '1',
    'labelValue' => 'priority',
    'required' => false,
    'name' => 'priority',
    'vname' => 'LBL_PRIORITY',
    'type' => 'enum',
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
    'len' => 100,
    'size' => '20',
    'options' => 'activity_priority_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Meeting"]["fields"]["remarks"] = array(
    'inline_edit' => '1',
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
    'len' => '1020',
);

$dictionary["Meeting"]["fields"]["b2b_base_type"] = array(
    'name' => 'b2b_base_type',
    'vname' => 'LBL_B2B_BASE_TYPE',
    'inline_edit' => '1',
    'required' => false,
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

$dictionary["Meeting"]["fields"]["result"] = array(
    'name' => 'result',
    'vname' => 'LBL_RESULT',
    'inline_edit' => '1',
    'required' => false,
    'type' => 'enum',
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
    'len' => 100,
    'size' => '20',
    'options' => 'activity_results_list',
    'studio' => 'visible',
);

$dictionary["Meeting"]["fields"]["b2b_potential_id"] = array(
    'name' => 'b2b_potential_id',
    'vname' => 'LBL_B2B_POTENTIAL_ID',
    'inline_edit' => '',
    'required' => false,
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

$dictionary["Meeting"]["fields"]["sales_rep_code"] = array(
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

$dictionary['Meeting']['fields']['name']['len'] = '255';