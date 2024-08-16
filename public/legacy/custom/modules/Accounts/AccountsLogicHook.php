<?php

/* * *
 * Class file which contains the Accounts module logichook functions.
 */

class AccountsLogicHook {

    public function autoIncrementB2BAccountNo($bean, $events, $args) {

        /*         * *
         * This function generates new account number for each new account created.
         * @LogicHook Before Save
         * @Objectives
         * 1. The account no. is incremented only when new account is created, it won't increment on edit.
         * 2. The b2baccountno is strictly of 6 character length
         * @Input
         * 1. An unsaved account bean
         * @Return
         * Function returns void
         */

        if ($bean->fetched_row != false)
            return;

        global $db;
        $offset = 1;
        $ret = $db->query("SELECT * FROM accounts WHERE b2b_account_no IS NOT NULL AND b2b_account_no <> '' ORDER BY date_entered DESC LIMIT 1");
        if ($ret->num_rows > 0) {
            $row = $db->fetchByAssoc($ret);
            if (trim($row['b2b_account_no']) !== '') {
                $lastAccountNo = intval($row['b2b_account_no']);
                $bean->b2b_account_no = strval($lastAccountNo + $offset);
                $accountNo = $bean->b2b_account_no;
                if (intval($accountNo) < 1000000) {
                    $nonSignificantZeros = 6 - strlen($accountNo);
                    $accountNoPadded = str_pad($accountNo, $nonSignificantZeros + strlen($accountNo), "0", STR_PAD_LEFT);
                    $bean->b2b_account_no = $accountNoPadded;
                }
                return;
            }
        }

        global $sugar_config;
        $bean->b2b_account_no = $sugar_config['ACCOUNTS_INITIAL_TOKEN'];
    }

    public function setSyncFlag($bean, $events, $args) {
        /*         * *
         * This function sets the readToSync flag when a new account is created or updated
         * @LogicHook Before Save
         * @Condition
         * The save has not occurred in scheduler (fromScheduler flag is unset)
         * @Objectives
         * 1. Set the ready_to_sync flag equal to 1 when an account is created
         * 2. Set the ready_to_sync flag equal to 2 when an account is updated
         * @Input
         * 1. An unsaved account bean
         * @Returns
         * Function returns void
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

//    public function isRecordCreatedOrUpdated($bean, $events, $args) {
//        // Check if it's a new or existing record
//        if ($bean->fetched_row == false) {
//            $bean->is_update_dup = 0;
//        } else {
//            $bean->is_update_dup = 1;
//        }
//    }

    public function relatePromotedAccount($bean, $events, $args) {
        /*         * *
         * Makes sure the promoted account is linked to the original profile
         * 1. Checks if the return module and return ID is set
         * 2. Checks if the return module is CB2B_PMSProfiles
         * 3. Check if any account is already related
         * 4. If not, then relate the profile
         */

        $return_module = $_REQUEST['return_module'];
        $return_id = $_REQUEST['return_id'];
        if ($return_module && $return_id && strtolower($return_module) === "cb2b_pmsprofiles") {
            if (!$bean->accounts_cb2b_pmsprofiles_1accounts_ida || trim($bean->accounts_cb2b_pmsprofiles_1accounts_ida) == "") {
                $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $return_id);
                $bean->load_relationship('accounts_cb2b_pmsprofiles_1');
                $bean->accounts_cb2b_pmsprofiles_1->add($profileBean);
            }
        }
    }

    public function unsetAccount($bean, $events, $args) {
        /*         * *
         * Set ready_to_sync flag for account and/or contact
         * @Objectives:
         * 1. Set the ready_to_sync flag for account
         * 2. Set the ready_to_sync flag for contact on the basis of conditions
         * @Conditions
         * 1. The account must be related to a contact
         * 2. The contact must not be deleted
         * 3. The contact's ready_to_sync flag must not be 3
         * @Flags
         * Account's ready_to_sync = 3
         * Contact's ready_to_sync = 0 | 4
         */

        $bean->load_relationship('contacts');
        $contacts = $bean->contacts->getBeans();
        foreach ($contacts as $contact) {
            if ($contact->deleted == 1 || $contact->ready_to_sync == 3) {
                continue;
            }
            $contact->ready_to_sync = 4;
            $contact->skipBeforeSave = true;
            $contact->save();
        }

        $bean->ready_to_sync = 3;
        $bean->last_sync_date = $bean->fetched_row['last_sync_date'];
        $bean->skipBeforeSave = true;
        $bean->save();
    }

    public function processWebsiteField($bean, $events, $args) {
        /*         * *
         * @Objectives:
         * 1. Add the http:// or https:// prefix to a valid URL in website field
         * @Conditions
         * 1. The input URL must be valid without http:// or https://
         */

        if (!preg_match("~^(?:f|ht)tps?://~i", $bean->website)) {
            $bean->website = "http://" . $bean->website;
        } else {
            $pattern = "~^(http|https)://~i";
            if (!preg_match($pattern, $bean->website)) {
                $bean->website = preg_replace($pattern, "http://", $bean->website);
            }
        }
    }

}



