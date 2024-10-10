<?php
require_once ('encryption_script.php');

$encryptionKey = 'your_strong_encryption_key_here';

global $dbconfig_decrypted,$DBurl_decrypted;

//DB credentials that are stored inside config.php
$dbconfig_encryption="";

//The DB url that is contained inside .env.local
$DBurl_encryption="";

//Decrypted Outputs
$dbconfig_decrypted=decryptDbConfig($dbconfig_encryption , $encryptionKey);

$DBurl_decrypted=decryptDbConfig($DBurl_encryption , $encryptionKey);
