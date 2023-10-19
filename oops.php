<?php
class MyClass{
  public $property;
  public function myMethod(){
    echo "This is a member function.\n";
  }
}

$myObject=new myClass();

$myObject->myMethod();

?>