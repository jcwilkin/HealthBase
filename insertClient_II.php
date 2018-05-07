<?php


    if(isset($_POST['submit'])){
      // Connection to the Database
      include("DBH.php");
// Post Variables

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

      
      // query the data base in order to insert a Client
      $sql1 = "INSERT INTO Clients(CLI_ORG_ID, LAST_NAME, FIRST_NAME, MAID_NAME, BIRTH_DATE, AGE, SS_NUMBER, STATE_ID,CLI_STATUS)VALUES('$CLI_ORG_ID','$FIRST_NAME','$LAST_NAME','$MAID_NAME','$BIRTH_DATE','$AGE','$SS_NUMBER','$STATE_ID','$CLI_STATUS')";

      $sql2 = "INSERT INTO Classification ";
      $sql2 .="(STATE_ID, SEX, RACE, HISPANIC, EDUCATION, MARITAL, LEG_STATUS, VET_STATUS,CLI_ORG_ID) ";
      $sql2 .= "VALUES ('$STATE_ID','$SEX','$RACE','$HISPANIC', '$EDUCATION','$MARITAL', '$LEG_STATUS','$VET_STATUS', '$CLI_ORG_ID')";

      $sql3 = "INSERT INTO Financials ";
      $sql3 .="(SS_NUMBER , EMPLOYMENT, INCOME_SRC, INCOME_HOUS, INCOME_DEP, ELIG_SSI, ELIG_MCAID, PAYMENT,CLI_ORG_ID) ";
      $sql3 .= "VALUES ('$SS_NUMBER', '$EMPLOYMENT','$INCOME_SRC', '$INCOME_HOUS','$INCOME_DEP','$ELIG_SSI','$ELIG_MCAID', '$PAYMENT','$CLI_ORG_ID') ";


      $sql4 = "INSERT INTO Medical ";
      $sql4 .="(DSC_ID, HANDICAP_1, HANDICAP_2, PROBLEM_1, PROBLEM_2, DISAB_CATE, DISAB_DUAL, SPMI, SEDC, CLI_ORG_ID) ";
      $sql4 .= "VALUES ('$ID', '$HANDICAP_1', '$HANDICAP_2', '$PROBLEM_1','$PROBLEM_2', '$DISAB_CATE','$DISAB_DUAL', '$SPMI', '$SEDC', '$CLI_ORG_ID') ";

      $sql5 = "INSERT INTO Treatment ";
      $sql5 .="(SS_NUMBER, ACT_TREAT, INTEGR_TREAT, PROGRAM_CODE, DSC_ID) ";
      $sql5 .= "VALUES ('$SS_NUMBER', '$ACT_TREAT', '$INTGR_TREAT', '.$PROGRAM_CODE','$ID') ";
 
      $sql6 = "INSERT INTO Services ";
      $sql6 .="(SS_NUMBER, INPAT_SERV, RESID_SERV, PARTI_SERV, OUTPA_SERV, CASE_SERV, DSC_ID) ";
      $sql6 .= "VALUES ('$SS_NUMBER', '$INPAT', '$RESID_SERV', '$PARTI_SERV','$OUTPA_SERV','$CASE','$ID') ";

     $sql7 = "INSERT INTO Admittence ";
      $sql7 .="(SS_NUMBER, RPT_Date, RCD_TRAN, ORG_CODE, LOC_CODE, ADM_DATE, ADM_TYPE, ADM_REFFER, ADM_REFFER_OR, DSC_ID) ";
      $sql7 .= "VALUES ('$SS_NUMBER', '$RPT_Date', '$RCD_TRAN', '$ORG_CODE', '$LOC_CODE', '$ADM_DATE', '$ADM_TYPE','$ADM_REFFER','$ADM_REFFER_OR', '$ID') ";

      $sql8 = "INSERT INTO Discharge ";
      $sql8 .="(SS_NUMBER, DIS_STATUS, DIS_DATE, DIS_REFFER, DIS_REFFER_OR, DIS_CNTY, ENT_DATE, EXT_DATE, DSC_ID) ";
      $sql8 .= "VALUES ('$SS_NUMBER','$DIS_STATUS', '$DIS_DATE', '$DIS_REFFER', '$DIS_REFFER_OR', '$DIS_CNTY', '$ENT_DATE', '$EXT_DATE', '$ID') ";
      
//Execution of Queries
      $check1=mysqli_query($conn,$sql1);
      $check2=mysqli_query($conn,$sql2);
      $check3=mysqli_query($conn,$sql3);
      $check4=mysqli_query($conn,$sql4);
      $check5=mysqli_query($conn,$sql5);
      $check6=mysqli_query($conn,$sql6);
      $check7=mysqli_query($conn,$sql7);
      $check8=mysqli_query($conn,$sql8);

      // Check if Query Executed
if($check1){
  echo "Inserted";
  header('location:Employee_II_HomePage.php');
}

    

    else{
    echo "Not Inserted";

    } 
    
  }

       

?>



      

