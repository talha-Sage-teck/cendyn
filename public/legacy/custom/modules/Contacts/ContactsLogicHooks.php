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

    public function addEmailsToAudit($bean, $events, $args)
    {
        /***
         * This function adds all the emails to audit table
         * @LogicHook Before Save
         * @Objectives
         * 1. Add emails to audit table
         * @Input
         * 1. An unsaved contact bean
         * @Returns
         * Function returns void
         */

        global $db;
        $prevEmails = $bean->emailAddress->addresses;
        $newEmails = array ();
        $keptEmails = array ();
        $emails = $bean->line_item_entries['email_addresses'];

        if($emails && sizeof($emails) > 0) {

            //separate new emails with kept emails from previous set of emails
            foreach ($emails as $email) {
                if($email->deleted === 0)
                    $newEmails[] = $email;
                else if($email->deleted !== 1)
                    $keptEmails[] = $email;
            }

            //merges the array of kept emails and new emails, but the kept emails come first
            $newEmails = array_merge($keptEmails, $newEmails);

            //loops over each email in the merged array to check if it is the same as the email in the previous emails set
            //if not, it adds it to audit table
            for ($i = 0; $i < sizeof($newEmails); ++$i) {
                $newEmail = $newEmails[$i];
                $prevEmail = $prevEmails[$i];
                if($prevEmail['email_address'] && trim($prevEmail['email_address']) != '') {
                    if($prevEmail['email_address'] != $newEmail->email_address) {
                        $id = $i + 1;
                        $guid = create_guid();
                        $now = $GLOBALS['timedate']->nowDb();
                        $insertAuditQuery = "INSERT INTO contacts_audit (id, parent_id, date_created, created_by, field_name, data_type, 
                            before_value_string, after_value_string) 
VALUES('{$guid}', '{$bean->id}', '{$now}', '{$bean->assigned_user_id}', 'email{$id}', 'varchar', \"{$prevEmail['email_address']}\", '{$newEmail->email_address}')";
                        $insertAuditResult = $db->query($insertAuditQuery);
                        if (!$insertAuditResult) {
                            $GLOBALS['log']->fatal("addEmailsToAudit: Contacts Logic Hook. Error adding audit row.");
                        }
                    }
                }
            }
        }
    }
}
