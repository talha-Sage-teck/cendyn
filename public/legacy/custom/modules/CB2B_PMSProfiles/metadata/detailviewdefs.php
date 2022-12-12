<?php

$module_name = 'CB2B_PMSProfiles';
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
            'tabDefs' =>
            array(
                'DEFAULT' =>
                array(
                    'newTab' => false,
                    'panelDefault' => 'expanded',
                ),
            ),
        ),
        'recordActions' => array(
            'actions' => array(
                'convert-pms-profile' => array(
                    'key' => 'convert-pms-profile',
                    'labelKey' => 'LBL_CONVERT_PMS_PROFILE',
                    'asyncProcess' => true,
                    'modes' => array('detail'),
                    'acl' => array('edit'),
                    'params' => array(
                        'displayConfirmation' => true,
                        'confirmationLabel' => 'LBL_POPUP_CONVERT_PROFILE',
                        'checkRelatedAccount' => true
                    ),
                ),
            ),
        ),
        'panels' =>
        array(
            'default' =>
            array(
                0 =>
                array(
                    0 => 'name',
                    1 => 'iata',
                ),
                1 =>
                array(
                    0 =>
                    array(
                        'name' => 'type',
                        'studio' => 'visible',
                        'label' => 'LBL_TYPE',
                    ),
                    1 =>
                    array(
                        'name' => 'website',
                        'label' => 'LBL_WEBSITE',
                    ),
                ),
                2 =>
                array(
                    0 =>
                    array(
                        'name' => 'phone',
                        'label' => 'LBL_PHONE',
                    ),
                    1 =>
                    array(
                        'name' => 'fax',
                        'label' => 'LBL_FAX',
                    ),
                ),
                3 =>
                array(
                    0 =>
                    array(
                        'name' => 'email',
                        'label' => 'LBL_EMAIL',
                    ),
                    1 =>
                    array(
                        'name' => 'donotemail',
                        'label' => 'LBL_DONOTEMAIL',
                    ),
                ),
                4 =>
                array(
                    0 => 'pms_einsight_profile_id',
                    1 => 'hotel_short_name',
                ),
                5 =>
                array(
                    0 =>
                    array(
                        'name' => 'pms_address_street',
                        'type' => 'address',
                        'displayParams' =>
                        array(
                            'key' => 'pms',
                        ),
                    ),
                    1 =>
                    array(
                        'name' => 'accounts_cb2b_pmsprofiles_1_name',
                    ),
                ),
                6 =>
                array(
                    0 =>
                    array(
                        'name' => 'date_entered',
                        'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                        'label' => 'LBL_DATE_ENTERED',
                    ),
                    1 =>
                    array(
                        'name' => 'date_modified',
                        'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                        'label' => 'LBL_DATE_MODIFIED',
                    ),
                ),
            ),
        ),
    ),
);
;
?>
