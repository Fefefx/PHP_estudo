<?php

class Car
{

    private $model;
    private $motor;
    private $year;

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getMotor(): float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        return $this->motor = $motor;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear($year)
    {
        return $this->year = $year;
    }

    public function show()
    {
        return array(
            "modelo" => $this->getModel(),
            "motor" => $this->getMotor(),
            "ano" => $this->getYear()
        );
    }
}

$gol = new Car();
$gol->setModel("Gol GT");
$gol->setMotor("1.6");
$gol->setYear("2017");

var_dump($gol->show());
