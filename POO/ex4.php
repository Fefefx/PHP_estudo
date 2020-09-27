<?php

class Address
{
    private $street;
    private $number;
    private $city;

    public function __construct($a, $b, $c)
    {
        $this->street = $a;
        $this->number = $b;
        $this->city = $c;
    }

    //Código executado quando a classe é destruída
    public function __destuct()
    {
        var_dump("DESTRUIR");
    }

    public function __toString(): string
    {
        return $this->street . ", " . $this->number . " - " . $this->city;
    }

    public function getStreet() 
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

}

$myAddress = new Address("Rua Ademar Saraiva Leão","123","Santos");
//var_dump($myAddress);
//unset($myAddress);
//Invoca o método mágico __toString
echo $myAddress;

?>