<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


if(!$connection){
die ("connection failed: " . mysqli_connect_error());
 }

$sql="SELECT DATE(created_at) AS creation_date, COUNT(*) AS user_count FROM your_table GROUP BY creation_date";
$result=mysqli_query($connection,$sql);



if(mysqli_num_rows($result)>0){
  echo "student counts by creation date:<br>";
  while($row=mysqli_fetch_assoc($result)){
     echo "Date:".$row["creation_date"]. "- Student Count: " . $row["student_count"]."<br>";
  }
} else{
  echo "No records found";
}

mysqli_close($connection);
?>