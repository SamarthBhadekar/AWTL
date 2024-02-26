<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>PHP Car Example</title>
<style>
  .car-info {
    font-family: Arial, sans-serif;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .car-info h2 {
    margin-top: 0;
    color: #333;
  }
</style>
</head>
<body>
<?php
// Define a basic class 'Car'
class Car {
    public $brand;
    public $color;

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
        echo "<div class='car-info'><h2>A new $this->color $this->brand car created.</h2></div>";
    }

    // Method to display car information
    public function displayInfo(){
        echo "<div class='car-info'><p>This is a $this->color $this->brand.</p></div>";
    }

    // Destructor
    public function __destruct() {
        echo "<div class='car-info'><p>The $this->color $this->brand car is being destroyed.</p></div>";
    }
}

// Inheriting class 'Car' into 'SportsCar'
class SportsCar extends Car {
    public $speed;

    // Constructor Overloading within inherited class
    public function __construct($brand, $color, $speed) {
        parent::__construct($brand, $color);
        $this->speed = $speed;
    }

    // Method Overriding
    public function displayInfo(){
        echo "<div class='car-info'><p>This is a $this->color $this->brand and can speed up to $this->speed mph.</p></div>";
    }
}

// Creating objects from the classes
$car1 = new Car("Toyota", "red");
$car1->displayInfo();

$sportsCar1 = new SportsCar("Ferrari", "red", 200);
$sportsCar1->displayInfo();
?>
</body>
</html>
