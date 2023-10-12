<?php
$host="localhost";
$username="root";
$password="";
$database="user";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="INSERT INTO student(username,email) VALUES ('ram','ram@gmail.com')";

if(mysqli_query($connection,$sql)){
  echo "New record inserted successfully.";
} else{
  echo "Error inserting record: ".mysqli_query($connection);
}

mysqli_close($connection);

?>