<?php

$phrase = "A repetição é mãe da retenção.";
$word = "mãe";
//Recupera a posição de início de um conteúdo na String
$q = strpos($phrase, $word);
//Fatia uma string
$text = substr($phrase, 0, $q);
var_dump($text);
//Strlen retorna a quantidade de letras da String
$text2 = substr($phrase, $q + strlen($word), strlen($phrase));
echo "<br>";
var_dump($text2);

?>