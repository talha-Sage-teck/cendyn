<?php

// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
$hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'ElasticSearch Index Changes', 'lib/Search/ElasticSearch/ElasticSearchHooks.php', 'SuiteCRM\Search\ElasticSearch\ElasticSearchHooks', 'beanSaved');
$hook_array['after_save'][] = Array(30, 'popup_select', 'modules/SecurityGroups/AssignGroups.php', 'AssignGroups', 'popup_select');
$hook_array['after_delete'] = Array();
$hook_array['after_delete'][] = Array(1, 'ElasticSearch Index Changes', 'lib/Search/ElasticSearch/ElasticSearchHooks.php', 'SuiteCRM\Search\ElasticSearch\ElasticSearchHooks', 'beanDeleted');
$hook_array['after_ui_footer'] = Array();
$hook_array['after_ui_footer'][] = Array(10, 'popup_onload', 'modules/SecurityGroups/AssignGroups.php', 'AssignGroups', 'popup_onload');
$hook_array['after_ui_frame'] = Array();
$hook_array['after_ui_frame'][] = Array(20, 'mass_assign', 'modules/SecurityGroups/AssignGroups.php', 'AssignGroups', 'mass_assign');
$hook_array['after_ui_frame'][] = Array(1, 'Load Social JS', 'include/social/hooks.php', 'hooks', 'load_js');
$hook_array['after_login'][] = Array(1, 'Reassign tabs to user', 'custom/modules/Users/UsersLogicHooks.php', 'UsersLogicHooks', 'after_login_method');
