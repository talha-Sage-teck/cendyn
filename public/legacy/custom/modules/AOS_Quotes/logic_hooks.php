<?php

// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1;
$hook_array = Array();
// position, file, function 

$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(
    70,
    'link the Associated Hotels From Import to Quotes',
    'custom/modules/AOS_Quotes/AOS_QuotesLogicHook.php',
    'AOS_QuotesLogicHook',
    'linkAssociatedHotelsFromImport'
);
