<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="DELETE users WHERE username = 'john_wick'";


if(mysqli_query($connection,$sql)){
 echo "Record deleted sucessfully.";
    
  } else{
  echo "Error deleting records:" .mysqli_error($connection);
}

mysqli_close($connection);

?>