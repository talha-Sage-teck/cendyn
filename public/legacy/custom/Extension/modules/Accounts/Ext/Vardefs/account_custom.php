<?php
// created: 2022-07-04 23:45:06
$dictionary["Account"]["fields"]["accountbasetype"] = array (
  'inline_edit' => '1',
  'required' => true,
  'name' => 'accountbasetype',
  'vname' => 'LBL_ACCOUNTBASETYPE',
  'type' => 'enum',
  'comments' => 'Account base type',
  'help' => 'Account base type',
  'audited' => true,
  'merge_filter' => 'disabled',
  'len' => 100,
  'options' => 'account_base_list',
  'studio' => 'visible',
);

$dictionary["Account"]["fields"]["accountlevel"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Account Level',
    'required' => false,
    'name' => 'accountlevel',
    'vname' => 'LBL_ACCOUNTLEVEL',
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


$dictionary["Account"]["fields"]["accountsubtype"] = array (
    'labelValue' => 'Sub Type',
    'required' => false,
    'name' => 'accountsubtype',
    'vname' => 'LBL_ACCOUNTSUBTYPE',
    'type' => 'dynamicenum',
    'audited' => true,
    'merge_filter' => 'disabled',
    'len' => 100,
    'options' => 'account_subtype_list',
    'studio' => 'visible',
    'dbType' => 'enum',
    'parentenum' => 'accountbasetype',
);

$dictionary["Account"]["fields"]["b2baccountid"] = array (
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

$dictionary["Account"]["fields"]["b2baccountno"] = array (
    'inline_edit' => '',
    'labelValue' => 'b2baccountno',
    'required' => false,
    'name' => 'b2baccountno',
    'vname' => 'LBL_B2BACCOUNTNO',
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

$dictionary["Account"]["fields"]["b2b_commission"] = array (
    /***
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
                    'accountbasetype',
                ),
                'targetDisplayType' => 'block',
                'activeOnFields' =>  array(
                    'accountbasetype' => array('T')
                ),
            ),
        ),
    ),
);

$dictionary["Account"]["fields"]["blacklistreason"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Black List Reason',
    'required' => false,
    'name' => 'blacklistreason',
    'vname' => 'LBL_BLACKLISTREASON',
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
    'options' => 'account_blacklist_reason_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["blacklist"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Black List',
    'required' => true,
    'name' => 'blacklist',
    'vname' => 'LBL_BLACKLIST',
    'type' => 'enum',
    'massupdate' => '0',
    'default' => 'N',
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
    'options' => 'account_blacklist_info_list',
    'studio' => 'visible',
    'dependency' => false,
);

$dictionary["Account"]["fields"]["iata"] = array (
    /***
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
                    'accountbasetype',
                ),
                'targetDisplayType' => 'block',
                'activeOnFields' =>  array(
                    'accountbasetype' => array('T'),
                ),
            ),
        ),
    ),
);

$dictionary["Account"]["fields"]["industrycodes"] = array (
    'inline_edit' => '1',
    'labelValue' => 'Industry Codes',
    'required' => false,
    'name' => 'industrycodes',
    'vname' => 'LBL_INDUSTRYCODES',
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

$dictionary["Account"]["fields"]["priority"] = array (
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

$dictionary["Account"]["fields"]["salesrepcode"] = array (
    'inline_edit' => '1',
    'labelValue' => 'SRep',
    'required' => false,
    'name' => 'salesrepcode',
    'vname' => 'LBL_SALESREPCODE',
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
