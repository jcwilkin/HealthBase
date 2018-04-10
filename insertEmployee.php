<?php
  $con = mysqli_connect('localhost','root',"NMRC");

  if(!$con){
    echo 'Not Connected to Server'
  }

  if(!mysqli_select_db($con,'NMRC')){
    echo 'Database Not Selected';
  }

  $Username = $_POST['USERNAME'];
  $Password = $_POST['PASSWORD'];

  $sql ="INSERT INTO `LOGIN`(`Username`,`Password` ) VALUES ('$Username','$Password')";

  if(!mysqli_query($con,$sql)){
    echo 'Not Inserted';
  }

  else{
    echo 'Inserted';
  }

  header("refresh:2; url = login.php");




 ?>
