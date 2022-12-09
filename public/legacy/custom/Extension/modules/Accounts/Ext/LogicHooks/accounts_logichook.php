<?php

/* * *
 * This file defines the functions to be executed according the hook specified.
 * Hook Class: custom/modules/Accounts/AccountsLogicHook.php
 */

$hook_version = 1;
$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(
    70,
    'Autoincrement the account no field by 1 for every new account created',
    'custom/modules/Accounts/AccountsLogicHook.php',
    'AccountsLogicHook',
    'autoIncrementB2BAccountNo'
);

$hook_array['before_save'][] = Array(
    77,
    'Set the Ready to Sync flag for each created/updated account',
    'custom/modules/Accounts/AccountsLogicHook.php',
    'AccountsLogicHook',
    'setSyncFlag'
);

$hook_array['before_save'][] = Array(
    10,
    'Make sure the promoted account is related to the original profile',
    'custom/modules/Accounts/AccountsLogicHook.php',
    'AccountsLogicHook',
    'relatePromotedAccount'
);
