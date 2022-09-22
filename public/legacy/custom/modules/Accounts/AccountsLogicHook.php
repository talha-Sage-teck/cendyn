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
        $ret = $db->query("SELECT * FROM accounts WHERE b2baccountno IS NOT NULL AND b2baccountno <> '' ORDER BY date_entered DESC LIMIT 1");
        if($ret->num_rows > 0) {
            $row = $db->fetchByAssoc($ret);
            if(trim($row['b2baccountno']) !== '') {
                $lastAccountNo = intval($row['b2baccountno']);
                $bean->b2baccountno = strval($lastAccountNo + $offset);
                $accountNo = $bean->b2baccountno;
                if(intval($accountNo) < 1000000) {
                    $nonSignificantZeros = 6 - strlen($accountNo);
                    $accountNoPadded = str_pad($accountNo, $nonSignificantZeros + strlen($accountNo), "0", STR_PAD_LEFT);
                    $bean->b2baccountno = $accountNoPadded;
                }
                return;
            }
        }

        global $sugar_config;
        $bean->b2baccountno = $sugar_config['ACCOUNTS_INITIAL_TOKEN'];
    }
}