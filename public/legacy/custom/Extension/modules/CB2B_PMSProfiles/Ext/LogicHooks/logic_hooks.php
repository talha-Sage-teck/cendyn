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
    'Set is_update flag for New and Updated Records.',
    'custom/modules/CB2B_PMSProfiles/before_save.php',
    'beforeSaveHandler',
    'beforeSave'
);

$hook_array['before_save'][] = Array(
    2,
    'Link account with related profiles as specified with profiles_to_relate field',
    'custom/modules/CB2B_PMSProfiles/before_save.php',
    'beforeSaveHandler',
    'linkAccountToRelatedProfiles'
);
