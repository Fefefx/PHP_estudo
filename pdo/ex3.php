<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","root");

$stmt = $conn->prepare("INSERT INTO tb_users(deslogin, despassword) VALUES(:LOGIN,:PASSWORD);");

$login = "José";
$password = "1234567890";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "Inserido OK !";