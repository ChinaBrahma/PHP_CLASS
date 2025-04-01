<?php
class Car {
    public $model;
    public $color;

    // Constructor function
    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    // Method to display car details
    public function displayCar() {
        echo "Car Model: " . $this->model . "<br>";
        echo "Car Color: " . $this->color . "<br>\n";
    }
}

// Creating an object of the Car class
$myCar = new Car("Toyota", "Red");

// Displaying car details
$myCar->displayCar();
?>
