<?php
$module_name = 'CB2B_AutomatedMonitoring';
$viewdefs [$module_name] = 
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
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'parent_name',
            'studio' => 'visible',
            'label' => 'LBL_FLEX_RELATE',
          ),
          1 => 
          array (
            'name' => 'related_to_module',
            'studio' => 'visible',
            'label' => 'LBL_RELATED_TO_MODULE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'reported_time',
            'label' => 'LBL_REPORTED_TIME',
          ),
          1 => 
          array (
            'name' => 'error_status',
            'studio' => 'visible',
            'label' => 'LBL_ERROR_STATUS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'studio' => 'visible',
            'label' => 'LBL_RESOLUTION',
          ),
          1 => 
          array (
            'name' => 'concerned_team',
            'studio' => 'visible',
            'label' => 'LBL_CONCERNED_TEAM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'api_response',
            'studio' => 'visible',
            'label' => 'LBL_API_RESPONSE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'api_url',
            'label' => 'LBL_API_URL',
          ),
          1 => 
          array (
            'name' => 'request_type',
            'label' => 'LBL_REQUEST_TYPE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'input_data',
            'studio' => 'visible',
            'label' => 'LBL_INPUT_DATA',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'http_code',
            'label' => 'LBL_HTTP_CODE',
          ),
          1 => 
          array (
            'name' => 'operation',
            'label' => 'LBL_OPERATION',
          ),
        ),
        8 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
