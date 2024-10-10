<?php
//Utility Functions for Encryption and Decryption

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

/*
    Output of the Encryption function should be placed respectively inside encryption_values.php


*/