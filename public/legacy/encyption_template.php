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


//Decrypts using given key
function decryptDbConfig($encryptedData, $key) {

    $data = base64_decode($encryptedData);

    $ivLength = openssl_cipher_iv_length('AES-256-CBC');

    $iv = substr($data, 0, $ivLength);

    $encrypted = substr($data, $ivLength);

    $decrypted = openssl_decrypt($encrypted, 'AES-256-CBC', $key, 0, $iv);

    return json_decode($decrypted, true);

}


$encryptionKey = 'ad7b94838eed72a88c0d177b053188c8';

//Can be of any type: string, array, integer etc.....
$value_to_be_encrypted="";

$encyption=encryptDbConfig($value_to_be_encrypted,$encryptionKey);


printf("This is your encrypted value: %s \n" ,$encyption);

