<?php

$popupMeta = array(
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array(
        'name' => 'accounts.name',
        'billing_address_city' => 'accounts.billing_address_city',
        'account_type' => 'accounts.account_type',
        'industry' => 'accounts.industry',
        'billing_address_state' => 'accounts.billing_address_state',
        'billing_address_country' => 'accounts.billing_address_country',
        'email' => 'accounts.email',
        'assigned_user_id' => 'accounts.assigned_user_id',
    ),
    'searchInputs' => array(
        0 => 'name',
        1 => 'billing_address_city',
        3 => 'account_type',
        4 => 'industry',
        5 => 'billing_address_state',
        6 => 'billing_address_country',
        7 => 'email',
        8 => 'assigned_user_id',
        9 => 'account_base_type',
        10 => 'iata',
    ),
    'create' => array(
        'formBase' => 'AccountFormBase.php',
        'formBaseClass' => 'AccountFormBase',
        'getFormBodyParams' =>
        array(
            0 => '',
            1 => '',
            2 => 'AccountSave',
        ),
        'createButton' => 'LNK_NEW_ACCOUNT',
    ),
    'searchdefs' => array(
        'name' =>
        array(
            'name' => 'name',
            'width' => '10%',
        ),
        'account_base_type' =>
        array(
            'name' => 'account_base_type',
            'width' => '10%',
            'label' => 'LBL_ACCOUNT_BASE_TYPE',
        ),
        'iata' =>
        array(
            'name' => 'iata',
            'label' => 'LBL_IATA',
            'display' => 'readonly',
        ),
        'account_type' =>
        array(
            'type' => 'enum',
            'label' => 'LBL_TYPE',
            'width' => '10%',
            'name' => 'account_type',
        ),
        'industry' =>
        array(
            'type' => 'enum',
            'label' => 'LBL_INDUSTRY',
            'width' => '10%',
            'name' => 'industry',
        ),
        'billing_address_city' =>
        array(
            'name' => 'billing_address_city',
            'width' => '10%',
        ),
        'billing_address_state' =>
        array(
            'name' => 'billing_address_state',
            'width' => '10%',
        ),
        'billing_address_country' =>
        array(
            'name' => 'billing_address_country',
            'width' => '10%',
        ),
        'email' =>
        array(
            'name' => 'email',
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
            'width' => '10%',
        ),
    ),
    'listviewdefs' => array(
        'B2B_EXT_ACCOUNT_NO' =>
        array(
            'type' => 'varchar',
            'default' => true,
            'label' => 'LBL_B2B_EXT_ACCOUNT_NO',
            'width' => '10%',
            'name' => 'b2b_ext_account_no',
        ),
        'NAME' =>
        array(
            'width' => '40%',
            'label' => 'LBL_LIST_ACCOUNT_NAME',
            'link' => true,
            'default' => true,
            'name' => 'name',
        ),
        'ACCOUNT_TYPE' =>
        array(
            'type' => 'enum',
            'label' => 'LBL_TYPE',
            'width' => '10%',
            'default' => true,
            'name' => 'account_type',
        ),
        'BILLING_ADDRESS_CITY' =>
        array(
            'width' => '10%',
            'label' => 'LBL_LIST_CITY',
            'default' => true,
            'name' => 'billing_address_city',
        ),
        'BILLING_ADDRESS_STATE' =>
        array(
            'width' => '7%',
            'label' => 'LBL_STATE',
            'default' => true,
            'name' => 'billing_address_state',
        ),
        'BILLING_ADDRESS_COUNTRY' =>
        array(
            'width' => '10%',
            'label' => 'LBL_COUNTRY',
            'default' => true,
            'name' => 'billing_address_country',
        ),
        'ASSIGNED_USER_NAME' =>
        array(
            'width' => '2%',
            'label' => 'LBL_LIST_ASSIGNED_USER',
            'default' => true,
            'name' => 'assigned_user_name',
        ),
        'IATA' =>
        array(
            'type' => 'varchar',
            'default' => true,
            'label' => 'LBL_IATA',
            'width' => '10%',
        ),
        'B2B_COMMISSION' =>
        array(
            'type' => 'varchar',
            'default' => true,
            'label' => 'LBL_B2B_COMMISSION',
            'width' => '10%',
        ),
    ),
);
