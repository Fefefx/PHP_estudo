<?php

$people = array();

//Insere elementos no Array
array_push($people, array(
    'nome'=>'João',
    'idade'=>20
));

array_push($people, array(
    'nome'=>'Glaucio',
    'idade'=>25
));

//Transforma o Array em JSON
echo json_encode($people);


?>