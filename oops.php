<?php
// class MyClass{
//   public $property;
//   public function myMethod(){
//     echo "This is a member function.\n";
//   }
// }

// $myObject=new myClass();

// $myObject->myMethod();



class Myclass{
  protected $protectedProperty;

  protected function protectedMethod(){
    echo $this->protectedProperty;
  }
}

class ChildClass extends MyClass{
  public function accessProtectedProperty(){
    $this->protectedProperty="This is a protected property.";
    $this->protectedMethod();
  }
}

$childObj=new ChildClass();
$childObj->accessProtectedProperty();
$childObj->$protectedProperty;


?>