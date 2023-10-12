<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="TRUNCATING TABLE users";


if(mysqli_query($connection,$sql)){
 echo "Table users truncated sucessfully.";
    
  } else{
  echo "Error truncating table:" .mysqli_error($connection);
}

mysqli_close($connection);

?>