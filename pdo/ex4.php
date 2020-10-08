<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","root");

$stmt = $conn->prepare("UPDATE tb_users SET deslogin = :LOGIN, despassword = :PASSWORD WHERE userid = :ID");

$login = "João";
$password = "qwerty";
$id = 2;

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Registro atualizado com sucesso";