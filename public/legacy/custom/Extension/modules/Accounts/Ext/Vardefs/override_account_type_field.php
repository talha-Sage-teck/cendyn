<?php

/**
 * Overridden account_type vardefs to make the field a dynamic enum depending on the accountbasetype field
 */
$dictionary["Account"]["fields"]["account_type"]["required"] = true;
$dictionary["Account"]["fields"]["account_type"]["type"] = "dynamicenum";
$dictionary["Account"]["fields"]["account_type"]["options"] = "override_account_type_list";
$dictionary["Account"]["fields"]["account_type"]["dbType"] = "enum";
$dictionary["Account"]["fields"]["account_type"]["audited"] = false;
$dictionary["Account"]["fields"]["account_type"]["parentenum"] = "account_base_type";
$dictionary["Account"]["fields"]["account_type"]["dynamic"] = true;
