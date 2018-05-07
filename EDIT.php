<?php
// including the database connection file

 
 
    if (isset($_POST["submit-search"])) {  
    // variables created for Post Variables 
      include_once("DBH.php");

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
      $RPT_DATE  = $_POST["RPT_DATE"];
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
      
      
        //updating the table
        $sql1 = "UPDATE Clients SET CLI_ORG_ID ='$CLI_ORG_ID',LAST_NAME='$LAST_NAME',FIRST_NAME='$FIRST_NAME',MAID_NAME='$MAID_NAME',BIRTH_DATE='$BIRTH_DATE',AGE='$AGE',SS_NUMBER='$SS_NUMBER',STATE_ID='$STATE_ID',CLI_STATUS='$CLI_STATUS' WHERE CLI_ORG_ID = $CLI_ORG_ID;";
        $sql2 = "UPDATE Financials SET SS_NUMBER='$SS_NUMBER',EMPLOYMENT='$EMPLOYMENT',INCOME_SRC='$INCOME_SRC',INCOME_HOUS='$INCOME_HOUS' ,INCOME_DEP='$INCOME_DEP' ,ELIG_SSI='$ELIG_SSI' ,ELIG_MCAID='$ELIG_MCAID',PAYMENT='$PAYMENT',CLI_ORG_ID='$CLI_ORG_ID'";
        $sql3 = "UPDATE Classification SET STATE_ID='$STATE_ID',SEX='$SEX',RACE='$RACE',HISPANIC='$HISPANIC',EDUCATION='$EDUCATION',MARITAL='$MARITAL',LEG_STATUS='$LEG_STATUS',VET_STATUS='$VET_STATUS',CLI_ORG_ID='$CLI_ORG_ID'";
        $sql4 = "UPDATE Medical SET DSC_ID='$ID',HANDICAP_1='$HANDICAP_1',HANDICAP_2='$HANDICAP_2',PROBLEM_1='$PROBLEM_1',PROBLEM_2='$PROBLEM_2',DISAB_CATE='$DISAB_CATE',DISAB_DUAL='$DISAB_DUAL',SPMI='$SPMI',SEDC='$SEDC',CLI_ORG_ID='$CLI_ORG_ID'";
        $sql5 = "UPDATE Treatment SET SS_NUMBER='$SS_NUMBER',ACT_TREAT='$ACT_TREAT',INTGR_TREAT='$INTGR_TREAT',PROGRAM_CODE='$PROGRAM_CODE',DSC_ID='$ID'";
        $sql6 = "UPDATE Services SET SS_NUMBER='$SS_NUMBER',INPAT_SERV='$INPAT',RESID_SERV='$RESID_SERV',PARTI_SERV='$PARTI_SERV',OUTPA_SERV='$OUTPA_SERV',CASE_SERV='$CASE',DSC_ID='$ID' ";
        $sql7 = "UPDATE Admittence SET SS_NUMBER='$SS_NUMBER',RPT_DATE='$RPT_DATE',RCD_TRAN='$RCD_TRAN',ORG_CODE='$ORG_CODE',LOC_CODE='$LOC_CODE',ADM_DATE='$ADM_DATE',ADM_TYPE='$ADM_TYPE',ADM_REFFER='$ADM_REFFER',ADM_REFFER_OR='$ADM_REFFER_OR',DSC_ID='$ID'";
        $sql8 = "UPDATE Discharge SET SS_NUMBER='$SS_NUMBER',DIS_STATUS='$DIS_STATUS',DIS_DATE='$DIS_DATE',DIS_REFFER='$DIS_REFFER',DIS_REFFER_OR='$DIS_REFFER_OR',DIS_CNTY='$DIS_CNTY',ENT_DATE='$ENT_DATE',EXT_DATE='$EXT_DATE',DSC_ID='$ID' ";

        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);  
        $result5 = mysqli_query($conn, $sql5);
        $result6 = mysqli_query($conn, $sql6);
        $result7 = mysqli_query($conn, $sql7);
        $result8 = mysqli_query($conn, $sql8);

        if($result1) {
		   echo $CLI_ORG_ID." "."has been changed";
		}
		else {
			echo "Error! Could not change ".$CLI_ORG_ID;
		}

    }

    else{
        echo "Client Not Found";
    }

?>
