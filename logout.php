<?php
// This destroys the session with the user and exits them from the program
session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
$_SESSION = array();
header("location:login.php");
?>