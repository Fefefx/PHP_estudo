<?php

class People
{
    //Atributo
    public $name;
    //Método
    public function speak(){
        return "O meu nome é ".$this->name;
    }
}

$glaucio = new People();

$glaucio->name = "Glaucio Daniel";

echo $glaucio->speak();
