<?php

$module_name = 'CB2B_PMSProfiles';
$viewdefs [$module_name] = array(
    'EditView' =>
    array(
        'templateMeta' =>
        array(
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
                    array (
                        0 =>
                            array (
                                'name' => 'interests',
                                'label' => 'LBL_INTERESTS',
                            ),
                        1 => array (
                            'name' => 'member',
                            'label' => 'LBL_MEMBER',
                        ),
                    ),
            ),
        ),
    ),
);
;
?>
