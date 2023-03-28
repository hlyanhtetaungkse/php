<?php
class Animal{
    public $name;
    public $color;

    public function __construct($animalName = "default", $animalColor = "default"){
        $this->name = $animalName;
        $this->color = $animalColor;
    }

    public function sleep(){
        echo "Good Night";
    }
}

$animal = new Animal("shwe war","yellow");

echo $animal->name;
echo $animal->color;
$animal->sleep();

class Dog extends Animal
{
    public function greeting(){
        echo "Hello Dog";
    }
}

$dog = new Dog("bo phyu","white");

$dog->greeting();
echo $dog->color;
$dog->sleep();