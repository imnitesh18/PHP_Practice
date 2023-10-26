<?php
// class Myclass{
//   private $privateProperty;

//   private function privateMethod(){
//     echo $this->privateProperty;
//   }1
// }

// class ChildClass extends MyClass{
//   public function accessPrivateProperty(){
//     $this->privateProperty="This is a private property.";
//     $this->privateMethod();
//   }
// }

// $obj= new MyClass();
// // $obj->privateProperty;  // This gives an error.



interface Shape{
  public function calculateArea();
  public function calculatePerimeter();
}

class Circle implements Shape{
  private $radius;

  public function __construct($radius){
    $this->radius=$radius;
  }

  public function calculateArea(){
    return pi()*pow($this->radius,2);
  }
  public function calculatePerimeter(){
    return 2*pi()*$this->radius;
  }
}

class Rectangle implements Shape{
  private $width;
  private $height;

  public function __construct($width,$height){
    $this->width=$width;
    $this->height=$height;

  }

  public function calculateArea(){
    return $this->width*$this->height;
  }

  public function calculatePerimeter(){
    return 2*($this->width + $this->height);
  }
}

$circle=new Circle(5);
$rectangle=new Rectangle(4,6);



echo "Circle Area: " . $circle->calculateArea() . "\n";

echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n";


echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";

echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";







?>