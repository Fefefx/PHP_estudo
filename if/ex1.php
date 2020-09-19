<?php

$yourAge = 125;

$ageChildren = 12;
$ageTeenager = 18;
$ageOld = 65;

if($yourAge  < $ageChildren){
    echo "Criança";
} else if($yourAge < $ageTeenager) {
    echo "Adolescente";
} else if($yourAge < $ageOld){
    echo "Adulto";
}else{
    echo "Idoso";
}

echo "<br>";

echo ($yourAge < $ageTeenager)? "Menor de idade" : "Maior de idade"; 
?>