<?php

//Cria uma conexão com um banco de dados.
$conn = new mysqli("localhost","root","","dbphp7");

//Verifica a existência de um erro.
if($conn->connect_error){
    echo $conn->connect_error;
}

//Prepara uma query.
$stmt = $conn->prepare("INSERT INTO tb_users (deslogin, despassword) VALUES(?, ?)");

//Substitui as interrogações por valores.
//O primeiro parâmetra indica os tipos dos dados.
$stmt->bind_param("ss",$login,$pass);

$login = "user";
$pass = "12345";

//Executa a query
$stmt->execute();

$login = "root";
$pass = "!@#$";

$stmt->execute();