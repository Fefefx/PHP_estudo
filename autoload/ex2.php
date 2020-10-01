<?php

function includeClass($className)
{
    //Verifica se um arquivo existe
    if (file_exists($className . ".php")) {
        require_once($className . ".php");
    }
}

//Registra várias funções de Autoload
spl_autoload_register("includeClass");
spl_autoload_register(function ($className) {
    if (file_exists("abstract" . DIRECTORY_SEPARATOR . $className . ".php")) {
        require_once("abstract" . DIRECTORY_SEPARATOR . $className . ".php");
    }
});

$car = new DelRey();
$car->accelerate(80);
