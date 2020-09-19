<?php

/*
$birthYear = 1990;
$fullName = "Tony Brando";
*/

//Na linha de baixo temos uma variável com número no nome
$name1 = "João";
$lastName = "Rangel";

//Não são permitidos caracteres especiais exceto (_) e números só são permitidos no final
//Cuidado com nomes reservados

//Concatena os valores
$fullName = $name1 . " ". $lastName;
echo $fullName;

//Para a execução do PHP 
exit;

//Limpa o conteúdo de uma variável
//unset($name1);

//Verifica se a variável existe
if(isset($name1)){
    echo $name1;
}

?>