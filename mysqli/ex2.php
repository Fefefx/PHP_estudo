<?php

//Cria uma conexão com um banco de dados.
$conn = new mysqli("localhost", "root", "", "dbphp7");

//Verifica a existência de um erro.
if ($conn->connect_error) {
    echo $conn->connect_error;
}

//Cria uma consulta com o banco de dados
$result = $conn->query("SELECT * FROM tb_users ORDER BY deslogin");

$data = array();

//Enquanto houver dados no banco de dados atribui os valores a variável row
//MYSQLI_ASSOC define as chaves do array de dados como sendo as colunas do banco de dados
while ($row = $result->fetch_assoc()) {
    array_push($data, $row);
    //var_dump($row);
};

echo json_encode($data);

