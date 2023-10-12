<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="DROP TABLE IF EXISTS users";


if(mysqli_query($connection,$sql)){
 echo "Table users dropped sucessfully.";
    
  } else{
  echo "Error dropping table:" .mysqli_error($connection);
}

mysqli_close($connection);

?>