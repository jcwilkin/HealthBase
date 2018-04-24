<?php
include("DBH.php");

if (isset($_GET["id"]) && $_GET["id"] !== "") {
    $ID = $_GET["CLI_ORG_ID"];

$sql = "DELETE FROM Clients ";
$sql .= "WHERE CLI_ORG_ID = '".$ID."'";

$result = $mysqli->query($sql); 

}

