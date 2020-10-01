<?php

//Essa função foi depreciada a partir do PHP 7.2 

function __autoload($className)
{
    var_dump($className);
    require_once("$className.php");
}

$car = new DelRey();
$car->accelerate(80);