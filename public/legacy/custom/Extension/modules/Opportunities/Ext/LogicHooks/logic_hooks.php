<?php

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    70,
    'Check for Lost Reason value and change it',
    'custom/modules/Opportunities/OpportunityLogicHook.php',
    'OpportunityLogicHook',
    'processLostReason'
);

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    70,
    'link the Associated Hotels From Import to Opportunity',
    'custom/modules/Opportunities/OpportunityLogicHook.php',
    'OpportunityLogicHook',
    'linkAssociatedHotelsFromImport'
);
