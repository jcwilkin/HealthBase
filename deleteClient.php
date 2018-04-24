
<?php
session_start();
include_once 'DBH.php';

if(isset($_POST['delete'])){

    $ID = $_POST['CLI_ORG_ID'];
    $sql1 =("DELETE ClassificationFROM Classification Natural Join Clients WHERE CLI_ORG_ID ='$ID'");
    $sql2 =("DELETE Composite FROM Composite Natural Join Clients WHERE CLI_ORG_ID ='$ID'");
    $sql3 =("DELETE Financials FROM Financials NATURAL Join Clients Where CLI_ORG_ID = '$ID'");
    $sql4 =("DELETE Admittence FROM Admittence NATURAL JOIN Medical Where CLI_ORG_ID = '$ID'");
    $sql5 = ("DELETE Discharge FROM Discharge NATURAL JOIN Medical Where CLI_ORG_ID = '$ID'");
    $sql6 = ("DELETE Services FROM Services NATURAL JOIN Medical Where CLI_ORG_ID = '$ID'");
    $sql7 = ("DELETE Treatment FROM Treatment NATURAL JOIN Medical Where CLI_ORG_ID = '$ID'");
    $sql8 = ("DELETE Medical FROM Medical NATURAL JOIN Clients Where CLI_ORG_ID = '$ID'");
    $sql9 =("DELETE FROM Clients Where CLI_ORG_ID ='$ID'");
    $results = mysqli_query($conn,$sql1);
    $results =mysqli_query($conn,$sql2);
    $results =mysqli_query($conn,$sql3);
    $results =mysqli_query($conn,$sql4);
    $results =mysqli_query($conn,$sql5);
    $results =mysqli_query($conn,$sql6);
    $results =mysqli_query($conn,$sql7);
    $results =mysqli_query($conn,$sql8);
    $results =mysqli_query($conn,$sql9);

    if($sql1 && $sql2 && $sql3 && $sql4 && $sql5 && $sql6 && $sql7 && $sql8 && $sql9){
        echo "Deleted";
        header('location:readDelete.php');
    }

    

    else{
    header('location:readDelete.php');
    }
}
?>
        
		
   
	


