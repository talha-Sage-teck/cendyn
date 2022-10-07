<?php

$module_name = 'CB2B_PMSProfiles';
$searchdefs [$module_name] = array(
    'layout' =>
    array(
        'basic_search' =>
        array(
            'name' =>
            array(
                'name' => 'name',
                'default' => true,
                'width' => '10%',
            ),
            'type' =>
            array(
                'type' => 'enum',
                'studio' => 'visible',
                'label' => 'LBL_TYPE',
                'width' => '10%',
                'default' => true,
                'name' => 'type',
            ),
        ),
        'advanced_search' =>
        array(
            'name' =>
            array(
                'name' => 'name',
                'default' => true,
                'width' => '10%',
            ),
            'assigned_user_id' =>
            array(
                'name' => 'assigned_user_id',
                'label' => 'LBL_ASSIGNED_TO',
                'type' => 'enum',
                'function' =>
                array(
                    'name' => 'get_user_array',
                    'params' =>
                    array(
                        0 => false,
                    ),
                ),
                'default' => true,
                'width' => '10%',
            ),
            'is_assigned_account' =>
            array(
                'type' => 'bool',
                'label' => 'LBL_IS_ASSIGNED_ACCOUNT',
                'width' => '10%',
                'default' => 0,
                'name' => 'is_assigned_account',
            ),
            'accounts_cb2b_pmsprofiles_1_name' =>
            array(
                'type' => 'relate',
                'link' => true,
                'label' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
                'id' => 'ACCOUNTS_CB2B_PMSPROFILES_1ACCOUNTS_IDA',
                'width' => '10%',
                'default' => true,
                'name' => 'accounts_cb2b_pmsprofiles_1_name',
            ),
            'hotel_short_name' =>
            array(
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_HOTEL_SHORT_NAME',
                'width' => '10%',
                'name' => 'hotel_short_name',
            ),
        ),
    ),
    'templateMeta' =>
    array(
        'maxColumns' => '3',
        'maxColumnsBasic' => '4',
        'widths' =>
        array(
            'label' => '10',
            'field' => '30',
        ),
    ),
);
;
?>
