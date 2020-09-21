<?php

$people = array(
    'name' => 'João',
    'age' => 20
);

foreach($people as &$value){
    if(gettype($value) === 'integer') $value += 10;
    echo $value . "<br>";
}

print_r($people);

?>