<?php

$dictionary["FP_events"]["fields"]["b2baccountid"] = array (

            'inline_edit' => '',
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


$dictionary["FP_events"]["fields"]["b2bactivityid"] = array (
            'inline_edit' => '',
            'labelValue' => 'b2bactivityid',
            'required' => false,

            'name' => 'b2bactivityid',
            'vname' => 'LBL_B2BACTIVITYID',
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

$dictionary["FP_events"]["fields"]["b2bcontactid"] = array (

            'inline_edit' => '',
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


$dictionary["FP_events"]["fields"]["priority"] = array (

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
            'options' => 'activity_priority_list',
            'studio' => 'visible',
            'dependency' => false,


);


$dictionary["FP_events"]["fields"]["results"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Results',
            'required' => true,

            'name' => 'results',
            'vname' => 'LBL_RESULTS',
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
            'options' => 'activity_results_list',
            'studio' => 'visible',
            'dependency' => false,


);


$dictionary["FP_events"]["fields"]["type"] = array (

            'inline_edit' => '1',
            'labelValue' => 'Type',
            'required' => true,

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
            'options' => 'event_type_list',
            'studio' => 'visible',
            'dependency' => false,


);


