<?php

Class Car{
    // properties
    // public $name= "aaa";
    public $price = 1200;
    private $name;

    // methods`
    public function getName(){
       return $this->name;
    }

    public function getCarName($userName){//type function
        $this->name = $userName;
        return $this->name;
    }

    public function getCarPrice($userPrice){//void function
        $this->price = $userPrice;
        echo $this->price;
    }
}

$result = new Car();//Object create

// echo $result->name . "<br>";
// echo $result->price;

// $result->getAge("12");



// $carName = $result->getCarName("BMW");
// echo $carName;
// echo "<br>";

// $result->getCarPrice("$120000");
$result->getCarName("BMW");
$name = $result->getName();
echo $name;