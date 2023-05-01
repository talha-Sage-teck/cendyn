<?php

$dictionary["Contact"]["fields"]["b2b_account_id"] = array(
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
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
);

$dictionary["Contact"]["fields"]["b2b_contact_id"] = array(
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
);
$dictionary["Contact"]["fields"]["b2b_action_code"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Action',
    'required' => false,
    'name' => 'b2b_action_code',
    'vname' => 'LBL_B2B_ACTION_CODE',
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
    'options' => 'b2b_actioncode_c_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
    'len' => '255',
);
$dictionary["Contact"]["fields"]["b2b_influencer"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Influence',
    'required' => false,
    'name' => 'b2b_influencer',
    'vname' => 'LBL_B2B_INFLUENCER',
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
    'options' => 'b2b_influencer_list',
    'studio' => 'visible',
    'dependency' => false,
);
$dictionary["Contact"]["fields"]["b2b_interests"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Interests',
    'required' => false,
    'name' => 'b2b_interests',
    'vname' => 'LBL_B2B_INTERESTS',
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
    'options' => 'b2b_interests_c_list',
    'studio' => 'visible',
    'isMultiSelect' => true,
    'len' => '255',
);
$dictionary["Contact"]["fields"]["b2b_is_booker"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Booker',
    'required' => false,
    'name' => 'b2b_is_booker',
    'vname' => 'LBL_B2B_IS_BOOKER',
    'type' => 'bool',
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
);
$dictionary["Contact"]["fields"]["b2b_language"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Language',
    'required' => false,
    'name' => 'b2b_language',
    'vname' => 'LBL_B2B_LANGUAGE',
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
    'options' => 'b2b_language_c_list',
    'studio' => 'visible',
    'dependency' => NULL,
);
$dictionary["Contact"]["fields"]["job_code"] = array(
    'inline_edit' => '1',
    'labelValue' => 'Job Code',
    'required' => false,
    'name' => 'job_code',
    'vname' => 'LBL_JOB_CODE',
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
    'options' => 'contact_jobcode_list',
);
$dictionary["Contact"]["fields"]["priority"] = array(
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
    'options' => 'contact_priority_list',
    'studio' => 'visible',
    'dependency' => false,
);
$dictionary["Contact"]["fields"]["sales_rep_code"] = array(
    'name' => 'sales_rep_code',
    'vname' => 'LBL_SALES_REP_CODE',
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
);

$dictionary["Contact"]["fields"]["contact_role"] = array(
    'name' => 'contact_role',
    'vname' => 'LBL_CONTACT_ROLE',
    'type' => 'varchar',
    'len' => '100',
);

$dictionary["Contact"]["fields"]["greeting"] = array(
    'name' => 'greeting',
    'vname' => 'LBL_GREETING',
    'type' => 'varchar',
    'len' => '100',
);

$dictionary["Contact"]["fields"]["greetingid"] = array(
    'name' => 'greetingid',
    'vname' => 'LBL_GREETING_ID',
    'type' => 'varchar',
    'len' => '100',
);

$dictionary["Contact"]["fields"]["last_name"]["importable"] = true;