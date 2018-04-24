<?php
    include("DBH.php");
?>
<head>
  <title>Search For Clients </title>
  <link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>
<form action = "searchClients.php" method ="POST";>
    <input type = "text" name="search" placeholder="Search">
    <button type ="submit" name = "submit-search">Search</button>
</form>

<div class ="article-container">
    <?php
        $sql = "Select *";
        $sql .="From Clients";

        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class ='article-box'> 
                    <h2> ".$row['CLI_ORG_ID']." </h2>
                    <p> ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
                    <p> ".$row['MAID_NAME']." </p>
                    <p> ".$row['BIRTH_DATE']." </p>
                    <p> ".$row['AGE']." </p>
                    <p> ".$row['SS_NUMBER']." </p>
                    <p> ".$row['STATE_ID']." </p>
                    <p> ".$row['CLI_STATUS']." </p>
                
                </div>";

            }

        }
        ?>
</body>
        

