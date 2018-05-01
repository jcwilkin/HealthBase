<?php
// Connection to the Database
    include("DBH.php");
?>

<title>Search For Clients to be Edited </title>
  <link rel="stylesheet" type="text/css" href="search.css">
</head>

<body>
<!-- Form creation for user to search the databasr for a Client -->
<form action = "editClients.php" method ="POST";>
    <input type = "text" name="search" placeholder="Search">
    <button type ="submit" name = "submit-search">Search</button>
</form>

<div class ="article-container">
    <?php
    // query to Select all the information from the Clients table

        $sql = "Select *";
        $sql .="From Clients";

        // Execute Query
        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);

        // Displays the query information 
        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class ='article-box'> 
                    <h2> ".$row['CLI_ORG_ID']." ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
                 
                
                </div>";

            }

        }
        ?>
</body>