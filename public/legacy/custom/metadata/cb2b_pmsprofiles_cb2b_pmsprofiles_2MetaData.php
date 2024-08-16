<?php

// created: 2022-11-15 18:10:53
$dictionary["cb2b_pmsprofiles_cb2b_pmsprofiles_2"] = array(
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' =>
    array(
        'cb2b_pmsprofiles_cb2b_pmsprofiles_2' =>
        array(
            'lhs_module' => 'CB2B_PMSProfiles',
            'lhs_table' => 'cb2b_pmsprofiles',
            'lhs_key' => 'id',
            'rhs_module' => 'CB2B_PMSProfiles',
            'rhs_table' => 'cb2b_pmsprofiles',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2_c',
            'join_key_lhs' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida',
            'join_key_rhs' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb',
        ),
    ),
    'table' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2_c',
    'fields' =>
    array(
        0 =>
        array(
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,
        ),
        1 =>
        array(
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        2 =>
        array(
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ),
        3 =>
        array(
            'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida',
            'type' => 'varchar',
            'len' => 36,
        ),
        4 =>
        array(
            'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb',
            'type' => 'varchar',
            'len' => 36,
        ),
        5 =>
        array(
            'name' => 'match_criteria',
            'type' => 'varchar',
        ),
        6 =>
        array(
            'name' => 'date_entered',
            'type' => 'datetime',
        ),
    ),
    'indices' =>
    array(
        0 =>
        array(
            'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2spk',
            'type' => 'primary',
            'fields' =>
            array(
                0 => 'id',
            ),
        ),
        1 =>
        array(
            'name' => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2_alt',
            'type' => 'alternate_key',
            'fields' =>
            array(
                0 => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_ida',
                1 => 'cb2b_pmsprofiles_cb2b_pmsprofiles_2cb2b_pmsprofiles_idb',
            ),
        ),
    ),
);
