<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


if(!$connection){
die ("connection failed: " . mysqli_connect_error());
 }

$sql="SELECT *FROM student ORDER BY username"; 
$result=mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){
  echo "student ordered by username:<br>";
  while($row=mysql_fetch_assoc($result)){
     echo "ID:".$row["id"]. "- Username: " . $row["username"]."-Email:" . $row["email"]. "<br>";
  }
} else{
  echo "No records found";
}

?>