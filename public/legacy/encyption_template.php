<?php
//Use this for encypting the data and then pasting it in encyption_value.php

//Encrypts given data with specified key
function encryptDbConfig($data, $key) {

    $encodedData = json_encode($data);
    $ivLength = openssl_cipher_iv_length('AES-256-CBC');
    $iv = openssl_random_pseudo_bytes($ivLength);
    $encrypted = openssl_encrypt($encodedData, 'AES-256-CBC', $key, 0, $iv);

    return base64_encode($iv . $encrypted);

}

require_once 'config_override.php';

$encryptionKey = $sugar_config['unique_key'];

//Can be of any type: string, array, integer etc.....
$value_to_be_encrypted="";

$encyption=encryptDbConfig($value_to_be_encrypted,$encryptionKey);


printf("This is your encrypted value: %s \n" ,$encyption);

