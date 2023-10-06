<?php
$host="localhost";
$username="root";
$password="";
$database="user";

$connection=mysqli_connect($host,$username,$password,$database);

$sql="CREATE TABLE IF NOT EXISTS users(
  id INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(50) NOT NULL,
   email VARCHAR(100) NOT NULL,
   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";


if(mysqli_query($connection,$sql)){
  echo "Table 'users'created successfully.";
} else{
  echo "Error creating table: ".mysqli_query($connection);
}

mysqli_close($connection);

?>