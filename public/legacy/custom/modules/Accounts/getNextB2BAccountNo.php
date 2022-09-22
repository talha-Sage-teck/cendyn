<?php
    /***
     * EntryPoint to be called via AJAX to load next potential B2BAccountNo in accounts RecordView.
     * @Objectives
     * 1. Strictly follow the standard 6 digit length for numbers smaller than 1,000,000
     * 2. Never return empty value
     * @Input
     * No inputs
     * @Output
     * A valid 6 or more digit number
     */

    global $db;
    $offset = 1;
    $ret = $db->query("SELECT * FROM accounts WHERE b2baccountno IS NOT NULL AND b2baccountno <> '' ORDER BY date_entered DESC LIMIT 1");
    if($ret->num_rows > 0) {
        $row = $db->fetchByAssoc($ret);
        if(trim($row['b2baccountno']) !== '') {
            $lastAccountNo = intval($row['b2baccountno']);
            $accountNo = strval($lastAccountNo + $offset);
            if(intval($accountNo) < 1000000) {
                $nonSignificantZeros = 6 - strlen($accountNo);
                $accountNo = str_pad($accountNo, $nonSignificantZeros + strlen($accountNo), "0", STR_PAD_LEFT);
            }
            echo $accountNo;
        }
        else {
            global $sugar_config;
            echo $sugar_config['ACCOUNTS_INITIAL_TOKEN'];
        }
    }
    else {
        global $sugar_config;
        echo $sugar_config['ACCOUNTS_INITIAL_TOKEN'];
    }