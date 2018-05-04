<?php

// Connection to the Database
    include("DBH.php");
?>
<head>
  <title>Edit Clients </title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>

<div class = "article-container">
<?php
    if(isset($_POST['submit-search'])){
    //Declare search variable
        $search = mysqli_real_escape_string($conn,$_POST['search']);
//Query the Database
        $sql = "SELECT * ";
        $sql .= "FROM Clients NATURAL JOIN Classification NATURAL JOIN Financials NATURAL JOIN Medical NATURAL JOIN Treatment NATURAL JOIN Services NATURAL JOIN Admittence NATURAL JOIN Discharge ";
        $sql .= "Where FIRST_NAME Like '$search' OR LAST_NAME Like '$search' OR CLI_ORG_ID Like '$search'";
//Execution of Query
        $results = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($results);
// Displays the Form of the Database
        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<div class ='article-box'> 
                <h2>Edit Client: </h2>";
                echo " ";
            echo "<p><input type = 'text'  name ='RPT_DATE' value ='".$row["RPT_DATE"]."'/></p>";
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
			echo "<p><input type = 'text'  name ='STATE_ID' value ='".$row["STATE_ID"]."'/></p>";
			echo "<p><input type = 'text'  name ='INTEGR_TREAT' value ='".$row["INTEGR_TREAT"]."'/></p>";
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
      
 