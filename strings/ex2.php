<?php

$name = "joao rangel";
//Coloca o texto em maiúsculo 
$name = strtoupper($name);

echo $name;

//Deixa o texto com letras minúsculas
$name = strtolower($name);

echo "<br>";

echo $name;

echo "<br>";

//Deixa a primeira letra de cada palavra da String em maiúsculo
//echo ucwords($name);

//Deixa a primeira letra da String em maiúsculo
echo ucfirst($name);

?>