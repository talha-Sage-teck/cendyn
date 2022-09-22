<?php

$dictionary["Opportunity"]["fields"]["b2baccountid"] = array (

            'inline_edit' => '1',
            'labelValue' => 'b2baccountid',
            'required' => false,
    'name' => 'b2baccountid',

            'vname' => 'LBL_B2BACCOUNTID',
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

$dictionary["Opportunity"]["fields"]["b2bbanquet_fbpersons"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Banquet FB Persons',
            'required' => false,

            'name' => 'b2bbanquet_fbpersons',
            'vname' => 'LBL_B2BBANQUET_FBPERSONS',
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

$dictionary["Opportunity"]["fields"]["b2bbanquet_fbrev"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Banquet F&B Revenue',
            'required' => false,

            'name' => 'b2bbanquet_fbrev',
            'vname' => 'LBL_B2BBANQUET_FBREV',
            'type' => 'currency',
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
            'len' => '26',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => 6,

);
$dictionary["Opportunity"]["fields"]["b2bbanquet_otherpersons"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Banquet Other Persons',
            'required' => false,

            'name' => 'b2bbanquet_otherpersons',
            'vname' => 'LBL_B2BBANQUET_OTHERPERSONS',
            'type' => 'int',
            'massupdate' => '0',
            'default' => '0',
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
            'disable_num_format' => NULL,
            'min' => 0,
            'max' => false,
            'validation' =>
                array (
                    'type' => 'range',
                    'min' => 0,
                    'max' => false,
                ),


        );
$dictionary["Opportunity"]["fields"]["b2bbanquet_otherrev"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Banquet Other Revenue',
            'required' => false,

            'name' => 'b2bbanquet_otherrev',
            'vname' => 'LBL_B2BBANQUET_OTHERREV',
            'type' => 'currency',
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
            'len' => '26',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => 6,

);
$dictionary["Opportunity"]["fields"]["b2bcontactid"] = array (

            'inline_edit' => '1',
            'labelValue' => 'b2bcontactid',
            'required' => false,

            'name' => 'b2bcontactid',
            'vname' => 'LBL_B2BCONTACTID',
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
$dictionary["Opportunity"]["fields"]["b2bcurrency"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Currency',
            'required' => false,

            'name' => 'b2bcurrency',
            'vname' => 'LBL_B2BCURRENCY',
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
            'options' => 'b2bcurrency_list',
            'studio' => 'visible',
            'dependency' => false,

);
$dictionary["Opportunity"]["fields"]["b2bemployeeid"] = array (

            'inline_edit' => '1',
            'labelValue' => 'b2bemployeeid',
            'required' => false,

            'name' => 'b2bemployeeid',
            'vname' => 'LBL_B2BEMPLOYEEID',
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

$dictionary["Opportunity"]["fields"]["b2bnights"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Nights',
            'required' => false,

            'name' => 'b2bnights',
            'vname' => 'LBL_B2BNIGHTS',
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
$dictionary["Opportunity"]["fields"]["b2bpersons"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Persons',
            'required' => false,

            'name' => 'b2bpersons',
            'vname' => 'LBL_B2BPERSONS',
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
$dictionary["Opportunity"]["fields"]["b2bplandate"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Plan Date',
            'required' => false,

            'name' => 'b2bplandate_c',
            'vname' => 'LBL_B2BPLANDATE',
            'type' => 'date',
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
            'size' => '20',
            'enable_range_search' => false,

);


$dictionary["Opportunity"]["fields"]["b2bpotentialid"] = array (

            'inline_edit' => '1',
            'labelValue' => 'b2bpotentialid',
            'required' => false,

            'name' => 'b2bpotentialid',
            'vname' => 'LBL_B2BPOTENTIALID',
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
$dictionary["Opportunity"]["fields"]["b2broomrev"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Room Revenue',
            'required' => false,

            'name' => 'b2broomrev',
            'vname' => 'LBL_B2BROOMREV',
            'type' => 'currency',
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
            'len' => '26',
            'size' => '20',
            'enable_range_search' => false,
            'precision' => 6,

);
$dictionary["Opportunity"]["fields"]["b2brooms"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Rooms',
            'required' => false,

            'name' => 'b2brooms',
            'vname' => 'LBL_B2BROOMS',
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


$dictionary["Opportunity"]["fields"]["b2bstatus"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Status',
            'required' => false,

            'name' => 'b2bstatus',
            'vname' => 'LBL_B2BSTATUS',
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
            'options' => 'b2b_Potential_Status_list',
            'studio' => 'visible',
            'dependency' => false,

);
$dictionary["Opportunity"]["fields"]["b2btype"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Type',
            'required' => false,

            'name' => 'b2btype',
            'vname' => 'LBL_B2BTYPE',
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
            'options' => 'b2b_potential_type_list',
            'studio' => 'visible',
            'dependency' => false,

);
$dictionary["Opportunity"]["fields"]["b2b_opportunitytype"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Opportunity',
            'required' => false,

            'name' => 'b2b_opportunitytype',
            'vname' => 'LBL_B2B_OPPORTUNITYTYPE',
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
            'options' => 'b2b_opportunitytype_c_list',
            'studio' => 'visible',
            'dependency' => NULL,

);
