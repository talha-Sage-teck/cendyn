<?php
$viewdefs ['OutboundEmailAccounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DELETE',
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'preForm' => '
                <script type="text/javascript">
                    {literal}var userService = function() { return { isAdmin: function() { return {/literal}{if $is_admin}true{else}false{/if}{literal};}}}();{/literal}
                    {suite_combinescripts
                        files="modules/OutboundEmailAccounts/js/fields.js,
                               modules/OutboundEmailAccounts/js/owner_toggle.js,
                               modules/OutboundEmailAccounts/js/panel_toggle.js,
                               modules/OutboundEmailAccounts/js/smtp_auth_toggle.js"}
                </script>
            ',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => '',
        ),
        1 => 
        array (
          0 => 'type',
          1 => '',
        ),
        2 => 
        array (
          0 => 'owner_name',
          1 => 
          array (
            'name' => 'externaloauthconnection_outboundemailaccounts_1_name',
          ),
        ),
      ),
      'lbl_connection_configuration' => 
      array (
        0 => 
        array (
          0 => 'mail_smtpserver',
          1 => 'mail_smtpauth_req',
        ),
        1 => 
        array (
          0 => 'mail_smtpssl',
          1 => 'mail_smtpuser',
        ),
        2 => 
        array (
          0 => 'mail_smtpport',
          1 => '',
        ),
      ),
      'lbl_outbound_configuration' => 
      array (
        0 => 
        array (
          0 => 'smtp_from_name',
          1 => 'reply_to_name',
        ),
        1 => 
        array (
          0 => 'smtp_from_addr',
          1 => 'reply_to_addr',
        ),
        2 => 
        array (
          0 => 'signature',
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
