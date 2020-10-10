<?php

require_once("config.php");


$user = new User();

//Carrega um usuário
/*
$user->loadById(4);
echo $user;
*/

//Lista todos os usuários da tabela
/*
$list = $user->getList();
echo json_encode($list);
*/

//Carrega uma lista de usuários buscando pelo login
/*
$search = $user->search("Par");
echo json_encode($search);
*/

//Carrega um usuário usando login e senha 
$user->login("José Pardim","1234567890");
echo $user;