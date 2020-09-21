<?php
 
function hello(){
    //Recupera todos os valores que fazem parte do Array
    $arguments = func_get_args();
    return $arguments;
}

var_dump(hello("Good Morning",10));


?>