<?php

/**
 * Overridden account_type vardefs to make the field a dynamic enum depending on the accountbasetype field
 */

$dictionary["Account"]["fields"]["account_type"]["required"] = true;
$dictionary["Account"]["fields"]["account_type"]["type"] = "dynamicenum";
$dictionary["Account"]["fields"]["account_type"]["options"] = "override_account_type_list";
$dictionary["Account"]["fields"]["account_type"]["dbType"] = "enum";
$dictionary["Account"]["fields"]["account_type"]["audited"] = true;
$dictionary["Account"]["fields"]["account_type"]["parentenum"] = "accountbasetype";
$dictionary["Account"]["fields"]["account_type"]["dynamic"] = true;
$dictionary["Account"]["fields"]["accountbasetype"]["parentenum"] = "account_type";