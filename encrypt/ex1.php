<?php

$data = [
    "name" => "Hcode"
];

/**
 * Define a constante SECRET
 * transformando a string 
 * senha em uma cadeia
 * de 16 caracteres.
 */
define("SECRET", pack("a16", "senha"));

//Função removida após o PHP 7.2
$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);

$final = base64_encode($mcrypt);

var_dump($final);

$string = mcrypt_decrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    base64_decode($final),
    MCRYPT_MODE_ECB
);

var_dump(json_decode($string, true));
