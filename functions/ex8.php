<?php

/*Recebe uma quantidade indefinida de parâmetros de ponto flutuante
  e armazena-os no array $values. Converte o tipo de retorno para ponto
  flutuante.*/
function sum(float ...$values): float{
    //Retorna a soma de todos os valores do array
    return array_sum($values);
}

var_dump(sum(2,2));
echo "<br>";
echo sum(25, 33);
echo "<br>";
//Converte os valores para inteiro
echo sum(1.5, 3.2);
echo "<br>";

?>