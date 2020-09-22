<?php

/*Recebe uma quantidade indefinida de parâmetros inteiros
  e armazena-os no array $values.*/
function sum(int ...$values){
    //Retorna a soma de todos os valores do array
    return array_sum($values);
}

echo sum(2,2);
echo "<br>";
echo sum(25, 33);
echo "<br>";
//Converte os valores para inteiro
echo sum(1.5, 3.2);
echo "<br>";

?>