<?php
$listViewDefs ['Accounts'] = 
array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNTBASETYPE' => /*** added in the start of the list before account_type */
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNTBASETYPE',
    'width' => '8%',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'PRIORITY' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PRIORITY',
    'width' => '10%',
  ),
  'ACCOUNTLEVEL' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNTLEVEL',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => '15%',
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => true,
  ),
  'ACCOUNTSUBTYPE' =>
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNTSUBTYPE',
    'width' => '8%',
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => false,
  ),
  'ANNUAL_REVENUE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ANNUAL_REVENUE',
    'default' => false,
  ),
  'PHONE_FAX' => 
  array (
    'width' => '10%',
    'label' => 'LBL_PHONE_FAX',
    'default' => false,
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_BILLING_ADDRESS_STATE',
    'default' => false,
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => false,
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
    'default' => false,
  ),
  'RATING' => 
  array (
    'width' => '10%',
    'label' => 'LBL_RATING',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'OWNERSHIP' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OWNERSHIP',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'EMPLOYEES' => 
  array (
    'width' => '10%',
    'label' => 'LBL_EMPLOYEES',
    'default' => false,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}',
    'default' => false,
  ),
  'SIC_CODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SIC_CODE',
    'default' => false,
  ),
  'TICKER_SYMBOL' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TICKER_SYMBOL',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
  'B2BACCOUNTID' =>
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_B2BACCOUNTID',
    'width' => '8%',
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'B2BACCOUNTNO' => /*** added B2BAccountNo as a default field in ListView */
  array(
    'width' => '5%',
    'label' => 'LBL_B2BACCOUNTNO',
    'default' => true,
  ),
  'IATA' => /*** added IATA as a default field in ListView */
  array(
      'width' => '5%',
      'label' => 'LBL_IATA',
      'default' => true,
  ),
  'B2B_COMMISSION' => /*** added B2BCommission as a default field in ListView */
  array(
      'width' => '5%',
      'label' => 'LBL_B2B_COMMISSION',
      'default' => true,
  ),
);
;
?>
