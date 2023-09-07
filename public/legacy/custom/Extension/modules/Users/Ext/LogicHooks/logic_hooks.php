<?php
$hook_array = array();
$hook_array['before_save'][] = array(
    77,
    'Users',
    'custom/modules/Users/UsersLogicHooks.php',
    'UsersLogicHooks',
    'visibleFieldIfSuperAdmin'
);