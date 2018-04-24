<?php
    include("DBH.php");
?>
<head>
  <title>Search For Clients </title>
  <link rel="stylesheet" type="text/css" href="search.css">
</head>

<div class = "article-container">
<?php
    if(isset($_POST['submit-search'])){
        
        $search = mysqli_real_escape_string($conn,$_POST['search']);

        $sql = "SELECT * ";
        $sql .= "FROM Clients NATURAL JOIN Classification NATURAL JOIN Financials NATURAL JOIN Medical NATURAL JOIN Treatment NATURAL JOIN Services NATURAL JOIN Admittence NATURAL JOIN Discharge ";
        $sql .= "Where FIRST_NAME Like '$search%' OR LAST_NAME Like '$search%' OR CLI_ORG_ID Like '$search%'";

        $results = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($results);

        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<a href = 'client.php?'><div class ='article-box'> 
                <h2> ".$row['CLI_ORG_ID']." </h2>
                <p> ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
                <p> ".$row['MAID_NAME']." </p>
                <p> ".$row['BIRTH_DATE']." </p>
                <p> ".$row['AGE']." </p>
                <p> ".$row['SS_NUMBER']." </p>
                <p> ".$row['STATE_ID']." </p>
                <p> ".$row['SEX']." </p>
                <p> ".$row['RACE']." </p>
                <p> ".$row['HISPANIC']." </p>
                <p> ".$row['EDUCATION']." </p>
                <p> ".$row['MARITAL']." </p>
                <p> ".$row['LEG_STATUS']." </p>
                <p> ".$row['VET_STATUS']." </p>
                <p> ".$row['EMPLOYMENT']." </p>
                <p> ".$row['INCOME_SRC']." </p>
                <p> ".$row['INCOME_HOUS']." </p>
                <p> ".$row['INCOME_DEP']." </p>
                <p> ".$row['ELIG_SSI']." </p>
                <p> ".$row['ELIG_MCAID']." </p>
                <p> ".$row['DSC_ID']." </p>
                <p> ".$row['HANDICAP_1']." </p>
                <p> ".$row['HANDICAP_2']." </p>
                <p> ".$row['PROBLEM_1']." </p>
                <p> ".$row['PROBLEM_2']." </p>
                <p> ".$row['DISAB_CATE']." </p>
                <p> ".$row['DISAB_DUAL']." </p>
                <p> ".$row['SPMI']." </p>
                <p> ".$row['SEDC']." </p>
                <p> ".$row['ACT_TREAT']." </p>
                <p> ".$row['INTEGR_TREAT']." </p>
                <p> ".$row['PROGRAM_CODE']." </p>
                <p> ".$row['INPAT_SERV']." </p>
                <p> ".$row['RESID_SERV']." </p>
                <p> ".$row['PARTI_SERV']." </p>
                <p> ".$row['OUTPA_SERV']." </p>
                <p> ".$row['CASE_SERV']." </p>
                <p> ".$row['RPT_DATE']." </p>
                <p> ".$row['RCD_TRAN']." </p>
                <p> ".$row['ORG_CODE']." </p>
                <p> ".$row['LOC_CODE']." </p>
                <p> ".$row['ADM_DATE']." </p>
                <p> ".$row['ADM_TYPE']." </p>
                <p> ".$row['ADM_REFFER']." </p>
                <p> ".$row['ADM_REFFER_OR']." </p>
                <p> ".$row['DIS_STATUS']." </p>
                <p> ".$row['DIS_DATE']." </p>
                <p> ".$row['DIS_REFFER']." </p>
                <p> ".$row['DIS_REFFER_OR']." </p>
                <p> ".$row['DIS_CNTY']." </p>
                <p> ".$row['ENT_DATE']." </p>
                <p> ".$row['EXT_DATE']." </p>


 

            
    
    
            
            </div></a>";
            }
        }

        else{
            echo " No Search Results Found";
        }

    }
?>
</div>
