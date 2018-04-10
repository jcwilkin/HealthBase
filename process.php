<?php
// Gets the values from the form in the login.php

 $username = $POST['user'];
 $password = $POST['pass'];

 // prevent mySql injection
 $username = stripcslashes($username);
 $password = stripcslashes($password);

 $username = mysqli_real_escape_string($username);
 $password = mysqli_real_escape_string($password);

 //connection to the Server
 mysqli_connect("localhost", "root","NMRC");
 mysqli_select_db("NMRC");

 //Query user in db
 $result = mysqli_query("Select * from Employee where USERNAME = '$username' and PASSWORD = '$password'") or
           die("Authentification Error", mysql_error());

 $row = mysqli_fetch_array($result);

 if ($row['USERNAME'] == $Username && $row['PASSWORD'] == $Password)  {
   echo " Welcome " .$row['username']
 } else {
   echo "Authentification Failure."
 }

 ?>
