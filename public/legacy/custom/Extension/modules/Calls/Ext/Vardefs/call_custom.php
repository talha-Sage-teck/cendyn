<?php

$dictionary["Call"]["fields"]["b2b_account_id"] = array(
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

$dictionary["Call"]["fields"]["b2b_activity_id"] = array(
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
);

$dictionary["Call"]["fields"]["b2b_contact_id"] = array(
    'inline_edit' => '',
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

$dictionary["Call"]["fields"]["priority"] = array(
    'inline_edit' => '1',
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

$dictionary["Call"]["fields"]["result"] = array(
    'inline_edit' => '1',
    'required' => false,
    'name' => 'result',
    'vname' => 'LBL_RESULT',
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
    'dependency' => false,
);

$dictionary["Call"]["fields"]["b2b_potential_id"] = array(
    'inline_edit' => '',
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
);


$dictionary["Call"]["fields"]["b2b_base_type"] = array(
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

$dictionary["Call"]["fields"]["remarks"] = array(
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

$dictionary["Call"]["fields"]["type"] = array(
    'inline_edit' => '1',
    'required' => false,
    'name' => 'type',
    'vname' => 'LBL_TYPE',
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
    'options' => 'activity_type_list',
    'studio' => 'visible',
    'dependency' => NULL,
);

$dictionary["Call"]["fields"]["sales_rep_code"] = array(
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

$dictionary['Call']['fields']['name']['len'] = '255';

$dictionary["Call"]["fields"]["status"] = array(
    'name' => 'status',
    'vname' => 'LBL_STATUS',
    'type' => 'enum',
    'len' => 100,
    'options' => 'activity_status_list',
    'comment' => 'The status of the call (Held, Not Held, etc.)',
    'required' => true,
    'importable' => 'required',
    'default' => '',
    'studio' =>
    array(
        'detailview' => false,
    ),
    'inline_edit' => true,
    'comments' => 'The status of the call (Held, Not Held, etc.)',
    'merge_filter' => 'disabled',
);
