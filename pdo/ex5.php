<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","root");

$stmt = $conn->prepare("DELETE FROM tb_users WHERE userid = :ID;");

$id = 1;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Registro excluído com sucesso !";