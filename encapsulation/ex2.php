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

class Programmer extends People
{
    public function showData()
    {
        echo get_class($this) . "<br/>";
        echo $this->name . "<br/>";
        echo $this->age . "<br/>";
        echo $this->password . "<br/>";
    }
}

$object = new Programmer();
//echo $object->password . "<br/>";

$object->showData();
