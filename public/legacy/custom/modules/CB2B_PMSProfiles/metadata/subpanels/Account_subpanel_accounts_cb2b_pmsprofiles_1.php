<?php

// created: 2022-11-08 17:16:52
$subpanel_layout['list_fields'] = array(
    'name' =>
    array(
        'vname' => 'LBL_NAME',
        'widget_class' => 'SubPanelDetailViewLink',
        'width' => '45%',
        'default' => true,
    ),
    'accounts_cb2b_pmsprofiles_1_name' =>
    array(
        'type' => 'relate',
        'link' => true,
        'vname' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_CB2B_PMSPROFILES_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'widget_class' => 'SubPanelDetailViewLink',
        'target_module' => 'Accounts',
        'target_record_key' => 'accounts_cb2b_pmsprofiles_1accounts_ida',
    ),
    'first_related_hotel_short_name' =>
    array(
        'type' => 'varchar',
        'vname' => 'LBL_FIRST_RELATED_HOTEL_SHORT_NAME',
        'width' => '10%',
        'default' => true,
    ),
    'type' =>
    array(
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'vname' => 'LBL_TYPE',
        'width' => '10%',
    ),
    'pms_address_street' =>
    array(
        'type' => 'varchar',
        'default' => true,
        'vname' => 'LBL_PMS_ADDRESS_STREET',
        'width' => '10%',
    ),
    'pms_address_city' =>
    array(
        'type' => 'varchar',
        'default' => true,
        'vname' => 'LBL_PMS_ADDRESS_CITY',
        'width' => '10%',
    ),
    'phone' =>
    array(
        'type' => 'phone',
        'vname' => 'LBL_PHONE',
        'width' => '10%',
        'default' => true,
    ),
    'edit_button' =>
    array(
        'vname' => 'LBL_EDIT_BUTTON',
        'widget_class' => 'SubPanelEditButton',
        'module' => 'CB2B_PMSProfiles',
        'width' => '4%',
        'default' => true,
    ),
    'remove_button' =>
    array(
        'vname' => 'LBL_REMOVE',
        'widget_class' => 'SubPanelRemoveButton',
        'module' => 'CB2B_PMSProfiles',
        'width' => '5%',
        'default' => true,
    ),
);
