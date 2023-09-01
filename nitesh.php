<?php
//  $large_number = 9223372036854775807;
//  var_dump($large_number);
 

//  $large_number = 9223372036854775808;
//  var_dump($large_number);


//  $million = 1000000;
//  $large_number = 50000000000000*$million;
//  var_dump($large_number);

//  echo 0.1+0.2-0.3;

//  echo "<br>";

//  $var1=true;
//  $var2=false;

//  echo $var1 + $var2;


// $numbers =array(1,2,3,4,5);
// $result=$numbers[0]+$numbers[1]+$numbers[2]+$numbers[3]+$numbers[4];
// echo($result);


// class Person {
//   public $name;

//   public function sayHello(){
//     echo "Hello, my name is " . $this->name;
//   }
// }

// $person1=new Person();
// $person1->name="baba Yaga";
// $person1->sayHello();


// case sensitive constant name

// define("WISHES","Good Evening");
// echo WISHES;

// define("courses",[
//   "PHP",
//   "HTML",
//   "CSS"
// ]);
// echo courses[0];


// const  WISHES=array("PHP",
//   "HTML",
//   "CSS");

// echo WISHES[0];

// $a=10;
// $b=5;
// $sum=$a%$b;

// echo($sum);



// $x=10;
// $y=5;
// $isGreater = ($x>$y);

// echo($isGreater);



///---------------Logical Operator-----------------------------///

// $isTrue=true;
// $isFalse=false;
// $logicalAnd=($isTrue && $isFalse);
// $logicalOr=($isTrue || $isFalse);

// echo($logicalAnd);
// echo($logicalOr);


//-----------------Ternary Operator-----------------------------//

// $age=18;
// $isAdult=($age>=18)? "Yes":"No";

// echo($isAdult);


//----------------Array Expression---------------------------///

// $numbers=array(1,2,3,4,5);
// $sumArray=array_sum($numbers);
// $countArray=count($numbers);

// echo($countArray);


//----------Precedence and Grouping---------------------///

// $result=2*(3+4);
// echo($result);


//--------------NULL Operator----------------------------///

// $Ifc=NULL;
// echo $Ifc;
// Output is: NULL


//-------------Comparison Operators-----------------------//

// $x=25;
// $y=35;
// $z="25";

// var_dump($x==$z);   // Outputs Boolean true
// var_dump($x===$z);  // Outputs Boolean false
// var_dump($x!=$y);   // Outputs Boolean true
// var_dump($x!==$z);  // Outputs Boolean true
// var_dump($x<$y);    // Outputs Boolean true
// var_dump($x>$y);    // Outputs Boolean false
// var_dump($x<=$y);   // Outputs Boolean true
// var_dump($x>=$y);   // Outputs Boolean false



//---------------Incrementing and Decrementing Operators----------//

// echo "<h3>Postincrement</h3>";
// $a = 5;
// echo "Should be 5: " . $a++ . "<br />\n";
// echo "Should be 6: " . $a . "<br />\n";

// echo "<h3>Preincrement</h3>";
// $a = 5;
// echo "Should be 6: " . ++$a . "<br />\n";
// echo "Should be 6: " . $a . "<br />\n";

// echo "<h3>Postdecrement</h3>";
// $a = 5;
// echo "Should be 5: " . $a-- . "<br />\n";
// echo "Should be 4: " . $a . "<br />\n";

// echo "<h3>Predecrement</h3>";
// $a = 5;
// echo "Should be 4: " . --$a . "<br />\n";
// echo "Should be 4: " . $a . "<br />\n";



//-----------------String Operators---------------------------//

// $x="Hello";
// $y="world";
// echo $x.$y; // Output Hello world
// echo "<br>";
// $x=$y;
// echo $x; // Output  Hello world



//------------------------if statement------------------------//


// $d=date("D");
// if($d=="Thu"){
//   echo "It's Friday!";
// }


// $t=date("H");
// if($t<"20"){
//   echo "Have a Good Day!!!!!!!";
// }

// $num=12;
// if($num<100){
//   echo "$num is less than 100";
// }




//------------------------if and else--------------------------//

//  $d=date("D");
//  if($d=="Thu"){
//   echo "Have a nice Weekend!";
//  } else{
//    echo "Have a nice day!";
// }


// $num=13;
// if($num%2==0){
//   echo "$num is even number";
// } else{
//   echo "$num is odd number";
// }



///-----------------if...else....if-----------------------------//

//  $d=date("D");
//  if($d=="Fri")
//   echo "Have a nice Weekend!";
//   else if($d=="Sun"){
//   echo "Have a nice Sunday!";
//   }
//   else{
//    echo "Have a nice day!";
// }


//----------------------------for Loop -------------------------------///

// for($i=1;$i<=3;$i++){
//   echo "$i" ." <br>";
// }


/// outer loop ///

// for($i=1;$i<=3;$i++){
//   // inner loop
//   for($j=1;$j<=3;$j++){
//     if(!($i==$j)){
//       continue;
//     }
//     echo $i.$j;
//     echo "</br>";
//   }
// }



///-----------------Loop Through an Multidimensional Array(for loop--------------------///

// $result = array (
//   array("Manoj",7.8,"pass"),
//   array("Aditya",8.5,"pass"),
//   array("Anuj",4.9,"fail")

// );
    
// for ($row = 0; $row < 3; $row++) {
//   echo "<h4>Row number $row</h4>";
//   for ($col = 0; $col < 3; $col++) {
//     echo $result[$row][$col]."<br>";
//   }
// }



///-----------------Loop Through an Multidimensional Array(foreach loop--------------------///

// $result=array(
// array("Manoj",7.8,"pass"),
// array("Aditya",8.5,"pass"),
// array("Anuj",4.9,"fail")
// );
// for($row=0;$row<3;$row++){
//     echo "<h4>Row number $row</h4>";
// foreach($result[$row]as$resul){
// echo $resul."<br>";
// }
// }


// $books = 
// array("C++" => array("name" => "Beginning with C","copies" =>8),
//       "PHP" => array("name" => "Basics of PHP","copies" => 10),
//       "Laravel" => array("name" => "MVC","copies" => 3)
// );
 
// $keys = array_keys($books);
// for($i = 0; $i < count($books); $i++) {
//     echo "<h1>$keys[$i]</h1>";
//     foreach($books[$keys[$i]] as $key => $value) {
//         echo $key . " = " . $value . "<br>";
//     }
// }


//-------------------------Array chunk-----------------------//

// $courses=array("PHP","Larvel","Node","HTML","CSS","ASP");
// print_r(array_chunk($courses,2));


//---------------array_flip---------------------------------//

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $result=array_flip($a1);
// print_r($result);



//------------------------array_intersect--------------------//

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("e"=>"red","f"=>"green","g"=>"blue");
// $a3=array("red","blue");
// $result=array_intersect($a1,$a2,$a3);
// print_r($result);



//----------------------array_merge-------------------------//

// $a1=array("a"=>"red","b"=>"green");
// $a2=array("c"=>"blue","b"=>"yellow");
// $a3=array("c"=>"orange","b"=>"magenta");
// $result=array_merge($a1,$a2,$a3);
// print_r($result);



//-----------------------array_pop---------------------------//

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// array_pop($a);
// print_r($a);


//-----------------------array_push-------------------------//

// $a=array("red","green");
// array_push($a,"blue","yellow");
// print_r($a);



//---------------------array_reverse-----------------------//

// $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
// print_r(array_reverse($a));


//----------------------array_search-------------------------//

// $a=array("a"=>"red","b"=>"green","c"=>"blue");
// echo array_search("red",$a);


//-----------------------array_slice-------------------------//


// $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
// print_r(array_slice($a,1,2));

// echo "<br>";
// $a=array("red","green","blue","yellow","brown");
// print_r(array_slice($a,1,2,true));


//-------------------- Create a function in php-------------//

// function sendmsg(){
//   echo "Hey Nitesh.............!!!!!!";
// }
// sendmsg();


//---------------function Argument-------------------------//

// function cse($course,$credit){
//   echo "$course with credit $credit<br>";
// }

// cse("HTML",3);
// cse("CSS",2);
// cse("Javascript",3);
// cse("PHP",4);
// cse("Reactjs",5);


//------------Loosely type Language-------------------//

// function add(int $a, int $b){
//   echo $a+$b;
// }
// add(2,3);


///----------------Php Default Arg. Value------------------//

// function setchildren(int $children=0){
//   echo "Total number of children are:$children<br>";
// }

// setchildren(2);
// setchildren(1);
// setchildren();
// setchildren(3);


//----------------Returning Value-----------------------//

// function add(int $a, int $b){
//    return $a+$b;
//  }

//  echo "5+10=" .add(5,10) . "<br>";
//  echo "7+13=" .add(7,13) . "<br>";
//  echo "2+4=" .add(2,4) . "<br>";


//----passing a Arg. to a function by Reference----------------//

// function selfMultiply(&$number){
// $number*=$number;
// return $number;
// }
// $mynum=5;
// echo $mynum;
// echo "<br>";
// selfmultiply($mynum);
// echo $mynum;


// function product(&$value){
//   $value*=5;
// }
// $num=2;
// product($num);
// echo $num;



// function adder(&$str2){
//   $str2='Call by Reference';
// }
// $str='Hello';
// adder($str);
// echo $str;



///-----------Local Variable---------------------//

// function mytest(){
//   $lang="REACTJS";
//   echo "WEB DEVELOPMENT LANGUAGE:" .$lang;
// }
// mytest();


///-------------Global variable---------------///

// $lang="ReactJs";
// function mytest(){
//  global $lang;
//  echo $lang;
//   echo "<br>";
// }
// mytest();
// echo $lang;


// $lang="ReactJs";
// function mytest(){
//   $lang="C++";
//  echo $lang;
//   echo "<br>";
// }
// mytest();
// echo $lang;


// $lang="ReactJs";
// function mytest(){
//  echo $lang;
//   echo "<br>";
// }
// mytest();
// echo $lang;



// $lang="ReactJs";
// function mytest(){
//   $i=$GLOBALS['lang'];
//   echo $i;
 
// }
// mytest();



///---------------------static variable----------------------------------//

// function static_var(){
//   static $num1=2;
//   $num2=5;

//   $num1++;
//   $num2++;

//   echo "Static:" .$num1."<br>";
//  echo "Non-Static:" .$num2."<br>";

// }
// //first function call
// static_var();

// // second function call
// static_var();



// function myTest(){
//   static $x=1;
//   echo $x;
//   $x++;
// }

// myTest();
// echo "<br>";
// myTest();
// echo "<br>";
// myTest();







?>


