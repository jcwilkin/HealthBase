<html>

<head>
  <title> Create Client Account </title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
  <div id = "frm">
    <form action = "InsertClient.php" method="POST">
      <p>
        <label> Create Client Account </label>
      </p>
      <p>
        <label> Report Date: </label>
        <input type="text" id = "RPT_Date" name = "date">

        <label> RCD TRAN: </label>
        <input type="text" id="RCD_TRAN" name ="tran"
      </p>
      <p>
          <label> Organization Code: </label>
          <input type="text" id="ORG_CODE" name="org"

        <label> Location Code: </label>
        <input type="text" id="LOC_CODE" name = "loc"
      </p>
      <p>
        <label> Client ID: </label>
        <input type="text" id = "CLI_ORG_ID" name="client_org"

        <label> Client Status: </label>
        <input type="text" id="CLI_STATUS" name="client_stat">
      </p>
      <p>
        <label> Admission Date: </label>
        <input type="text" id="ADM_DATE" name ="admit"

        <label> ADM_REFFER: </label>
        <input type="text" id="ADM_REFFER" name=""="admit_ref">

        <label> ADM_REFFER_OR: </label>
        <input type="text" id="ADM_REFFER_OR" name="admit_ref_or">
      </p>
      <p>
        <label> Legal Status: </label>
        <input type="text" id="LEG_STATUS" name=""="legal">
      </p>
      <p>
        <label> Last Name: </label>
        <input type="text" id="LAST_NAME" name="last" />

        <label> First Name: </label>
        <input type="text" id="FIRST_NAME" name="first" />

        <label> Maiden Name: <label>
        <input type="text" id = "MAID_NAME" name="maid"
      </p>
      <p>
        <label> Social Security #: </label>
        <input type="text" id="SS_NUMBER" name="ss_num"
      <p>
       <label> Birth Date: </label>
       <input type="text" id ="BIRTH_DATE" name ="birth"

        <label> Age: </label>
        <input type="text" id="AGE" name="age">
      </p>
      <p>
        <label> Sex: </label>
        <input type="text" id="SEX" name="sex">

        <label> Race: </label>
        <input type="text" id="RACE" name="race">

        <label> Hispanic: </label>
        <input type="text" id="HISPANIC" name="hispanic">
      </p>
      <p>
        <label> Education: </label>
        <input type="text" id="EDUCATION" name="edu">
      </p>
      <p>
        <label> Marital: </label>
        <input type="text" id="MARITAL" name="marital">
      </p>
      <p>
        <label> ADM_CITY: </label>
        <input type="text" id="ADM_CITY" name="admin_city">
      </p>
      <p>
        <label> Living Arrangments: </label>
        <input type="text" id="LIVING_ARR" name="living">
      </p>
      <p>
        <label> Residential Arrangments: </label>
        <input type="text" id="RESID_ARR" name="resident">
      </p>
      <p>
        <label> EMPLOYMENT: </label>
        <input type="text" id="EMPLOYMENT" name="employ">
      </p>
      <p>
        <label> Income Source: </label>
        <input type="text" id="INCOME_SRC" name="income_src">
      </p>
      <p>
        <label> Income Housing: </label>
        <input type="text" id="INCOME_HOU" name="income_hou">
      </p>
      <p>
        <label> INCOME_DEP: </label>
        <input type="text" id="INCOME_DEP" name="income_dep">
      </p>
      <p>
        <label> SSI: </label>
        <input type="text" id="ELIG_SSI" name="SSI">

        <label>  Medicaid: </label>
        <input type="text" id="ELIG_MCAID" name="mcaid">
      </p>
      <p>
        <label> Payment: </label>
        <input type="text" id="PAYMENT" name="payment">
      </p>
      <p>
        <label> Vetern Status:  </label>
        <input type="text" id="VET_STATUS" name="vet">
      </p>
      <p>
        <label> Handicap 1: </label>
        <input type="text" id="HANDICAP_1" name="hand_1">

        <label> Handicap 2: </label>
        <input type="text" id="HANDICAP_2" name="hand_2">
      </p>
      <p>
        <label> Problem 1: </label>
        <input type="text" id="PROBLEM_1" name="prob_1">

        <label> Problem 2: </label>
        <input type="text" id="PROBLEM_2" name="prob_2">
      </p>
      <p>
        <label> DISAB_CATE: </label>
        <input type="text" id="DISAB_CATE" name="cate">

        <label> DISAB_DUAL: </label>
        <input type="text" id="DISAB_DUAL" name="dual">
      </p>
      <p>
        <label> SPMI: </label>
        <input type="text" id="SPMI" name="spmi">

        <label> SEDC: </label>
        <input type="text" id="SEDC" name="sedc">
      </p>
      <p>
        <label> Diagnosis 1:  </label>
        <input type="text" id="DIAGNOSIS1" name="diag_1">

        <label> Diagnosis 2: </label>
        <input type="text" id="DIAGNOSIS2" name="diag_2">
      </p>
      <p>
        <label> DCS ID: </label>
        <input type="text" id="DCS_ID" name="dcs">
      </p>
      <p>
        <label> INAPT SERV: </label>
        <input type="text" id="INAPT_SERV" name="inapt">

        <label> RESID SERV: </label>
        <input type="text" id="RESID_SERV" name="resid">
      </p>
      <p>
        <label> PARTI SERV: </label>
        <input type="text" id="PARTI_SERV" name="parti">

        <label> OUTPA SERV: </label>
        <input type="text" id="OUTPA_SERV" name="outpa">
      </p>
      <p>
        <label> CASEM SERV:  </label>
        <input type="text" id="CASEM_SERV " name="casem">
      </p>
      <p>
        <label> DIS DATE: </label>
        <input type="text" id="DIS_DATE" name="dis_date">

        <label> DIS STATUS: </label>
        <input type="text" id="DIS_STATUS" name="dis_status">
      </p>
      <p>
        <label> DIS REFFER: </label>
        <input type="text" id="DIS_REFFER" name="dis_ref">

        <label> DIS REFFER OR: </label>
        <input type="text" id="DIS_REFFER_OR" name="dis_ref_or">
      </p>
      <p>
        <label> Medicaid #: </label>
        <input type="text" id="MCAID_NUMBER" name="mcaid_num">
      </p>
      <p>
        <label> State ID: </label>
        <input type="text" id="DIS_CITY" name="state">
      </p>
      <p>
        <label> INTGR TREAT: </label>
        <input type="text" id="INTGR_TREAT" name="intgr">

        <label> ACT TREAT: </label>
        <input type="text" id="ACT_TREAT" name="act">
      </p>
      <p>
        <label> Program Code: </label>
        <input type="text" id="PROGRAM_CODE" name="prgm_code">
      </p>
      <p>
        <label> ENT DATE: </label>
        <input type="text" id="ENT_DATE" name="ent">

        <label> EXT DATE: </label>
        <input type="text" id="EXT_DATE" name="ext">
      </p>


        <input type="submit" id="btn" name="Submit" />
      </p>
    </form>
  </div>
</body>


</html>
