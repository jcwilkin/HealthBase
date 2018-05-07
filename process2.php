<?php

include("DBH.php");
session_start();

 $result = mysqli_query($conn,"Select * FROM EMPLOYEE");

 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

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