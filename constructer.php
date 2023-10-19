<?php

class Car{
  public $make;
  public $model;
  public $year;


  public function __construct($make,$model,$year){
    $this->make=$make;
    $this->model=$model;
    $this->year=$year;
  }


public function displayDetails(){
  echo "Make: {$this->make}, Model:{$this->model},Year: {this->year}\n";
}
}
$car1=new Car("Audi","Camry",2022);
$car2=new Car("Honda","Civic",2023);

?>


