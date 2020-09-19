<?php

//Tipos básicos
$name = "Hcode";
$site = 'www.hcode.com.br';

$year = 1990;
$salary = 5500.99;
$block = false;
///////////////////////


//Tipos compostos 
$fruits = array("pineapple", "orange", "manga");
//echo $fruits[2];

$birth = new DateTime();
//var_dump($birth);
///////////////////////

//Tipos especiais
$file = fopen("ex3.php","r");
//var_dump($file);

$nullVariable = null;
$emptyVariable = '';

?>