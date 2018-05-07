<?php
include("DBH.php")
?>

<html>
 <!--This Page pertains to the form that will display to create the new Client -->
<head>
  <title> Create Client Account </title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
<div class="container">
    <form action = "search.php" method="POST">
        <label> Create Client Account </label>
        <br>
        <br>
        <br>

        <label> Report Date: </label>
        <input type="text" id = "RPT_Date" name = "RPT_Date">
        <br>

        <label> RCD TRAN: </label>
        <input type="text" id="RCD_TRAN" name ="RCD_TRAN">
        <br>
       
        <label> Organization Code: </label>
        <input type="text" id="ORG_CODE" name="ORG_CODE"/>
        <br>

        <label> Location Code: </label>
        <input type="text" id="LOC_CODE" name = "LOC_CODE"/>
        <br>
      
      
        <label> Client ID: </label>
        <input type="text" id = "CLI_ORG_ID" name="CLI_ORG_ID"/>
        <br>

        <label> Client Status: </label>
        <input type="text" id="CLI_STATUS" name="CLI_STATUS">
        <br>
      
        <label> ADM_TYPE </label>
        <input type="text" id="ADM_TYPE" name ="ADM_TYPE"/>
        <br>

        <label> Admission Date: </label>
        <input type="text" id="ADM_DATE" name ="ADM_DATE"/>
        <br>

        <label> ADM_REFFER: </label>
        <input type="text" id="ADM_REFFER" name="ADM_REFFER">
        <br>

        <label> ADM_REFFER_OR: </label>
        <input type="text" id="ADM_REFFER_OR" name="ADM_REFFER_OR">
        <br>
      
      
        <label> Legal Status: </label>
        <input type="text" id="LEG_STATUS" name="LEG_STATUS">
        <br>
      
      
        <label> Last Name: </label>
        <input type="text" id="LAST_NAME" name="LAST_NAME" />
        <br>

        <label> First Name: </label>
        <input type="text" id="FIRST_NAME" name="FIRST_NAME" />
        <br>

        <label> Maiden Name: <label>
        <input type="text" id = "MAID_NAME" name="MAID_NAME"/>
        <br>
      
      
        <label> Social Security #: </label>
        <input type="text" id="SS_NUMBER" name="SS_NUMBER"/>
        <br>
      
       <label> Birth Date: </label>
       <input type="text" id ="BIRTH_DATE" name ="BIRTH_DATE"/>
       <br>

        <label> Age: </label>
        <input type="text" id="AGE" name="AGE">
        <br>
      
      
        <label> Sex: </label>
        <input type="text" id="SEX" name="SEX">
        <br>

        <label> Race: </label>
        <input type="text" id="RACE" name="RACE">
        <br>

        <label> Hispanic: </label>
        <input type="text" id="HISPANIC" name="HISPANIC">
        <br>
      
      
        <label> Education: </label>
        <input type="text" id="EDUCATION" name="EDUCATION">
        <br>
      
      
        <label> Marital: </label>
        <input type="text" id="MARITAL" name="MARITAL">
        <br>
      
      
        <label> ADM_CITY: </label>
        <input type="text" id="ADM_CITY" name="ADM_CITY">
        <br>
      
      
      
        <label> EMPLOYMENT: </label>
        <input type="text" id="EMPLOYMENT" name="EMPLOYMENT">
        <br>
      
      
        <label> Income Source: </label>
        <input type="text" id="INCOME_SRC" name="INCOME_SRC">
        <br>
      
      
        <label> Income Housing: </label>
        <input type="text" id="INCOME_HOUS" name="INCOME_HOUS">
        <br>
      
      
        <label> INCOME_DEP: </label>
        <input type="text" id="INCOME_DEP" name="INCOME_DEP">
        <br>
      
      
        <label> SSI: </label>
        <input type="text" id="ELIG_SSI" name="ELIG_SSI">
        <br>

        <label>  Medicaid: </label>
        <input type="text" id="ELIG_MCAID" name="ELIG_MCAID">
        <br>
      
        <label> Payment: </label>
        <input type="text" id="PAYMENT" name="PAYMENT">
        <br>
    
        <label> Vetern Status:  </label>
        <input type="text" id="VET_STATUS" name="VET_STATUS">
        <br>
      
        <label> Handicap 1: </label>
        <input type="text" id="HANDICAP_1" name="HANDICAP_1">
        <br>

        <label> Handicap 2: </label>
        <input type="text" id="HANDICAP_2" name="HANDICAP_2">
        <br>
      
        <label> Problem 1: </label>
        <input type="text" id="PROBLEM_1" name="PROBLEM_1">
        <br>

        <label> Problem 2: </label>
        <input type="text" id="PROBLEM_2" name="PROBLEM_2">
        <br>

        <label> DIS_CNTY  </label>
        <input type="text" id="DIS_CNTY" name="DIS_CNTY">
        <br>
      
        <label> DISAB_CATE: </label>
        <input type="text" id="DISAB_CATE" name="DISAB_CATE">
        <br>

        <label> DISAB_DUAL: </label>
        <input type="text" id="DISAB_DUAL" name="DISAB_DUAL">
        <br>
      
        <label> SPMI: </label>
        <input type="text" id="SPMI" name="SPMI">
        <br>

        <label> SEDC: </label>
        <input type="text" id="SEDC" name="SEDC">
        <br>
       
        <label> DSC ID: </label>
        <input type="text" id="DSC_ID" name="DSC_ID">
        <br>
        
      
        <label> INPAT SERV: </label>
        <input type="text" id="INPAT_SERV" name="INPAT_SERV">
        <br>

        <label> RESID SERV: </label>
        <input type="text" id="RESID_SERV" name="RESID_SERV">
        <br>
    
        <label> PARTI SERV: </label>
        <input type="text" id="PARTI_SERV" name="PARTI_SERV">
        <br>

        <label> OUTPA SERV: </label>
        <input type="text" id="OUTPA_SERV" name="OUTPA_SERV">
        <br>
      
        <label> CASE SERV:  </label>
        <input type="text" id="CASE_SERV" name="CASE_SERV">
        <br>
      
        <label> DIS DATE: </label>
        <input type="text" id="DIS_DATE" name="DIS_DATE">
        <br>

        <label> DIS STATUS: </label>
        <input type="text" id="DIS_STATUS" name="DIS_STATUS">
        <br>
      
        <label> DIS REFFER: </label>
        <input type="text" id="DIS_REFFER" name="DIS_REFFER">
        <br>

        <label> DIS REFFER OR: </label>
        <input type="text" id="DIS_REFFER_OR" name="DIS_REFFER_OR">
        <br>
      
        <label> Medicaid #: </label>
        <input type="text" id="MCAID_NUMBER" name="MCAID_NUMBER">
        <br>
      
        <label> State ID: </label>
        <input type="text" id="STATE_ID" name="STATE_ID">
        <br>
      
        <label> INTGR TREAT: </label>
        <input type="text" id="INTGR_TREAT" name="INTGR_TREAT">
        <br>

        <label> ACT TREAT: </label>
        <input type="text" id="ACT_TREAT" name="ACT_TREAT">
        <br>
      
        <label> Program Code: </label>
        <input type="text" id="PROGRAM_CODE" name="PROGRAM_CODE">
        <br>
      
        <label> ENT DATE: </label>
        <input type="text" id="ENT_DATE" name="ENT_DATE">
        <br>

        <label> EXT DATE: </label>
        <input type="text" id="EXT_DATE" name="EXT_DATE">
        <br>


        <input type="submit" id="btn" name="submit" />
      </p>
    </form>
    <form action = "AdminHomePage.php" method ="POST";>
     <button type ="submit" name = "submit-search">Home Page</button>
    </form>
  </div>
</body>


</html>
