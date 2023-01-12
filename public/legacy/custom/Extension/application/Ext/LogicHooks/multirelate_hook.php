<?php
if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
$hook_array['before_save'][] = array(99, 'Multirelate linking', 'custom/modules/MultiRelateLinking.php','MultiRelateLinking', 'link_records_in_relation');
