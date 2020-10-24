<?php

function error_handler($code, $message, $file, $line)
{
    echo json_encode(array(
        "code" => $code,
        "message" => $message,
        "line" => $line,
        "file" => $file
    ));
}

//Define a função que tratará o cabeçalho de erros
//Recebe como parâmetro o nome da função e não a função em si
set_error_handler("error_handler");

echo 100/0;
