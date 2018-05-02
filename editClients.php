<?php
// including the database connection file
include_once("DBH.php");
 
if(isset($_POST['submit'])){  
    
    $id = $_GET["id"];
    // variables created for Post Variables 
      
      $CLI_ORG_ID = $_POST["CLI_ORG_ID"];
      $FIRST_NAME = $_POST["FIRST_NAME"];
      $LAST_NAME = $_POST["LAST_NAME"];
      $MAID_NAME = $_POST["MAID_NAME"];
      $BIRTH_DATE = $_POST["BIRTH_DATE"];
      $AGE = $_POST["AGE"];
      $SS_NUMBER  = $_POST["SS_NUMBER"];
      $STATE_ID = $_POST["STATE_ID"];
      $CLI_STATUS = $_POST["CLI_STATUS"];
      $SEX = $_POST["SEX"];
      $RACE = $_POST["RACE"];
      $HISPANIC = $_POST["HISPANIC"];
      $EDUCATION = $_POST["EDUCATION"];
      $MARITAL= $_POST["MARITAL"];
      $LEG_STATUS = $_POST["LEG_STATUS"];
      $VET_STATUS  = $_POST["VET_STATUS"];
      $EMPLOYMENT = $_POST["EMPLOYMENT"];
      $INCOME_SRC  = $_POST["INCOME_SRC"];
      $INCOME_HOUS  = $_POST["INCOME_HOUS"];
      $INCOME_DEP  = $_POST["INCOME_DEP"];
      $ELIG_SSI = $_POST["ELIG_SSI"];
      $ELIG_MCAID  = $_POST["ELIG_MCAID"];
      $PAYMENT = $_POST["PAYMENT"];
      $ID = $_POST{"DSC_ID"};
      $HANDICAP_1 = $_POST["HANDICAP_1"];
      $HANDICAP_2 = $_POST["HANDICAP_2"];
      $PROBLEM_1 = $_POST["PROBLEM_1"];
      $PROBLEM_2 = $_POST["PROBLEM_2"];
      $DISAB_CATE = $_POST["DISAB_CATE"];
      $DISAB_DUAL = $_POST["DISAB_DUAL"];
      $SPMI= $_POST["SPMI"];
      $SEDC = $_POST["SEDC"];
      $ACT_TREAT = $_POST["ACT_TREAT"];
      $INTGR_TREAT = $_POST["INTGR_TREAT"];
      $PROGRAM_CODE = $_POST["PROGRAM_CODE"];
      $INPAT = $_POST["INPAT_SERV"];
      $RESID_SERV = $_POST["RESID_SERV"];
      $PARTI_SERV = $_POST["PARTI_SERV"];
      $OUTPA_SERV = $_POST["OUTPA_SERV"];
      $CASE = $_POST["CASE_SERV"];
      $RPT_Date  = $_POST["RPT_Date"];
      $RCD_TRAN = $_POST["RCD_TRAN"];
      $ORG_CODE = $_POST["ORG_CODE"];
      $LOC_CODE = $_POST["LOC_CODE"];
      $ADM_DATE = $_POST["ADM_DATE"];
      $ADM_TYPE = $_POST["ADM_TYPE"];
      $ADM_REFFER = $_POST["ADM_REFFER"];
      $ADM_REFFER_OR  = $_POST["ADM_REFFER_OR"];
      $DIS_STATUS = $_POST["ADM_REFFER_OR"];
      $DIS_DATE = $_POST["DIS_STATUS"];
      $DIS_REFFER = $_POST["DIS_REFFER"];
      $DIS_REFFER_OR = $_POST["DIS_REFFER_OR"];
      $DIS_CNTY = $_POST["DIS_CNTY"];
      $ENT_DATE = $_POST["ENT_DATE"];
      $EXT_DATE = $_POST["EXT_DATE"];  
    
    // checking empty fields
      
    if (isset($_POST["submit"])) {    
        //updating the table
        $sql1 = "UPDATE Clients SET CLI_ORG_ID ='$CLI_ORG_ID',LAST_NAME='$LAST_NAME',FIRST_NAME='$FIRST_NAME',MAID_NAME='$MAID_NAME',BIRTH_DATE='$BIRTH_DATE',AGE='$AGE',SS_NUMBER='$SS_NUMBER',STATE_ID='$STATE_ID',CLI_STATUS='$CLI_STATUS' WHERE CLI_ORG_ID=$id";
        $sql2 = "UPDATE Financials SET SS_NUMBER='$SS_NUMBER',EMPLOYMENT='$EMPLOYMENT',INCOME_SRC='$INCOME_SRC',INCOME_HOUS='$INCOME_HOUS' ,INCOME_DEP='$INCOME_DEP' ,ELIG_SSI='$ELIG_SSI' ,ELIG_MCAID='$ELIG_MCAID',PAYMENT='$PAYMENT',CLI_ORG_ID='$CLI_ORG_ID' WHERE CLI_ORG_ID = $id";
        $sql3 = "UPDATE Classification SET STATE_ID='$STATE_ID',SEX='$SEX',RACE='$RACE',HISPANIC='$HISPANIC',EDUCATION='$EDUCATION',MARITAL='$MARITAL',LEG_STATUS='$LEG_STATUS',VET_STATUS='$VET_STATUS',CLI_ORG_ID='$CLI_ORG_ID' WHERE CLI_ORG_ID = $id";
        $sql4 = "UPDATE Medical SET DSC_ID='$ID',HANDICAP_1='$HANDICAP_1',HANDICAP_2='$HANDICAP_2',PROBLEM_1='$PROBLEM_1',PROBLEM_2='$PROBLEM_2',DISAB_CATE='$DISAB_CATE',DISAB_DUAL='$DISAB_DUAL',SPMI='$SPMI',SEDC='$SEDC',CLI_ORG_ID='$CLI_ORG_ID' WHERE CLI_ORG_ID = $id";
        $sql5 = "UPDATE Treatment SET SS_NUMBER='$SS_NUMBER',ACT_TREAT='$ACT_TREAT',INTEGR_TREAT='$INTEGR_TREAT',PROGRAM_CODE='$PROGRAM_CODE',DSC_ID='$ID' WHERE DSC_ID=$id";
        $sql6 = "UPDATE Services SET SS_NUMBER='$SS_NUMBER',INPAT_SERV='$INPAT_SERV',RESID_SERV='$RESID_SERV',PARTI_SERV='$PARTI_SERV',OUTPA_SERV='$OUTPA_SERV',CASE_SERV='$CASE_SERV',DSC_ID='$DSC_ID' WHERE DSC_ID=$id";
        $sql7 = "UPDATE Admittence SET SS_NUMBER='$SS_NUMBER',RPT_DATE='$RPT_DATE',RCD_TRAN='$RCD_TRAN',ORG_CODE='$ORG_CODE',LOC_CODE='$LOC_CODE',ADM_DATE='$ADM_DATE',ADM_TYPE='$ADM_TYPE',ADM_REFFER='$ADM_REFFER',ADM_REFFER_OR='$ADM_REFFER_OR',DSC_ID='$DSC_ID' WHERE DSC_ID =$id";
        $sql8 = "UPDATE Discharge SET SS_NUMBER='$SS_NUMBER',DIS_STATUS='$DIS_STATUS',DIS_DATE='$DIS_DATE',DIS_REFFER='$DIS_REFFER',DIS_REFFER_OR='$DIS_REFFER_OR',DIS_CNTY='$DIS_CNTY',ENT_DATE='$ENT_DATE',EXT_DATE='$EXT_DATE',DSC_ID='$DSC_ID' WHERE DSC_ID =$id";

        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);  
        $result5 = mysqli_query($conn, $sql5);
        $result6 = mysqli_query($conn, $sql6);
        $result7 = mysqli_query($conn, $sql7);
        $result8 = mysqli_query($conn, $sql8);

        if($result1) {
		   echo $_POST["CLI_ORG_ID"]." "."has been changed";
		}
		else {
			echo "Error! Could not change ".$_POST["CLI_ORG_ID"];
		}

    }

    else{
        echo "Client Not Found";
    }
}
?>
<?php
//getting id from url
if(isset($_GET["id"])&& $_GET["id"]!== ""){
    $id = $_GET["id"];

 
//selecting data associated with this particular id
$sql1 =  "SELECT * FROM Clients WHERE CLI_ORG_ID = $id";
$sql2 =  "SELECT * FROM Classification WHERE CLI_ORG_ID = $id";
$sql3 =  "SELECT * FROM Financials WHERE CLI_ORG_ID = $id";
$sql4 =  "SELECT * FROM Medical WHERE CLI_ORG_ID = $id";
$sql5 =  "SELECT * FROM Treatment WHERE DSC_ID = $id";
$sql6 =  "SELECT * FROM Services WHERE DSC_ID = $id";
$sql7 =  "SELECT * FROM Admittence WHERE DSC_ID = $id";
$sql8 =  "SELECT * FROM Discharge WHERE DSC_ID = $id";


$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);
$result6 = mysqli_query($conn, $sql6);
$result7 = mysqli_query($conn, $sql7);
$result8 = mysqli_query($conn, $sql8);

$queryResults = mysqli_num_rows($result);

    if($queryResults > 0){
        while($row = mysqli_fetch_assoc($result)){
        echo "<div class ='article-box'>";

         echo"<h2>".$row['CLI_ORG_ID']." ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>";
         

echo "<p><form action ='editClients.php?id={$ID}' method ='POST'>";
            echo "<p><input type = 'text'  name ='RPT_Date' value ='".$row["RPT_Date"]."'/></p>";
			echo "<p><input type = 'text'  name ='RCD_TRAN' value ='".$row["RCD_TRAN"]."'/></p>";
			echo "<p><input type = 'text'  name ='ORG_CODE' value ='".$row["ORG_CODE"]."'/></p>";
			echo "<p><input type = 'text'  name ='LOC_CODE' value ='".$row["LOC_CODE"]."'/></p>";
			echo "<p><input type = 'text'  name ='CLI_ORG_ID' value ='".$row["CLI_ORG_ID"]."'/></p>";
			echo "<p><input type = 'text'  name ='CLI_STATUS' value ='".$row["CLI_STATUS"]."'/></p>";
			echo "<p><input type = 'text'  name ='SS_NUMBER' value ='".$row["SS_NUMBER"]."'/></p>";
			echo "<p><input type = 'text'  name ='ADM_TYPE' value ='".$row["ADM_TYPE"]."'/></p>";
			echo "<p><input type = 'text'  name ='ADM_DATE' value ='".$row["ADM_DATE"]."'/></p>";
			echo "<p><input type = 'text'  name ='ADM_REFFER' value ='".$row["ADM_REFFER"]."'/></p>";
			echo "<p><input type = 'text'  name ='ADM_REFFER_OR' value ='".$row["ADM_REFFER_OR"]."'/></p>";
			echo "<p><input type = 'text'  name ='LEG_STATUS' value ='".$row["LEG_STATUS"]."'/></p>";
			echo "<p><input type = 'text'  name ='LAST_NAME' value ='".$row["LAST_NAME"]."'/></p>";
            echo "<p><input type = 'text'  name ='FIRST_NAME' value ='".$row["FIRST_NAME"]."'/></p>";
			echo "<p><input type = 'text'  name ='MAID_NAME' value ='".$row["MAID_NAME"]."'/></p>";
			echo "<p><input type = 'text'  name ='SS_NUMBER' value ='".$row["SS_NUMBER"]."'/></p>";
			echo "<p><input type = 'text'  name ='BIRTH_DATE' value ='".$row["BIRTH_DATE"]."'/></p>";
			echo "<p><input type = 'text'  name ='AGE' value ='".$row["AGE"]."'/></p>";
			echo "<p><input type = 'text'  name ='SEX' value ='".$row["SEX"]."'/></p>";
			echo "<p><input type = 'text'  name ='RACE' value ='".$row["RACE"]."'/></p>";
            echo "<p><input type = 'text'  name ='HISPANIC' value ='".$row["HISPANIC"]."'/></p>";
			echo "<p><input type = 'text'  name ='EDUCATION' value ='".$row["EDUCATION"]."'/></p>";
			echo "<p><input type = 'text'  name ='MARITAL' value ='".$row["MARITAL"]."'/></p>";
			echo "<p><input type = 'text'  name ='ADM_CITY' value ='".$row["ADM_CITY"]."'/></p>";
			echo "<p><input type = 'text'  name ='EMPLOYMENT' value ='".$row["EMPLOYMENT"]."'/></p>";
			echo "<p><input type = 'text'  name ='INCOME_SRC' value ='".$row["INCOME_SRC"]."'/></p>";
			echo "<p><input type = 'text'  name ='INCOME_HOUS' value ='".$row["INCOME_HOUS"]."'/></p>";
            echo "<p><input type = 'text'  name ='INCOME_DEP' value ='".$row["INCOME_DEP"]."'/></p>";
			echo "<p><input type = 'text'  name ='ELIG_SSI' value ='".$row["ELIG_SSI"]."'/></p>";
			echo "<p><input type = 'text'  name ='ELIG_MCAID' value ='".$row["ELIG_MCAID"]."'/></p>";
			echo "<p><input type = 'text'  name ='PAYMENT' value ='".$row["PAYMENT"]."'/></p>";
			echo "<p><input type = 'text'  name ='VET_STATUS' value ='".$row["VET_STATUS"]."'/></p>";
			echo "<p><input type = 'text'  name ='HANDICAP_1' value ='".$row["HANDICAP_1"]."'/></p>";
			echo "<p><input type = 'text'  name ='HANDICAP_2' value ='".$row["HANDICAP_2"]."'/></p>";
            echo "<p><input type = 'text'  name ='PROBLEM_1' value ='".$row["PROBLEM_1"]."'/></p>";
			echo "<p><input type = 'text'  name ='PROBLEM_2' value ='".$row["PROBLEM_2"]."'/></p>";
			echo "<p><input type = 'text'  name ='DIS_CNTY' value ='".$row["DIS_CNTY"]."'/></p>";
			echo "<p><input type = 'text'  name ='DISAB_CATE' value ='".$row["DISAB_CATE"]."'/></p>";
			echo "<p><input type = 'text'  name ='DISAB_DUAL' value ='".$row["DISAB_DUAL"]."'/></p>";
			echo "<p><input type = 'text'  name ='SPMI' value ='".$row["SPMI"]."'/></p>";
			echo "<p><input type = 'text'  name ='SEDC' value ='".$row["SEDC"]."'/></p>";
            echo "<p><input type = 'text'  name ='DSC_ID' value ='".$row["DSC_ID"]."'/></p>";
			echo "<p><input type = 'text'  name ='INPAT_SERV' value ='".$row["INPAT_SERV"]."'/></p>";
			echo "<p><input type = 'text'  name ='RESID_SERV' value ='".$row["RESID_SERV"]."'/></p>";
			echo "<p><input type = 'text'  name ='PARTI_SERV' value ='".$row["PARTI_SERV"]."'/></p>";
			echo "<p><input type = 'text'  name ='OUTPA_SERV' value ='".$row["OUTPA_SERV"]."'/></p>";
			echo "<p><input type = 'text'  name ='CASE_SERV' value ='".$row["CASE_SERV"]."'/></p>";
			echo "<p><input type = 'text'  name ='DIS_DATE' value ='".$row["DIS_DATE"]."'/></p>";
            echo "<p><input type = 'text'  name ='DIS_STATUS' value ='".$row["DIS_STATUS"]."'/></p>";
            echo "<p><input type = 'text'  name ='DIS_REFFER' value ='".$row["DIS_REFFER"]."'/></p>";
			echo "<p><input type = 'text'  name ='DIS_REFFER_OR' value ='".$row["DIS_REFFER_OR"]."'/></p>";
			echo "<p><input type = 'text'  name ='MCAID_NUMBER' value ='".$row["MCAID_NUMBER"]."'/></p>";
			echo "<p><input type = 'text'  name ='STATE_ID' value ='".$row["STATE_ID"]."'/></p>";
			echo "<p><input type = 'text'  name ='INTGR_TREAT' value ='".$row["INTGR_TREAT"]."'/></p>";
			echo "<p><input type = 'text'  name ='ACT_TREAT' value ='".$row["ACT_TREAT"]."'/></p>";
			echo "<p><input type = 'text'  name ='PROGRAM_CODE' value ='".$row["PROGRAM_CODE"]."'/></p>"; 
            echo "<p><input type = 'text'  name ='ENT_DATE' value ='".$row["ENT_DATE"]."'/></p>";
			echo "<p><input type = 'text'  name ='EXT_DATE' value ='".$row["EXT_DATE"]."'/></p>"; 
             
			echo '<input type="submit" name="submit" class="button tiny round" value="Submit Changes" />';
				
			echo "</form>";
"</div>";
    }
}

else{
    echo "Cannot Be Edited";
}
}

?>
      
 