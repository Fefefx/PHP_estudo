<?php

$name = "Glaucio";

function test(){
    //Ouve a variável global name
    global $name;
    echo $name;
}

function test2(){
    $name = "João";
    echo $name . " agora no teste2";
}

test();
test2();

?>