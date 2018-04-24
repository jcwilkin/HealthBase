<?php

include("DBH.php");
    if(isset($_POST['submit'])){

      $sql1 = "INSERT INTO Client ";
      $sql1 .="(CLI_ORG_ID, LAST_NAME, FIRST_NAME, MAID_NAME, BIRTH_DATE, AGE, SS_NUMBER, STATE_ID,CLI_STATUS) ";
      $sql1 .= "VALUES (";
	  $sql1 .= "'".$_POST["CLI_ORG_ID"]."', ";
	  $sql1 .= "'".$_POST["FIRST_NAME"]."', ";
	  $sql1 .= "'".$_POST["LAST_NAME"]."', ";
	  $sql1 .= "'".$_POST["MAID_NAME"]."', ";
      $sql1 .= "'".$_POST["BIRTH_DATE"]."', ";
      $sql1 .= "'".$_POST["AGE"]."', ";
      $sql1 .= "'".$_POST["SS_NUMBER"]."', ";
      $sql1 .= "'".$_POST["STATE_ID"]."', ";
      $sql1 .= "'".$_POST["CLI_STATUS"]."') ";

      $sql2 = "INSERT INTO Classification ";
      $sql2 .="(STATE_ID, SEX, RACE, HISPANIC, EDUCATION, MARITAL, LEG_STATUS, VET_STATUS,CLI_ORG_ID) ";
      $sql2 .= "VALUES (";
	  $sql2 .= "'".$_POST["STATE_ID"]."', ";
	  $sql2 .= "'".$_POST["SEX"]."', ";
	  $sql2 .= "'".$_POST["RACE"]."', ";
	  $sql2 .= "'".$_POST["HISPANIC"]."', ";
      $sql2 .= "'".$_POST["EDUCATION"]."', ";
      $sql2 .= "'".$_POST["MARITAL"]."', ";
      $sql2 .= "'".$_POST["LEG_STATUS"]."', ";
      $sql2 .= "'".$_POST["VET_STATUS"]."', ";
      $sql2 .= "'".$_POST["CLI_ORG_ID"]."') ";

      $sql3 = "INSERT INTO Financials ";
      $sql3 .="(SS_NUMBER , EMPLOYMENT, INCOME_SRC, INCOME_HOUS, INCOME_DEP, ELIG_SSI, ELIG_MCAID, PAYMENT,CLI_ORG_ID) ";
      $sql3 .= "VALUES (";
	  $sql3 .= "'".$_POST["SS_NUMBER "]."', ";
	  $sql3 .= "'".$_POST["EMPLOYMENT"]."', ";
	  $sql3 .= "'".$_POST["INCOME_SRC"]."', ";
	  $sql3 .= "'".$_POST["INCOME_HOUS"]."', ";
      $sql3 .= "'".$_POST["INCOME_DEP"]."', ";
      $sql3 .= "'".$_POST["ELIG_SSI"]."', ";
      $sql3 .= "'".$_POST["ELIG_MCAID"]."', ";
      $sql3 .= "'".$_POST["PAYMENT"]."', ";
      $sql3 .= "'".$_POST["CLI_ORG_ID"]."') ";


      $sql4 = "INSERT INTO Medical ";
      $sql4 .="(DSC_ID, HANDICAP_1, HANDICAP_2, PROBLEM_1, PROBLEM_2, DISAB_CATE, DISAB_DUAL, SPMI, SEDC, CLI_ORG_ID) ";
      $sql4 .= "VALUES (";
	  $sql4 .= "'".$_POST["DSC_ID"]."', ";
	  $sql4 .= "'".$_POST["HANDICAP_1"]."', ";
	  $sql4 .= "'".$_POST["HANDICAP_2"]."', ";
	  $sql4 .= "'".$_POST["PROBLEM_1"]."', ";
      $sql4 .= "'".$_POST["PROBLEM_2"]."', ";
      $sql4 .= "'".$_POST["DISAB_CATE"]."', ";
      $sql4 .= "'".$_POST["DISAB_DUAL"]."', ";
      $sql4 .= "'".$_POST["SPMI"]."', ";
      $sql4 .= "'".$_POST["SEDC"]."', ";
      $sql4 .= "'".$_POST["CLI_ORG_ID"]."') ";


      $sql5 = "INSERT INTO Treatment ";
      $sql5 .="(SS_NUMBER, ACT_TREAT, INTEGR_TREAT, PROGRAM_CODE, DSC_ID) ";
      $sql5 .= "VALUES (";
	  $sql5 .= "'".$_POST["SS_NUMBER"]."', ";
	  $sql5 .= "'".$_POST["ACT_TREAT"]."', ";
	  $sql5 .= "'".$_POST["INTEGR_TREAT"]."', ";
	  $sql5 .= "'".$_POST["PROGRAM_CODE"]."', ";
      $sql5 .= "'".$_POST["DSC_ID"]."') ";
    

      $sql6 = "INSERT INTO Services ";
      $sql6 .="(SS_NUMBER, INPAT_SERV, RESID_SERV, PARTI_SERV, OUTPA_SERV, CASE_SERV, DSC_ID) ";
      $sql6 .= "VALUES (";
	  $sql6 .= "'".$_POST["SS_NUMBER"]."', ";
	  $sql6 .= "'".$_POST["INPAT_SERV"]."', ";
	  $sql6 .= "'".$_POST["RESID_SERV"]."', ";
	  $sql6 .= "'".$_POST["PARTI_SERV"]."', ";
      $sql6 .= "'".$_POST["OUTPA_SERV"]."', ";
      $sql6 .= "'".$_POST["CASE_SERV"]."', ";
      $sql6 .= "'".$_POST["DSC_ID"]."') ";


      $sql7 = "INSERT INTO Admittence ";
      $sql7 .="(SS_NUMBER, RPT_DATE, RCD_TRAN, ORG_CODE, LOC_CODE, ADM_DATE, ADM_TYPE, ADM_REFFER, ADM_REFFER_OR, DSC_ID) ";
      $sql7 .= "VALUES (";
	  $sql7 .= "'".$_POST["SS_NUMBER"]."', ";
	  $sql7 .= "'".$_POST["RPT_DATE"]."', ";
	  $sql7 .= "'".$_POST["RCD_TRAN"]."', ";
	  $sql7 .= "'".$_POST["ORG_CODE"]."', ";
      $sql7 .= "'".$_POST["LOC_CODE"]."', ";
      $sql7 .= "'".$_POST["ADM_DATE"]."', ";
      $sql7 .= "'".$_POST["ADM_TYPE"]."', ";
      $sql7 .= "'".$_POST["ADM_REFFER"]."', ";
      $sql7 .= "'".$_POST["ADM_REFFER_OR"]."', ";
      $sql7 .= "'".$_POST["DSC_ID"]."') ";


      $sql8 = "INSERT INTO Discharge ";
      $sql8 .="(SS_NUMBER, DIS_STATUS, DIS_DATE, DIS_REFFER, DIS_REFFER_OR, DIS_CNTY, ENT_DATE, EXT_DATE, DSC_ID) ";
      $sql8 .= "VALUES (";
	  $sql8 .= "'".$_POST["SS_NUMBER"]."', ";
	  $sql8 .= "'".$_POST["DIS_STATUS"]."', ";
	  $sql8 .= "'".$_POST["DIS_DATE"]."', ";
	  $sql8 .= "'".$_POST["DIS_REFFER"]."', ";
      $sql8 .= "'".$_POST["DIS_REFFER_OR"]."', ";
      $sql8 .= "'".$_POST["DIS_CNTY"]."', ";
      $sql8 .= "'".$_POST["ENT_DATE"]."', ";
      $sql8 .= "'".$_POST["EXT_DATE"]."', ";
      $sql8 .= "'".$_POST["DSC_ID"]."') ";
      
      mysql_query($conn,$sql1);
      mysql_query($conn,$sql2);
      mysql_query($conn,$sql3);
      mysql_query($conn,$sql4);
      mysql_query($conn,$sql5);
      mysql_query($conn,$sql6);
      mysql_query($conn,$sql7);
      mysql_query($conn,$sql8);
      mysql_close($conn);

    } 
       

?>