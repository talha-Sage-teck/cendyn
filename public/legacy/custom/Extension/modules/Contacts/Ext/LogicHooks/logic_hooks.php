<?php
$hook_array['before_delete'][] = Array(
    44,
    'Set the ready_to_sync flag before deleting the contact',
    'custom/modules/Contacts/ContactsLogicHooks.php',
    'ContactsLogicHooks',
    'beforeDelete'
);

$hook_array['before_save'][] = Array(
    44,
    'Set the ready_to_sync flag before saving the contact',
    'custom/modules/Contacts/ContactsLogicHooks.php',
    'ContactsLogicHooks',
    'setSyncFlag'
);

$hook_array['before_relationship_add'][] = Array(
    4,
    'Set ready to link flag',
    'custom/modules/Contacts/before_relationship_add.php',
    'beforeRelationshipAddHandler',
    'setReadyToLink'
);

$hook_array['after_relationship_delete'][] = Array(
    4,
    'Set ready to link flag after delete',
    'custom/modules/Contacts/after_relationship_delete.php',
    'afterRelationshipDeleteHandler',
    'setReadyToLinkAfterDelete'
);
