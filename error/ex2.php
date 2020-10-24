<?php

//Mostra todos os erros e nega a exibição das notices
error_reporting(E_ALL & ~E_NOTICE);

$name = $_GET["name"];
echo $name;