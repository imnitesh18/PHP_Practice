<?php

class Animal{
  public $name;

  public function __construct($name){
    $this->name=name;

  }

  public function speak(){
    echo "Animal speaks";
  }
}

class Dog extends Animal{
  public function speak(){
    echo "Dog barks";
  }
  public function fetch(){
    echo "Dog fetches the ball.";
  }
}

$genericAnimal=new Animal("GenericAnimal");

$dog=new Dog("Buddy");

echo $genericAnimal->name . " syas:";

$genericAnimal->speak();

echo $dog->name . "says: ";
$dog->speak();

$dog->fetch();

?>