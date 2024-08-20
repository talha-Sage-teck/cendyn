<?php

$dictionary['CB2B_PMSProfiles']['fields']['hotel_short_name_enum'] = array(
    'name' => 'hotel_short_name_enum',
    'vname' => 'LBL_HOTEL_SHORT_NAME',
    'type' => 'enum',
    'len' => 100,
    'options' => 'prepare_hotels_list',
    'required' => false,
    'inline_edit' => false,
    'source' => 'non-db',
);

$dictionary["CB2B_PMSProfiles"]['fields']['cenres_pms_profile_id'] = array(
    'name' => 'cenres_pms_profile_id',
    'vname' => 'LBL_CENRES_PMS_PROFILE_ID',
    'type' => 'varchar',
    'required' => false,
    'inline_edit' => false,
    'len' => '255',
    'size' => '36',
);

$dictionary["CB2B_PMSProfiles"]['fields']['ccrm_pms_profile_id'] = array(
    'name' => 'ccrm_pms_profile_id',
    'vname' => 'LBL_CCRM_PMS_PROFILE_ID',
    'type' => 'varchar',
    'required' => false,
    'inline_edit' => false,
    'len' => '255',
    'size' => '36',
);
