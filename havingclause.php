<?php
$host="localhost";
$username="root";
$password="";
$database="user database";

$connection=mysqli_connect($host,$username,$password,$database);


if(!$connection){
die ("connection failed: " . mysqli_connect_error());
 }

$sql="SELECT LEFT(username,1) AS first_letter, COUNT(*) AS user_count FROM your_table GROUP BY first_letter HAVING user_count>2";

$result=mysqli_query($connection,$sql);



if(mysqli_num_rows($result)>0){
  echo "student counts by the first latter of the username(with more than 2 users):<br>";
  while($row=mysqli_fetch_assoc($result)){
     echo "First Letter:".$row["first_letter"]. "- Student Count: " . $row["student_count"]."<br>";
  }
} else{
  echo "No records found";
}

mysqli_close($connection);
?>