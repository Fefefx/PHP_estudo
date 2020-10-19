<?php

$name = "images";

//Verifica se o diretório existe
if(!is_dir($name)){
    //cria um diretório
    mkdir($name);
    echo "Diretório $name criado com sucesso!";
}else{
    //remove um diretório
    rmdir($name);
    echo "Já existe o diretório: $name foi removido.";
}