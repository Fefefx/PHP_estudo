<?php

$a = 10;

//& indica passagem de parâmetro por referência
function exchangeValue(&$b){
    $b += 50;
    return $b;
}

echo exchangeValue($a);
echo "<br>";
echo exchangeValue($a);
echo "<br>";
echo $a;

?>