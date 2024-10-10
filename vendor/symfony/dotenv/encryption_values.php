<?php
require_once ('encryption_script.php');


$encryptionKey = 'ad7b94838eed72a88c0d177b053188c8';

global $dbconfig_decrypted,$DBurl_decrypted;

//DB credentials that are stored inside config.php
$dbconfig_encryption="";

//The DB url that is contained inside .env.local
$DBurl_encryption="";

//Decrypted Outputs
$dbconfig_decrypted=decryptDbConfig($dbconfig_encryption , $encryptionKey);

$DBurl_decrypted=decryptDbConfig($DBurl_encryption , $encryptionKey);
