<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          'SEND_CONFIRM_OPT_IN_EMAIL' => 
          array (
            'customCode' => '<input type="submit" class="button hidden" disabled="disabled" title="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}" onclick="this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'Accounts\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';" name="send_confirm_opt_in_email" value="{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}"/>',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
              'htmlOptions' => 
              array (
                'class' => 'button hidden',
                'id' => 'send_confirm_opt_in_email',
                'title' => '{$APP.LBL_SEND_CONFIRM_OPT_IN_EMAIL}',
                'onclick' => 'this.form.return_module.value=\'Accounts\'; this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'; this.form.action.value=\'sendConfirmOptInEmail\'; this.form.module.value=\'Accounts\'; this.form.module_tab.value=\'Accounts\';',
                'name' => 'send_confirm_opt_in_email',
                'disabled' => true,
              ),
            ),
          ),
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_PRINT_AS_PDF}">',
          ),
        ),
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
    'topWidget' => 
    array (
      'type' => 'statistics',
      'options' => 
      array (
        'statistics' => 
        array (
          0 => 
          array (
            'labelKey' => 'LBL_AVERAGE_CLOSED_WON_PER_YEAR',
            'type' => 'accounts-won-opportunity-amount-by-year',
          ),
          1 => 
          array (
            'labelKey' => 'LBL_OPPORTUNITIES_TOTAL',
            'type' => 'opportunities',
          ),
        ),
      ),
      'acls' => 
      array (
        'Accounts' => 
        array (
          0 => 'view',
          1 => 'list',
        ),
        'Opportunities' => 
        array (
          0 => 'view',
          1 => 'list',
        ),
      ),
    ),
    'sidebarWidgets' => 
    array (
      0 => 
      array (
        'type' => 'chart',
        'options' => 
        array (
          'toggle' => false,
          'headerTitle' => true,
          'charts' => 
          array (
            0 => 
            array (
              'chartKey' => 'accounts-past-years-closed-opportunity-amounts',
              'chartType' => 'line-chart',
              'statisticsType' => 'accounts-past-years-closed-opportunity-amounts',
              'labelKey' => 'LBL_CLOSED_PER_YEAR',
              'chartOptions' => 
              array (
              ),
            ),
          ),
        ),
        'acls' => 
        array (
          'Accounts' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
          'Opportunities' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
        ),
      ),
      1 => 
      array (
        'type' => 'history-timeline',
        'acls' => 
        array (
          'Accounts' => 
          array (
            0 => 'view',
            1 => 'list',
          ),
        ),
      ),
    ),
    'recordActions' => 
    array (
      'actions' => 
      array (
        'print-as-pdf' => 
        array (
          'key' => 'print-as-pdf',
          'labelKey' => 'LBL_PRINT_AS_PDF',
          'asyncProcess' => true,
          'modes' => 
          array (
            0 => 'detail',
          ),
          'acl' => 
          array (
            0 => 'view',
          ),
          'aclModule' => 'AOS_PDF_Templates',
          'params' => 
          array (
            'selectModal' => 
            array (
              'module' => 'AOS_PDF_Templates',
            ),
          ),
        ),
      ),
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
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
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
            'name' => 'b2baccountno',
            'label' => 'LBL_B2BACCOUNTNO',
            'type' => 'readonly', /*** Never editable */
          ),
          1 => '',
        ),
        2 =>
        array (
          0 => /*** added accountbasetype and refactored the array such that accountbasetype and account_type fields are next to each other  */
          array (
            'name' => 'accountbasetype',
            'studio' => 'visible',
            'label' => 'LBL_ACCOUNTBASETYPE',
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
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
        4 =>
        array (
          0 => 
          array (
            'name' => 'blacklist',
            'studio' => 'visible',
            'label' => 'LBL_BLACKLIST',
          ),
          1 => 
          array (
            'name' => 'blacklistreason',
            'studio' => 'visible',
            'label' => 'LBL_BLACKLISTREASON',
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
