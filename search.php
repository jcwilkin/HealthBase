<?php
    require_once("DBH.php");
    $output='';
    //collect
    if(isset($_POST['search'])){
        $searchq = $_POST['search'];
        $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

        $query = mysql_query("Select CLI_ORG_ID FROM Clients WHERE FIRST_NAME Like '%$searchq%' or LAST_NAME Like '%$searchq%' or CLI_ORG_ID LIKE '%$searchq%' or SS_NUMBER Like '%$searchq%' ") or die("could not search");
        $count = mysql_num_rows($query);

        if($count == 0){
            $output = 'There are No Search Results!';
        }

        else{
            while($row = mysql_fetch_array($query)){
                $fname = $row['First_Name'];
                $lname = $row['First_Name'];
                $CLI_ID = $row['CLI_ORG_ID'];
                $SS_NUM = $row['SS_Number'];
                $id =['id'];

                $output .= '<div>'.$fname.' '.$lname.' '.$CLI_ID.' '.$SS_NUM.'</div>';
            }


        }
    }

    
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search HealthBase</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action = "search.php" method = "POST">

    <input type ="text" name ="search" placeholder ="search for Clients"/>
    <input type ="submit" value">>"/>


    </form>

<?php print("$output"); ?>
</body>
</html>