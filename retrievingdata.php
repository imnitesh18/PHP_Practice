<?php
$host="localhost";
$username="root";
$password="";
$database="user";

$connection=mysqli_connect($host,$username,$password,$database);


$sql="SELECT * FROM student";
$result=mysqli_query($connection,$sql);

if(mysqli_num_rows($result)>0){
  while($row=mysql_fetch_assoc($result)){
    echo "ID: " .$row["id"]. "- Username: " . $row["username"]."-Email:" . $row["email"]. "<br>";
  }
} else{
  echo "No records found";
}


mysqli_close($connection);

?>