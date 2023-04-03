<?php
$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    70,
    'Check for Lost Reason value and change it',
    'custom/modules/Opportunities/OpportunityLogicHook.php',
    'OpportunityLogicHook',
    'processLostReason'
);
