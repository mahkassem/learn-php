<?php
trait Drivable
{
  public $fuel;
  public function drive()
  {
    echo 'Driving...';
  }
}

class Car
{
  use Drivable;
  public $color;
  public $backStorage;
  public readonly string $model;

  public function __construct($model)
  {
    $this->model = $model;
  }
}

class Motorcycle
{
  use Drivable;
  public $color;
  public $seatStorage;
  public readonly string $model;

  public function __construct($model)
  {
    $this->model = $model;
  }
}

$car = new Car('BMW');
$car->color = 'red';

// echo $car->drive(); // Driving...

$motorcycle = new Motorcycle('Yamaha');
$motorcycle->color = 'blue';

// echo $motorcycle->drive(); // Driving...


print_r($car);