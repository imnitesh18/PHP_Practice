<?php
$host="localhost";
$username="root";
$password="";
$database="user";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="INSERT INTO users(username,email) VALUES ('john_wick','john@gmail.com')";

if(mysqli_query($connection,$sql)){
  echo "New record inserted successfully.";
} else{
  echo "Error inserting record: ".mysqli_query($connection);
}

mysqli_close($connection);

?>