<?php

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1","root","root");

//Abre uma transação
$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_users WHERE userid = ?;");

$id = 2;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "Registro excluído com sucesso !";