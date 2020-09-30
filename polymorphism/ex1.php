<?php

abstract class Animal
{
    public function speak()
    {
        return "Som";
    }

    public function move()
    {
        return "Anda";
    }
}

class Dog extends Animal
{
    public function speak()
    {
        return "Late";
    }
}

class Cat extends Animal
{
    public function speak()
    {
        return "Mia";
    }
}

class Bird extends Animal
{
    public function speak()
    {
        return "Canta";
    }

    public function move()
    {
        //Parent acessa o comportamento padrão da classe pai
        return "Voa  e " . parent::move();
    }
}

$pluto = new Dog();
echo $pluto->speak() . "<br/>";
echo $pluto->move() . "<br/>";

$garfield = new Cat();
echo $garfield->speak() . "<br/>";
echo $garfield->move() . "<br/>";

$bird = new Bird();
echo $bird->speak() . "<br/>";
echo $bird->move() . "<br/>";