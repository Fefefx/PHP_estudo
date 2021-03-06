<?php

//Cria uma conexão com o banco de dados usando de PDO
$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "root");

$smtp = $conn->prepare("SELECT * FROM tb_users ORDER BY deslogin");

$smtp->execute();

//Captura os dados do banco e usa da constante para associar os nomes da colunas aos valores
$results = $smtp->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>" . $key . ": </strong> ". $value . "<br/>";
    }
    echo "======================= <br/>";
}