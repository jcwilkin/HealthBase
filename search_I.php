<?php
//Connection to the Database
    include("DBH.php");
?>
<head>
  <title>Search For Clients </title>
  <link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>
<!-- Form to search the Database -->
<form action = "searchClients_I.php" method ="POST";>
    <input type = "text" name="search" placeholder="Search">
    <button type ="submit" name = "submit-search">Search</button>
</form>

<div class ="article-container">
    <?php
    // Query the Database
        $sql = "Select *";
        $sql .="From Clients";
//Execution of the query
        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);
//Displays information from the query
        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class ='article-box'> 
                    <h2> ".$row['CLI_ORG_ID']." ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
                 
                
                </div>";

            }

        }
        ?>
</body>
        

