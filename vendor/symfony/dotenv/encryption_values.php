<?php
require_once ('encryption_script.php');


//DB credentials that are stored inside config.php
$dbconfig_encryption="";

//The DB url that is contained inside .env.local
$DBurl_encryption="";

global $dbconfig_decrypted,$DBurl_decrypted;
require_once __DIR__ . '../../../../public/legacy/config_override.php';

//Encryption Key
$encryptionKey = $sugar_config['unique_key'];

//Decrypted Outputs
$dbconfig_decrypted=decryptDbConfig($dbconfig_encryption , $encryptionKey);


$DBurl_decrypted=decryptDbConfig($DBurl_encryption , $encryptionKey);

