<?php

interface Vehicle
{
    public function accelerate($speed);
    public function brake($speed);
    public function changeGear($march);
}

class Civic implements Vehicle
{
    public function accelerate($speed)
    {
        echo "O Veículo acelerou até " . $speed . " km/h <br/>";
    }

    public function brake($speed)
    {
        echo "O Veículo frenou até " . $speed . " km/h <br/>";
    }

    public function changeGear($march)
    {
        echo "O Veículo engatou a marcha " . $march . " <br/>";
    }
}

$car = new Civic();
$car->changeGear(1);