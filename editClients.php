<?php
// including the database connection file
include_once("DBH.php");
 
if(isset($_POST['submit'])){   
    // variables created for Post Variables 
      $id = $_POST['id'];
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
        $sql1 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql2 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql3 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql4 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql5 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql6 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql7 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";
        $sql8 = "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id";

        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);
        $result3 = mysqli_query($conn, $sql3);
        $result4 = mysqli_query($conn, $sql4);  
        $result5 = mysqli_query($conn, $sql5);
        $result6 = mysqli_query($conn, $sql6);
        $result7 = mysqli_query($conn, $sql7);
        $result8 = mysqli_query($conn, $sql8);

        
        //redirectig to the display page. In our case, it is index.php
        header("Location: search.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql1 =  "SELECT * FROM Clients WHERE CLI_ORG_ID =$id";
$sql2 =  "SELECT * FROM Classification WHERE CLI_ORG_ID =$id";
$sql3 =  "SELECT * FROM Financials WHERE CLI_ORG_ID =$id";
$sql4 =  "SELECT * FROM Medical WHERE CLI_ORG_ID =$id";
$sql5 =  "SELECT * FROM Treatment WHERE CLI_ORG_ID =$id";
$sql6 =  "SELECT * FROM Services WHERE CLI_ORG_ID =$id";
$sql7 =  "SELECT * FROM Admittence WHERE CLI_ORG_ID =$id";
$sql8 =  "SELECT * FROM Discharge WHERE CLI_ORG_ID =$id";


$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);
$result6 = mysqli_query($conn, $sql6);
$result7 = mysqli_query($conn, $sql7);
$result8 = mysqli_query($conn, $sql8);
 
while($res = mysqli_fetch_array($result)){
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <form name="form1" method="post" action="search.php">
        <table border="0">
        <label> Edit Client Information </label>
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

        </table>
    </form>
</body>
</html>