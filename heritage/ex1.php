<?php

class Document
{
    private $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }
}

class CPF extends Document
{

    public function validate(): bool
    {
        $numberCPF = $this->getNumber();
        //Validação do CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumber("111222333-44");
var_dump($doc->validate());
echo "<br/>" . $doc->getNumber();
