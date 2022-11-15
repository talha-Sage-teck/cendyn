<?php

/***
 * Class file which contains the Accounts module logichook functions.
 */

class AccountsLogicHook {

    public function autoIncrementB2BAccountNo($bean, $events, $args) {

        /***
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

        if($bean->fetched_row != false)
            return;

        global $db;
        $offset = 1;
        $ret = $db->query("SELECT * FROM accounts WHERE b2b_account_no IS NOT NULL AND b2b_account_no <> '' ORDER BY date_entered DESC LIMIT 1");
        if($ret->num_rows > 0) {
            $row = $db->fetchByAssoc($ret);
            if(trim($row['b2b_account_no']) !== '') {
                $lastAccountNo = intval($row['b2b_account_no']);
                $bean->b2b_account_no = strval($lastAccountNo + $offset);
                $accountNo = $bean->b2b_account_no;
                if(intval($accountNo) < 1000000) {
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
        /***
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

        if(!$bean->fromScheduler) {
            if($bean->fetched_row != false) {
                $bean->ready_to_sync = 2;
                return;
            }
            $bean->ready_to_sync = 1;
        }
    }
}
