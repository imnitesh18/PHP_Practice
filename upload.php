<?php
if(isset($_POST["submit"])){
  $targetDirectory ="uploads/";
  $targetFile = "$targetDirectory".basename($_FILES["fileToUpload"]["name"]);

  $uploadOk=1;
  if(file_exists($targetFile)){
    echo "sorry, this file already exist";
    $uploadOk=0;
  }
}

if($_FILES["fileToUpload"]["size"]>500000){
  echo "sorry, your file to large .";
  $uploadOk=0;
}

$allowedExtension=array("jpg","jpeg","png","pdf");
$fileExtension=strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
if(!in_array($fileExtension,$allowedExtension)){
  $uploadOk=0;
}

if($uploadOk==0){
  echo "sorry, your file was not uploaded";
} 
else{
  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$targetFile)){
    echo "the file".htmlspecialchars(basename($_FILES["fileToUpload"]))."has been uploaded";
  }else{
    echo "Sorry, there was an error uploading your file";
  }
}