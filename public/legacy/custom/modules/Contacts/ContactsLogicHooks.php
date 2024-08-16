<?php

class ContactsLogicHooks {

    public function setSyncFlag($bean, $events, $args) {
        /*         * *
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
         * 
         */
        if (!$bean->skipBeforeSave) {

            if ($bean->fetched_row != false && ($bean->fetched_row['last_sync_date'] != '' && !is_null($bean->fetched_row['last_sync_date']))) {
                $bean->ready_to_sync = 2;
                $bean->last_sync_date = $bean->fetched_row['last_sync_date'];
                return;
            }
            $bean->ready_to_sync = 1;
        }
        

    }
    

    
    public function beforeDelete($bean, $events, $args) {
        /*         * *
         * This function sets the readToSync flag before a contact is deleted
         * @LogicHook Before Delete
         * @Objectives
         * 1. Set the ready_to_sync flag equal to 3 when a contact is deleted
         * @Input
         * 1. An unsaved contact bean
         * @Returns
         * Function returns void
         */
        // This check is added to make sure if the record is already synced then we delete it from eInsight 
        // If the record is not already synced then there is no need to make the delete API Call.
        if ($bean->last_sync_date != '' && !is_null($bean->last_sync_date)) {
            $bean->ready_to_sync = 3;
            $bean->last_sync_date = $bean->fetched_row['last_sync_date'];
        } else {
            $bean->ready_to_sync = 0;
        }
        $bean->skipBeforeSave = true;
        $bean->save();
    }

    private function updateEmailRow($email, $donotemail, $donotemail_date, $donotemail_source) {
        global $db;
        $email_caps = trim(strtoupper($email));
        $findQ = "SELECT * FROM email_addresses WHERE email_address_caps='$email_caps' AND deleted = 0";
        $result = $db->query($findQ);
        if ($result->num_rows > 0) {
            $updateQ = "UPDATE email_addresses SET `donotemail`='$donotemail', `donotemail_date`='$donotemail_date', `donotemail_source`='$donotemail_source' WHERE email_address_caps='$email_caps'";
            if (!$db->query($updateQ)) {
                $GLOBALS['log']->fatal("Error updating email flags for email: $email");
            }
        }
    }

    public function populateImportedEmails($bean, $events, $args) {
        /**
         * For primary emails there is no prefix, for all other emails; property is followed by email number/prefix
         */
        if ($bean->in_import) {
            $donotemail = $bean->donotemail;
            $donotemail_date = $bean->donotemail_date;
            $donotemail_source = $bean->donotemail_source;
            $this->updateEmailRow($bean->email1, $donotemail, $donotemail_date, $donotemail_source);
            for ($i = 2; $i <= 10; $i++) {
                $email = 'email' . $i;
                if (isset($bean->$email) && !empty($bean->$email)) {
                    $dne = $email . '_donotemail';
                    $dne_date = $email . '_donotemail_date';
                    $dne_source = $email . '_donotemail_source';
                    $donotemail = (isset($bean->$dne)) ? $bean->$dne : 0;
                    $donotemail_date = (isset($bean->$dne_date)) ? $bean->$dne_date : null;
                    $donotemail_source = (isset($bean->$dne_source)) ? $bean->$dne_source : null;
                    $this->updateEmailRow($bean->$email, $donotemail, $donotemail_date, $donotemail_source);
                }
            }
        }
    }

    private function makeStringFromEmailsArray($emails): string {
        $str = "";
        $emails = (array) $emails;

        foreach ($emails as $email) {
            if (trim($str) !== "")
                $str .= ", ";

            $email = (array) $email;
            $str .= $email['email_address'];
            $flags = implode(' | ', array_filter(array(
                (intval($email['primary_address']) === 1 || $email['primary_address'] == "true") ? 'Primary' : '',
                (intval($email['opt_out']) === 1 || $email['opt_out'] == "true") ? 'Opt Out' : '',
                (intval($email['invalid_email']) === 1 || $email['invalid_email'] == "true") ? 'Invalid' : '',
                            ), 'strlen'));

            if (trim($flags) !== '')
                $str .= " (" . $flags . ")";
        }
        return $str;
    }

    public function addEmailsToAudit($bean, $events, $args) {
        /*         * *
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
        $newEmails = array();
        $keptEmails = array();
        $deletedEmails = array();
        $emails = $bean->line_item_entries['email_addresses'];
        $isChange = false;

        if ($emails && sizeof($emails) > 0) {

            //separate new emails with kept emails from previous set of emails, also
            foreach ($emails as $email) {
                if ($email->deleted === 0)
                    $newEmails[] = $email;
                else if ($email->deleted === 1)
                    $deletedEmails[] = $email;
                else
                    $keptEmails[] = $email;
            }

            $newSet = array_merge($keptEmails, $newEmails);
            $prevSet = $bean->emailAddress->addresses;

            //if there are no new or deleted emails, then we only need to check if config is same too
            if (sizeof($newEmails) == 0 && sizeof($deletedEmails) == 0) {
                for ($i = 0; $i < sizeof($newSet); ++$i) {
                    $newEmail = (array) $newSet[$i];
                    $prevEmail = (array) $prevSet[$i];
                    if ($newEmail['email_address'] == $prevEmail['email_address'] &&
                            intval(filter_var($newEmail['primary_address'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['primary_address'], FILTER_VALIDATE_BOOLEAN)) &&
                            intval(filter_var($newEmail['opt_out'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['opt_out'], FILTER_VALIDATE_BOOLEAN)) &&
                            intval(filter_var($newEmail['invalid_email'], FILTER_VALIDATE_BOOLEAN)) == intval(filter_var($prevEmail['invalid_email'], FILTER_VALIDATE_BOOLEAN))
                    )
                        continue;
                    $isChange = true;
                    break;
                }
            } else
                $isChange = true;

            if ($isChange) {
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
