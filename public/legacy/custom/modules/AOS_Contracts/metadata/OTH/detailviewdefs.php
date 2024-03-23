<?php

$module_name = 'AOS_Contracts';
$viewdefs [$module_name] = array(
    'DetailView' =>
    array(
        'templateMeta' =>
        array(
            'form' =>
            array(
                'buttons' =>
                array(
                    0 => 'EDIT',
                    1 => 'DUPLICATE',
                    2 => 'DELETE',
                    3 => 'FIND_DUPLICATES',
                    4 =>
                    array(
                        'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="{$MOD.LBL_PRINT_AS_PDF}">',
                    ),
                    5 =>
                    array(
                        'customCode' => '<input type="button" class="button" onClick="showPopup(\'emailpdf\');" value="{$MOD.LBL_EMAIL_PDF}">',
                    ),
                ),
            ),
            'includes' =>
            array(
                0 =>
                array(
                    'file' => 'custom/modules/AOS_Contracts/js/AOS_Contracts_DetailView.js',
                ),
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
            'useTabs' => false,
            'syncDetailEditViews' => true,
            'tabDefs' =>
            array(
                'DEFAULT' =>
                array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
                'LBL_EDITVIEW_PANEL9' =>
                array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
                'LBL_LINE_ITEMS' =>
                array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
                'LBL_EDITVIEW_PANEL1' =>
                array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
            ),
        ),
        'panels' =>
        array(
            'default' =>
            array(
                0 =>
                array(
                    0 =>
                    array(
                        'name' => 'contract_type',
                        'studio' => 'visible',
                        'label' => 'LBL_CONTRACT_TYPE',
                    ),
                    1 =>
                    array(
                        'name' => 'status',
                        'studio' => 'visible',
                        'label' => 'LBL_STATUS',
                    ),
                ),
                1 =>
                array(
                    0 => 'name',
                    1 =>
                    array(
                        'name' => 'assigned_user_name',
                        'label' => 'LBL_ASSIGNED_TO_NAME',
                    ),
                ),
                2 =>
                array(
                    0 =>
                    array(
                        'name' => 'total_contract_value',
                        'label' => 'LBL_TOTAL_CONTRACT_VALUE',
                    ),
                    1 =>
                    array(
                        'name' => 'contract_account',
                        'label' => 'LBL_CONTRACT_ACCOUNT',
                    ),
                ),
                3 =>
                array(
                    0 =>
                    array(
                        'name' => 'start_date',
                        'label' => 'LBL_START_DATE',
                    ),
                    1 =>
                    array(
                        'name' => 'contact',
                        'studio' => 'visible',
                        'label' => 'LBL_CONTACT',
                    ),
                ),
                4 =>
                array(
                    0 =>
                    array(
                        'name' => 'end_date',
                        'label' => 'LBL_END_DATE',
                    ),
                    1 =>
                    array(
                        'name' => 'opportunity',
                        'label' => 'LBL_OPPORTUNITY',
                    ),
                ),
                5 =>
                array(
                    0 =>
                    array(
                        'name' => 'renewal_reminder_date',
                        'label' => 'LBL_RENEWAL_REMINDER_DATE',
                    ),
                    1 => '',
                ),
                6 =>
                array(
                    0 =>
                    array(
                        'name' => 'customer_signed_date',
                        'label' => 'LBL_CUSTOMER_SIGNED_DATE',
                    ),
                    1 => '',
                ),
                7 =>
                array(
                    0 =>
                    array(
                        'name' => 'company_signed_date',
                        'label' => 'LBL_COMPANY_SIGNED_DATE',
                    ),
                    1 =>
                    array(
                        'name' => 'revenue',
                        'label' => 'LBL_REVENUE',
                    ),
                ),
                8 =>
                array(
                    0 => 'description',
                    1 => '',
                ),
            ),
            'lbl_editview_panel9' =>
            array(
                0 =>
                array(
                    0 => 'associate_hotels_contracts',
                    1 => '',
                ),
                1 =>
                array(
                    0 =>
                    array(
                        'name' => 'date_of_issue',
                        'studio' => 'visible',
                        'label' => 'LBL_DATE_OF_ISSUE',
                    ),
                    1 =>
                    array(
                        'name' => 'effective_date',
                        'studio' => 'visible',
                        'label' => 'LBL_EFFECTIVE_DATE',
                    ),
                ),
                2 =>
                array(
                    0 =>
                    array(
                        'name' => 'signed_date',
                        'studio' => 'visible',
                        'label' => 'LBL_SIGNED_DATE',
                    ),
                    1 =>
                    array(
                        'name' => 'date_end',
                        'studio' => 'visible',
                        'label' => 'LBL_END_DATE',
                    ),
                ),
                3 =>
                array(
                    0 =>
                    array(
                        'name' => 'purpose',
                        'studio' => 'visible',
                        'label' => 'LBL_PURPOSE',
                    ),
                    1 =>
                    array(
                        'name' => 'black_out_dates',
                        'studio' => 'visible',
                        'label' => 'LBL_BLACK_OUT_DATES',
                    ),
                ),
                4 =>
                array(
                    0 =>
                    array(
                        'name' => 'special_information',
                        'studio' => 'visible',
                        'label' => 'LBL_SPECIAL_INFORMATION',
                    ),
                    1 =>
                    array(
                        'name' => 'other_information',
                        'studio' => 'visible',
                        'label' => 'LBL_OTHER_INFORMATION',
                    ),
                ),
                5 =>
                array(
                    0 =>
                    array(
                        'name' => 'attachment',
                        'comment' => 'File name associated with the note (attachment)',
                        'label' => 'LBL_ATTACHMENT',
                        'customCode' => '<a href="{$fields.attachment.value}">Attachment</a>',
                    ),
                    1 =>
                    array(
                        'name' => 'revision_1_date',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_1_DATE',
                    ),
                ),
                6 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_1',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_1',
                    ),
                ),
                7 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_2_date',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_2_DATE',
                    ),
                ),
                8 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_2',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_2',
                    ),
                ),
                9 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_3_date',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_3_DATE',
                    ),
                ),
                10 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_3',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_3',
                    ),
                ),
                11 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_4_date',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_4_DATE',
                    ),
                ),
                12 =>
                array(
                    0 => '',
                    1 =>
                    array(
                        'name' => 'revision_4',
                        'studio' => 'visible',
                        'label' => 'LBL_REVISION_4',
                    ),
                ),
            ),
            'lbl_line_items' =>
            array(
                0 =>
                array(
                    0 =>
                    array(
                        'name' => 'currency_id',
                        'studio' => 'visible',
                        'label' => 'LBL_CURRENCY',
                    ),
                ),
                1 =>
                array(
                    0 =>
                    array(
                        'name' => 'line_items',
                        'label' => 'LBL_LINE_ITEMS',
                    ),
                ),
                2 =>
                array(
                    0 => '',
                ),
                3 =>
                array(
                    0 =>
                    array(
                        'name' => 'total_amt',
                        'label' => 'LBL_TOTAL_AMT',
                    ),
                ),
                4 =>
                array(
                    0 =>
                    array(
                        'name' => 'discount_amount',
                        'label' => 'LBL_DISCOUNT_AMOUNT',
                    ),
                ),
                5 =>
                array(
                    0 =>
                    array(
                        'name' => 'subtotal_amount',
                        'label' => 'LBL_SUBTOTAL_AMOUNT',
                    ),
                ),
                6 =>
                array(
                    0 =>
                    array(
                        'name' => 'shipping_amount',
                        'label' => 'LBL_SHIPPING_AMOUNT',
                    ),
                ),
                7 =>
                array(
                    0 =>
                    array(
                        'name' => 'shipping_tax_amt',
                        'label' => 'LBL_SHIPPING_TAX_AMT',
                    ),
                ),
                8 =>
                array(
                    0 =>
                    array(
                        'name' => 'tax_amount',
                        'label' => 'LBL_TAX_AMOUNT',
                    ),
                ),
                9 =>
                array(
                    0 =>
                    array(
                        'name' => 'total_amount',
                        'label' => 'LBL_GRAND_TOTAL',
                    ),
                ),
            ),
            'lbl_editview_panel1' =>
            array(
                0 =>
                array(
                    0 =>
                    array(
                        'name' => 'room_nights',
                        'label' => 'LBL_ROOM_NIGHTS',
                    ),
                    1 =>
                    array(
                        'name' => 'rate_code',
                        'label' => 'LBL_RATE_CODE',
                    ),
                ),
            ),
        ),
    ),
);
;
?>
