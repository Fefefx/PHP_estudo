<?php

class People
{
    public $name = "Rasmus Lerdorf";
    protected $age = 48;
    private $password = "123456";

    public function showData()
    {
        echo $this->name . "<br/>";
        echo $this->age . "<br/>";
        echo $this->password . "<br/>";
    }
}

$object = new People();
//echo $object->password . "<br/>";

$object->showData();