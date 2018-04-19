<?php
  $con = mysqli_connect('localhost','root',"NMRC");

  if(!$con){
    echo 'Not Connected to Server'
  }

  if(!mysqli_select_db($con,'NMRC')){
    echo 'Database Not Selected';
  }

  $username = $_POST['USERNAME'];
  $password = $_POST['PASSWORD'];

  $sql ="INSERT INTO `LOGIN`(`Username`,`Password` ) VALUES ('$username','$password')";

  if(!mysqli_query($con,$sql)){
    echo 'Not Inserted';
  }

  else{
    echo 'Inserted';
  }

  header("refresh:2; url = login.php");




 ?>
