<?php

require_once('config.php');

$sql = new Sql(MYSQLDBNAME, MYSQLPASSWORD);

$users = $sql->select("SELECT * FROM tb_users ORDER BY deslogin;");

$headers = array();

foreach ($users[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("users.csv", "w+");

//Une os elementos de um array usando de um separador
fwrite($file, implode(",", $headers) . "\r\n");

//For each de linha
foreach ($users as $row) {
    $data = array();
    //For each de coluna
    foreach ($row as $key => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(",",$data) . "\r\n");
}

fclose($file);
