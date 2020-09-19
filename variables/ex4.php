<?php

//Recupera o query param a com o tipo String e converte-o para o tipo inteiro.
$name = (int) $_GET["a"];
//var_dump($name);

//Recupera o IP do usuário
//$ip = $_SERVER["REMOTE_ADDR"];

//Recupera o nome do script PHP
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>