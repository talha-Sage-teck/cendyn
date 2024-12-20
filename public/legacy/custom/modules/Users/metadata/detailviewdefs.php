<?php

$viewdefs['Users']['DetailView'] = array(
    'templateMeta' =>
    array(
        'form' =>
        array(
            /**
             * Actions for users are configured in modules/Users/views/view.detail.php
             * This is to control security access to the actions based on the user and system preferences.
             * To customise in an upgrade safe way, You need to create custom view instead.
             * Then override UsersViewDetail::preDisplay().
             */
            'buttons' => array(),
        ),
        'maxColumns' => '2',
        'widths' =>
        array(
            0 =>
            array(
                'label' => '10',
                'field' => '30',
            ),
            1 =>
            array(
                'label' => '10',
                'field' => '30',
            ),
        ),
        'useTabs' => true,
        'tabDefs' =>
        array(
            'LBL_USER_INFORMATION' =>
            array(
                'newTab' => true,
                'panelDefault' => 'expanded',
            ),
            'LBL_EMPLOYEE_INFORMATION' =>
            array(
                'newTab' => false,
                'panelDefault' => 'collapsed',
            ),
        ),
    ),
    'panels' =>
    array(
        'LBL_USER_INFORMATION' =>
        array(
            0 =>
            array(
                0 => 'full_name',
                1 => 'user_name',
            ),
            1 =>
            array(
                0 => 'status',
                1 =>
                array(
                    'name' => 'UserType',
                    'customCode' => '{$USER_TYPE_READONLY}',
                ),
            ),
            2 =>
            array(
                0 =>
                array(
                    'name' => 'is_admin',
                    'studio' =>
                    array(
                        'listview' => false,
                        'searchview' => false,
                        'related' => false,
                    ),
                    'label' => 'LBL_IS_ADMIN',
                ),
                1 =>
                array(
                    'name' => 'customer_admin',
                    'studio' => 'visible',
                    'label' => 'LBL_CHECKBOX_CUSTOMER_ADMIN_LABEL',
                ),
            ),
            3 =>
            array(
                0 => 'photo',
                1 => '',
            ),
        ),
        'LBL_EMPLOYEE_INFORMATION' =>
        array(
            0 =>
            array(
                0 => 'employee_status',
                1 => 'show_on_employees',
            ),
            1 =>
            array(
                0 => 'title',
                1 => 'phone_work',
            ),
            2 =>
            array(
                0 => 'department',
                1 => 'phone_mobile',
            ),
            3 =>
            array(
                0 => 'reports_to_name',
                1 => 'phone_other',
            ),
            4 =>
            array(
                0 => '',
                1 => 'phone_fax',
            ),
            5 =>
            array(
                0 => '',
                1 => 'phone_home',
            ),
            6 =>
            array(
                0 => 'messenger_type',
                1 => 'messenger_id',
            ),
            7 =>
            array(
                0 => 'address_street',
                1 => 'address_city',
            ),
            8 =>
            array(
                0 => 'address_state',
                1 => 'address_postalcode',
            ),
            9 =>
            array(
                0 => 'address_country',
            ),
            10 =>
            array(
                0 => 'description',
            ),
        ),
    ),
);
