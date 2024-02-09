<?php

$viewdefs['Accounts'] = [
    'ListView' =>  [
        'sidebarWidgets' => [
            'accounts-new-by-month' => [
                'type' => 'chart',
                'labelKey' => 'LBL_QUICK_CHARTS',
                'options' => [
                    'toggle' => true,
                    'headerTitle' => false,
                    'charts' => [
                        [
                            'chartKey' => 'accounts-new-by-month',
                            'chartType' => 'line-chart',
                            'statisticsType' => 'accounts-new-by-month',
                            'labelKey' => 'ACCOUNT_TYPES_PER_MONTH',
                            'chartOptions' => [
                            ]
                        ]
                    ]
                ],
                'acls' => [
                    'Accounts' => ['view', 'list']
                ]
            ],
        ],
        'bulkActions' => [
            'actions' => [
                'records-to-target-list' => [
                    'key' => 'records-to-target-list',
                    'labelKey' => 'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
                    'modes' => ['list'],
                    'acl' => ['edit'],
                    'aclModule' => 'prospect-lists',
                    'params' => [
                        'selectModal' => [
                            'module' => 'ProspectLists'
                        ],
                        'allowAll' => false,
                        'max' => 200
                    ]
                ],
                'contacts-to-target-list' => [
                    'key' => 'contacts-to-target-list',
                    'labelKey' => 'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS',
                    'modes' => ['list'],
                    'acl' => ['edit'],
                    'aclModule' => 'prospect-lists',
                    'params' => [
                        'selectModal' => [
                            'module' => 'ProspectLists'
                        ],
                        'allowAll' => false,
                        'max' => 200
                    ]
                ],
                'print-as-pdf' => [
                    'key' => 'print-as-pdf',
                    'labelKey' => 'LBL_PRINT_AS_PDF',
                    'modes' => ['list'],
                    'acl' => ['view'],
                    'aclModule' => 'AOS_PDF_Templates',
                    'params' => [
                        'selectModal' => [
                            'module' => 'AOS_PDF_Templates'
                        ],
                        'allowAll' => false,
                        'max' => 50
                    ]
                ]
            ]
        ]
    ]
];

$listViewDefs ['Accounts'] =
array (
  'NAME' =>
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'ACCOUNT_BASE_TYPE' =>
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ACCOUNT_BASE_TYPE',
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
  'B2B_ACCOUNT_NO' =>
  array (
    'width' => '5%',
    'label' => 'LBL_B2B_ACCOUNT_NO',
    'default' => true,
  ),
  'IATA' =>
  array (
    'width' => '5%',
    'label' => 'LBL_IATA',
    'default' => true,
  ),
  'B2B_COMMISSION' =>
  array (
    'width' => '5%',
    'label' => 'LBL_B2B_COMMISSION',
    'default' => true,
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
  'B2B_ACCOUNT_ID' =>
  array (
    'type' => 'int',
    'default' => false,
    'label' => 'LBL_B2B_ACCOUNT_ID',
    'width' => '8%',
  ),
  'MODIFIED_BY_NAME' =>
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
);
;
?>
