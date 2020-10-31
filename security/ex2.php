<?php

$id = (isset($_GET["id"])) ? $_GET["id"] : 3;

if (!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos você !");
}

$conn = mysqli_connect("127.0.0.1", "root", "root", "dbphp7");

$sql = "SELECT * FROM tb_users WHERE userId = $id";

$exec = mysqli_query($conn, $sql);

while ($result = mysqli_fetch_object($exec)) {
    var_dump($result);
}
