<?php

// Connection to the Database
    include("DBH.php");
?>
<head>
  <title>Search For Clients </title>
  <link rel="stylesheet" type="text/css" href="search.css">
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
                <h2>Client Organization ID:  ".$row['CLI_ORG_ID']." </h2>
                <p>Name:  ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
                <p>Maid Name: ".$row['MAID_NAME']." </p>
                <p>Birth Date:  ".$row['BIRTH_DATE']." </p>
                <p>Age:  ".$row['AGE']." </p>
                <p>Social Security Number:  ".$row['SS_NUMBER']." </p>
                <p>State ID: ".$row['STATE_ID']." </p>
                <p>Sexual Orientation:  ".$row['SEX']." </p>
                <p>Racial Status:  ".$row['RACE']." </p>
                <p>Hispanic Status:  ".$row['HISPANIC']." </p>
                <p>Eduaction: ".$row['EDUCATION']." </p>
                <p>Marital Status:  ".$row['MARITAL']." </p>
                <p>Legal Status:  ".$row['LEG_STATUS']." </p>
                <p>Vetern Status:  ".$row['VET_STATUS']." </p>
                <p>Employment:  ".$row['EMPLOYMENT']." </p>
                <p>Income Source: ".$row['INCOME_SRC']." </p>
                <p>Income Housing:  ".$row['INCOME_HOUS']." </p>
                <p>Income Dependency: ".$row['INCOME_DEP']." </p>
                <p>Eligable SSI: ".$row['ELIG_SSI']." </p>
                <p>Eligable Medicaid:  ".$row['ELIG_MCAID']." </p>
                <p>DSC ID:  ".$row['DSC_ID']." </p>
                <p>Handicap 1: ".$row['HANDICAP_1']." </p>
                <p>Handicap 2:  ".$row['HANDICAP_2']." </p>
                <p>Problem 1:  ".$row['PROBLEM_1']." </p>
                <p>Problem 2:  ".$row['PROBLEM_2']." </p>
                <p>Disability CATE:  ".$row['DISAB_CATE']." </p>
                <p>Disability DUAL:  ".$row['DISAB_DUAL']." </p>
                <p>SPMI:  ".$row['SPMI']." </p>
                <p>SEDC:  ".$row['SEDC']." </p>
                <p>ACT Treatment: ".$row['ACT_TREAT']." </p>
                <p>INTEGR Treatment: ".$row['INTEGR_TREAT']." </p>
                <p>Program Code: ".$row['PROGRAM_CODE']." </p>
                <p>Inpatient Service: ".$row['INPAT_SERV']." </p>
                <p>Resident Service: ".$row['RESID_SERV']." </p>
                <p>Partial Service:  ".$row['PARTI_SERV']." </p>
                <p>Outpatient Service: ".$row['OUTPA_SERV']." </p>
                <p>Case Service: ".$row['CASE_SERV']." </p>
                <p>Report Date: ".$row['RPT_DATE']." </p>
                <p>Record TRAN: ".$row['RCD_TRAN']." </p>
                <p>Organization Code: ".$row['ORG_CODE']." </p>
                <p>Location Code: ".$row['LOC_CODE']." </p>
                <p>Admittence Date: ".$row['ADM_DATE']." </p>
                <p>Admittence Type:  ".$row['ADM_TYPE']." </p>
                <p>Admittence Refferal:  ".$row['ADM_REFFER']." </p>
                <p>Admittence Refferal OR:  ".$row['ADM_REFFER_OR']." </p>
                <p>Discharge Status:  ".$row['DIS_STATUS']." </p>
                <p>Discharge Date:  ".$row['DIS_DATE']." </p>
                <p>Discharge Refferal:  ".$row['DIS_REFFER']." </p>
                <p>Discharge Refferal OR: ".$row['DIS_REFFER_OR']." </p>
                <p>Discharge CNTY:  ".$row['DIS_CNTY']." </p>
                <p>ENT Date: ".$row['ENT_DATE']." </p>
                <p>EXT Date: ".$row['EXT_DATE']." </p>


 
            
            
    
    
            
            </div>";
            }
        }

        else{
            echo " No Search Results Found";
        }

    }
?>

 <link rel="stylesheet" type="text/css" href="search.css">

<form action = "Employee_II_HomePage.php" method ="POST";>
    <button type ="submit" name = "submit-search">Home Page</button>
</form>

</div>
