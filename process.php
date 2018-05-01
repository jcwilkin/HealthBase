
<?php
//Connection to the Database
include("DBH.php");
session_start();
// Gets the values from the form in the login.php

// $username = $_POST['Username'];
 //$password = $_POST['Passwords'];
 //$emp_1 = $_POST['Employee_I'];
 //$emp_2 = $_POST['Employee_II'];
 //$admin = $_POST['Administrator'];

 // prevent mySql injection


 $username = mysqli_real_escape_string($conn,$_POST['Username']);
 $password = mysqli_real_escape_string($conn,$_POST['Passwords']);


 $username = stripcslashes($username);
 $password = stripcslashes($password);
 

 //Query user in db
 $result = mysqli_query($conn,"Select * from Employee where Username = '$username' and Passwords = '$password'");
 $level = mysqli_query($conn,"Select Employee_Level FROM EMPLOYEE");

// Execution of query
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 $row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);

 // Tier System Set Up
    if ($row['Username'] == $username && $row['Passwords'] == $password) {
        echo " Welcome " .$row['Username'];
    }
    else {
       echo "Authentification Failure.";
    }

    if ($row['Employee_Level'] == 1) {
      echo " You are tier " .$row['Employe_Level'];
      header('Location: Employee_I_HomePage.php');
    }

    else if($row['Employee_Level'] == 2) {
      echo " You are tier " .$row['Employee_Level'];
      header('Location: Employee_II_HomePage.php'); 
    }

    else if($row['Employee_Level'] == 3) {
      echo " You are tier " .$row['Employee_Level'];
      header('Location: AdminHomePage.php'); 
    }

  else {
     echo "No tier.";
  }

  

 ?>
