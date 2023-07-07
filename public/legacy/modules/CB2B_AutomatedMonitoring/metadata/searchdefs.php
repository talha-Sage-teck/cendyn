<?php
$module_name = 'CB2B_AutomatedMonitoring';
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
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'related_to_module' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_RELATED_TO_MODULE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_to_module',
      ),
      'reported_time' => 
      array (
        'type' => 'datetimecombo',
        'label' => 'LBL_REPORTED_TIME',
        'width' => '10%',
        'default' => true,
        'name' => 'reported_time',
      ),
      'error_status' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ERROR_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'error_status',
      ),
      'request_type' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_REQUEST_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'request_type',
      ),
      'http_code' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_HTTP_CODE',
        'width' => '10%',
        'default' => true,
        'name' => 'http_code',
      ),
      'concerned_team' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_CONCERNED_TEAM',
        'width' => '10%',
        'default' => true,
        'name' => 'concerned_team',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
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
