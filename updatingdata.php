<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="UPDATE  student SET email = 'updated_email@example.com' WHERE username='ram'";


if(mysqli_query($connection,$sql)){
 echo "Record updated sucessfully.";
    
  } else{
  echo "Error updating records:" .mysqli_error($connection);
}

mysqli_close($connection);

?>