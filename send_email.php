<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $to=$_POST["to"];
  $subject=$_POST["subject"];
   $message=$_POST["message"];
$headers="From: your_email@example.com";

if(mail($to,$subject,$message,$headers)){
  echo "Email sent successfully!!!!";
}else{
  echo "Email sending Failed";
}

}