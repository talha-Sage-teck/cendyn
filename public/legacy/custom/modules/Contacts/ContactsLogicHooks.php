<?php
class ContactsLogicHooks
{
    public function setSyncFlag($bean, $events, $args)
    {
        /***
         * This function sets the readToSync flag when a new contact is created or updated
         * @LogicHook Before Save
         * @Condition
         * The save has not occurred in scheduler
         * The save has not occurred after setting delete flag
         * The save has not occurred after setting account relationship add or delete
         * @Objectives
         * 1. Set the ready_to_sync flag equal to 1 when a contact is created
         * 2. Set the ready_to_sync flag equal to 2 when a contact is updated
         * @Input
         * 1. An unsaved contact bean
         * @Returns
         * Function returns void
         */

        if(!$bean->skipBeforeSave) {
            if ($bean->fetched_row != false) {
                $bean->ready_to_sync = 2;
                return;
            }
            $bean->ready_to_sync = 1;
        }
    }

    public function beforeDelete($bean, $events, $args)
    {
        /***
         * This function sets the readToSync flag before a contact is deleted
         * @LogicHook Before Delete
         * @Objectives
         * 1. Set the ready_to_sync flag equal to 3 when a contact is deleted
         * @Input
         * 1. An unsaved contact bean
         * @Returns
         * Function returns void
         */

        $bean->ready_to_sync = 3;
        $bean->skipBeforeSave = true;
        $bean->save();
    }
}
