
<?php
require_once("DBH.php");
// Gets the values from the form in the login.php

 $username = $POST['Username'];
 $password = $POST['Passwords'];
 $emp_1 = $POST['Employee_I'];
 $emp_2 = $POST['Employee_II'];
 $admin = $POST['Administrator'];

 // prevent mySql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);
 $emp_1 = stripcslashes($emp_1);
 $emp_2 = stripcslashes($emp_2);
 $admin = stripcslashes($admin);

 $username = mysqli_real_escape_string($username);
 $password = mysqli_real_escape_string($password);
 $emp_1 = mysqli_real_escape_string($emp_1);
 $emp_2 = mysqli_real_escape_string($emp_2);
 $admin = mysqli_real_escape_string($admin);


 //Query user in db
 $result = mysqli_query("Select * from Employee where Username = '$username' and Passwords = '$password'");

 $row = mysqli_fetch_array($result);

    if ($row['Username'] == $username && $row['Passwords'] == $password) {
      if($row['Employee_I'] == 1){  
        echo " Welcome " .$row['username'].$row['Employee_I'];
      }
      else{
        echo "Authentification Failure";
      }
    }

    else if($row['Username'] == $username && $row['Passwords'] == $password){
      if($row['Employee_II'] == 1){  
        echo " Welcome " .$row['username'].$row['Employee_II'];
      }
      else{
        echo "Authentification Failure";
      }
    }

    else if ($row['Username'] == $username && $row['Passwords'] == $password){
      if($row['Administrator'] == 1){  
        echo " Welcome " .$row['username'].$row['Administrator'];
      }

      else{
        echo "Authentification Failure";
    }
  }
    else {
       echo "Authentification Failure.";
    }

 ?>
