<?php
//EG CONTRACTS

$dictionary["AOS_Contracts"]["fields"]["eg_effective_date"] = array (
    'name' => 'eg_effective_date',
    'vname' => 'LBL_EG_EFFECTIVE_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["eg_termination_date"] = array (
    'name' => 'eg_termination_date',
    'vname' => 'LBL_EG_TERMINATION_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["eg_signed_date"] = array (
    'name' => 'eg_signed_date',
    'vname' => 'LBL_EG_SIGNED_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["eg_reactivated_date"] = array (
    'name' => 'eg_reactivated_date',
    'vname' => 'LBL_EG_REACTIVATED_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["eg_new_signed_date"] = array (
    'name' => 'eg_new_signed_date',
    'vname' => 'LBL_EG_NEW_SIGNED_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["eg_new_date"] = array (
    'name' => 'eg_new_date',
    'vname' => 'LBL_EG_NEW_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["revision_4_date"] = array (
    'name' => 'revision_4_date',
    'vname' => 'LBL_REVISION_4_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["rate"] = array(
    'name' => 'rate',
    'vname' => 'LBL_RATE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'rate_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["AOS_Contracts"]["fields"]["category"] = array(
    'name' => 'category',
    'vname' => 'LBL_CATEGORY',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'category_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["AOS_Contracts"]["fields"]["category_option_1"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Option 1',
    'required' => false,
    'name' => 'category_option_1',
    'vname' => 'LBL_CATEGORY_OPTION_1',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["category_option_2"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Option 2',
    'required' => false,
    'name' => 'category_option_2',
    'vname' => 'LBL_CATEGORY_OPTION_2',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["category_option_3"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Option 3',
    'required' => false,
    'name' => 'category_option_3',
    'vname' => 'LBL_CATEGORY_OPTION_3',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["category_option_4"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Option 4',
    'required' => false,
    'name' => 'category_option_4',
    'vname' => 'LBL_CATEGORY_OPTION_4',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["attachment"] = array (
    'name' => 'attachment',
    'vname' => 'LBL_ATTACHMENT',
    'type' => 'varchar',
    'len' => '255',
    'reportable' => true,
    'comment' => 'File name associated with the note (attachment)',
);

//Brochure Contributions

$dictionary["AOS_Contracts"]["fields"]["brochure_contribution_start_date"] = array (
    'name' => 'brochure_contribution_start_date',
    'vname' => 'LBL_BROCHURE_CONTRIBUTION_START_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["brochure_contribution_end_date"] = array (
    'name' => 'brochure_contribution_end_date',
    'vname' => 'LBL_BROCHURE_CONTRIBUTION_END_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["brochure_contribution_date_of_issue"] = array (
    'name' => 'brochure_contribution_date_of_issue',
    'vname' => 'LBL_BROCHURE_CONTRIBUTION_DATE_OF_ISSUE',
    'type' => 'datetimecombo',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["brochure_contribution_effective_date"] = array (
    'name' => 'brochure_contribution_effective_date',
    'vname' => 'LBL_BROCHURE_CONTRIBUTION_EFFECTIVE_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["agreement_type"] = array(
    'name' => 'agreement_type',
    'vname' => 'LBL_AGREEMENT_TYPE',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => 100,
    'size' => '20',
    'options' => 'agreement_type',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["AOS_Contracts"]["fields"]["special_information"] = array (
    'inline_edit' => '1',
    'name' => 'special_information',
    'vname' => 'LBL_SPECIAL_INFORMATION',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["name_of_brochure"] = array (
    'inline_edit' => '1',
    'name' => 'name_of_brochure',
    'vname' => 'LBL_NAME_OF_BROCHURE',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["coverage"] = array (
    'inline_edit' => '1',
    'name' => 'coverage',
    'vname' => 'LBL_COVERAGE',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["revision_1"] = array (
    'inline_edit' => '1',
    'name' => 'revision_1',
    'vname' => 'LBL_REVISION_1',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["revision_2"] = array (
    'inline_edit' => '1',
    'name' => 'revision_2',
    'vname' => 'LBL_REVISION_2',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["revision_3"] = array (
    'inline_edit' => '1',
    'name' => 'revision_3',
    'vname' => 'LBL_REVISION_3',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["revision_4"] = array (
    'inline_edit' => '1',
    'name' => 'revision_4',
    'vname' => 'LBL_REVISION_4',
    'type' => 'varchar',
    'massupdate' => '0',
    'default' => '',
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

$dictionary["AOS_Contracts"]["fields"]["revision_1_date"] = array (
    'name' => 'revision_1_date',
    'vname' => 'LBL_REVISION_1_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["revision_2_date"] = array (
    'name' => 'revision_2_date',
    'vname' => 'LBL_REVISION_2_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["revision_3_date"] = array (
    'name' => 'revision_3_date',
    'vname' => 'LBL_REVISION_3_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);

$dictionary["AOS_Contracts"]["fields"]["revision_4_date"] = array (
    'name' => 'revision_4_date',
    'vname' => 'LBL_REVISION_4_DATE',
    'type' => 'datetime',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
    'inline_edit' => false,
);
