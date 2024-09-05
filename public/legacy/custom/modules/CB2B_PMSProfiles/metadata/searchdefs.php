<?php
$module_name = 'CB2B_PMSProfiles';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'pms_einsight_profile_id' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PMS_EINSIGHT_PROFILE_ID',
        'width' => '10%',
        'name' => 'pms_einsight_profile_id',
      ),
      'pms_address_city' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PMS_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'pms_address_city',
      ),
      'pms_address_country' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PMS_ADDRESS_COUNTRY',
        'width' => '10%',
        'name' => 'pms_address_country',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'is_assigned_account' => 
      array (
        'type' => 'bool',
        'label' => 'LBL_IS_ASSIGNED_ACCOUNT',
        'width' => '10%',
        'default' => true,
        'name' => 'is_assigned_account',
      ),
      'accounts_cb2b_pmsprofiles_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_CB2B_PMSPROFILES_1_FROM_ACCOUNTS_TITLE',
        'id' => 'ACCOUNTS_CB2B_PMSPROFILES_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_cb2b_pmsprofiles_1_name',
      ),
      'hotel_short_name' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_HOTEL_SHORT_NAME',
        'width' => '10%',
        'name' => 'hotel_short_name',
      ),
      'pms_address_city' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PMS_ADDRESS_CITY',
        'width' => '10%',
        'name' => 'pms_address_city',
      ),
      'pms_address_country' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_PMS_ADDRESS_COUNTRY',
        'width' => '10%',
        'name' => 'pms_address_country',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'default' => true,
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'name' => 'type',
      ),
      'iata' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_IATA',
        'width' => '10%',
        'default' => true,
        'name' => 'iata',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
