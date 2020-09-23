<?php

$dt = new DateTime();

//Cria um período de tempo
$period = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");
echo "<br>";

//Adiciona um período de tempo a data
$dt->add($period);

echo $dt->format("d/m/Y H:i:s");

?>