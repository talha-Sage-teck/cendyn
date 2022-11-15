<?php

$hook_array['process_record'][] = Array(
    1,
    'Scheduled Report Lv',
    'custom/modules/CB2B_PMSProfiles/process_record.php',
    'processRecordHandler',
    'processRecord'
);

$hook_array['before_save'][] = Array(
    1,
    'Scheduled Report Lv',
    'custom/modules/CB2B_PMSProfiles/before_save.php',
    'beforeSaveHandler',
    'beforeSave'
);
