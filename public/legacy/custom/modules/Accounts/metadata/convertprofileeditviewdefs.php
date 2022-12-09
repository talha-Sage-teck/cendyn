<?php
$viewdefs ['Accounts'] =
    array (
        'convertprofileedit' =>
            array (
                'templateMeta' =>
                    array (
                        'form' =>
                            array (
                                'headerTpl' => 'include/EditView/header.tpl',
                            ),
                        'maxColumns' => '2',
                        'widths' =>
                            array (
                                0 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                                1 =>
                                    array (
                                        'label' => '10',
                                        'field' => '30',
                                    ),
                            ),
                        'includes' =>
                            array (
                                0 =>
                                    array (
                                        'file' => 'modules/Accounts/Account.js',
                                    ),
                                1 =>
                                    array (
                                        'file' => 'custom/modules/Accounts/js/custom.js',
                                    ),
                            ),
                        'useTabs' => false,
                        'tabDefs' =>
                            array (
                                'LBL_ACCOUNT_INFORMATION' =>
                                    array (
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                                'LBL_PANEL_ADVANCED' =>
                                    array (
                                        'newTab' => false,
                                        'panelDefault' => 'expanded',
                                    ),
                            ),
                        'syncDetailEditViews' => true,
                    ),

                'panels' =>
                    array (
                        'lbl_account_information' =>
                            array (
                                0 =>
                                    array (
                                        0 =>
                                              array (
                                                'name' => 'name',
                                                'label' => 'LBL_NAME',
                                                'comment' => 'Name of the Company',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'priority',
                                                'studio' => 'visible',
                                                'label' => 'LBL_PRIORITY',
                                            ),
                                    ),
                                1 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'b2b_account_no',
                                                'label' => 'LBL_B2B_ACCOUNT_NO',
                                                'type' => 'readonly', /*** Never editable */
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'email1',
                                                'studio' => 'false',
                                                'label' => 'LBL_EMAIL_ADDRESS',
                                            ),
                                    ),
                                2 =>
                                    array (
                                        0 => /*** added accountbasetype and refactored the array such that accountbasetype and account_type fields are next to each other  */
                                            array (
                                                'name' => 'account_base_type',
                                                'studio' => 'visible',
                                                'label' => 'LBL_ACCOUNT_BASE_TYPE',
                                                'customCode' => '{html_options name="account_base_type" id="account_base_type" options=$fields.account_base_type.options selected=$fields.account_base_type.value}',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'account_type',
                                                'studio' => 'visible',
                                                'label' => 'LBL_TYPE',
                                            ),
                                    ),
                                3 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'iata',
                                                'label' => 'LBL_IATA',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'status',
                                                'label' => 'LBL_STATUS',
                                            ),
                                    ),
                                4 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'black_list',
                                                'studio' => 'visible',
                                                'label' => 'LBL_BLACK_LIST',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'black_list_reason',
                                                'studio' => 'visible',
                                                'label' => 'LBL_BLACK_LIST_REASON',
                                            ),
                                    ),
                                5 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'website',
                                                'type' => 'link',
                                                'label' => 'LBL_WEBSITE',
                                                'displayParams' =>
                                                    array (
                                                        'link_target' => '_blank',
                                                    ),
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'industry',
                                                'comment' => 'The company belongs in this industry',
                                                'label' => 'LBL_INDUSTRY',
                                            ),
                                    ),
                                6 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'billing_address_street',
                                                'label' => 'LBL_BILLING_ADDRESS',
                                                'type' => 'address',
                                                'displayParams' =>
                                                    array (
                                                        'key' => 'billing',
                                                    ),
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'description',
                                                'comment' => 'Full text of the note',
                                                'label' => 'LBL_DESCRIPTION',
                                            ),
                                    ),
                                7 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'phone_office',
                                                'comment' => 'The office phone number',
                                                'label' => 'LBL_PHONE_OFFICE',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'phone_fax',
                                                'comment' => 'The fax phone number of this company',
                                                'label' => 'LBL_FAX',
                                            ),
                                    ),
                                8 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'assigned_user_name',
                                                'label' => 'LBL_ASSIGNED_TO',
                                            ),
                                        1 => '',
                                    ),
                            ),
                        'LBL_PANEL_ADVANCED' =>
                            array (
                                0 =>
                                    array (
                                        0 =>
                                            array (
                                                'name' => 'annual_revenue',
                                                'comment' => 'Annual revenue for this company',
                                                'label' => 'LBL_ANNUAL_REVENUE',
                                            ),
                                        1 =>
                                            array (
                                                'name' => 'b2b_commission',
                                                'label' => 'LBL_B2B_COMMISSION',
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
;
?>
