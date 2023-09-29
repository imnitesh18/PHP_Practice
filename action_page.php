<?php
session_start();


// Define a simple array with user credentials 

$users=[
  'user1'=>'pass1',
  'user2'=>'pass2',
];



if(isset($_POST['username'])&& isset($_POST['password'])){
  $username=$_POST['username'];
  $password=$_POST['password'];


  if(array_key_exists($username,$users)&& $users[$username]===$password){
    $_SESSION['username']=$username;


    header('Location:dashboard.php');
    exit();

  } else{
    echo "Invalif username or password. Please try again.";
  }
}
?>
