<?php

function hello($text = "World", $period = "Good Morning !"){
    return "Hello $text! $period<br>";
}

echo hello();
echo hello("","");
echo hello("Glaucio","Good Afternoon !");
echo hello("João","Good evening !");

?>