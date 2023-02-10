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

    private function makeStringFromEmailsArray($emails): string {
        $str = "";
        $emails = (array) $emails;

        foreach ($emails as $email) {
            if(trim($str) !== "")
                $str .= ", ";

            $email = (array) $email;
            $str .= $email['email_address'];
            $flags = implode(' | ', array_filter(array(
                (intval($email['primary_address']) === 1 || $email['primary_address'] == "true") ? 'Primary' : '',
                (intval($email['opt_out']) === 1 || $email['opt_out'] == "true") ? 'Opt Out' : '',
                (intval($email['invalid_email']) === 1 || $email['invalid_email'] == "true") ? 'Invalid' : '',
            ), 'strlen'));

            if(trim($flags) !== '')
                $str .= " (" . $flags . ")";
        }
        return $str;
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
        $newEmails = array ();
        $keptEmails = array ();
        $deletedEmails = array ();
        $emails = $bean->line_item_entries['email_addresses'];
        $isChange = false;

        if($emails && sizeof($emails) > 0) {

            //separate new emails with kept emails from previous set of emails, also
            foreach ($emails as $email) {
                if($email->deleted === 0)
                    $newEmails[] = $email;
                else if($email->deleted === 1)
                    $deletedEmails[] = $email;
                else
                    $keptEmails[] = $email;
            }

            $newSet = array_merge($keptEmails, $newEmails);
            $prevSet = $bean->emailAddress->addresses;

            //if there are no new or deleted emails, then we only need to check if config is same too
            if(sizeof($newEmails) == 0 && sizeof($deletedEmails) == 0) {
                for($i = 0; $i < sizeof($newSet); ++$i) {
                    $newEmail = (array) $newSet[$i];
                    $prevEmail = (array) $prevSet[$i];
                    if($newEmail['email_address'] == $prevEmail['email_address'] &&
                        intval(filter_var($newEmail['primary_address'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['primary_address'], FILTER_VALIDATE_BOOLEAN)) &&
                        intval(filter_var($newEmail['opt_out'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['opt_out'], FILTER_VALIDATE_BOOLEAN)) &&
                        intval(filter_var($newEmail['invalid_email'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['invalid_email'], FILTER_VALIDATE_BOOLEAN))
                    )
                        continue;
                    $isChange = true;
                    break;
                }
            }
            else
                $isChange = true;

            if($isChange) {
                $beforeValue = $this->makeStringFromEmailsArray($prevSet);
                $afterValue = $this->makeStringFromEmailsArray($newSet);
                $guid = create_guid();
                $now = $GLOBALS['timedate']->nowDb();
                $insertAuditQuery = "INSERT INTO contacts_audit (id, parent_id, date_created, created_by, field_name, data_type, 
                            before_value_string, after_value_string) 
VALUES('{$guid}', '{$bean->id}', '{$now}', '{$bean->assigned_user_id}', 'email1', 'varchar', '{$beforeValue}', '{$afterValue}')";
                $insertAuditResult = $db->query($insertAuditQuery);
                if (!$insertAuditResult) {
                    $GLOBALS['log']->debug("addEmailsToAudit: Contacts Logic Hook. Error adding audit row.");
                }
            }
        }
    }
}
