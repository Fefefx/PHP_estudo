<?php

require_once("config.php");

//Utiliza a classe Cadastre do Namespace 
use Client\Cadastre;

$register = new Cadastre();

$register->setName("Djalma Sindeaux");
$register->setEmail("djalma@hcode.com.br");
$register->setPassword("123456");

echo $register->registerSale();