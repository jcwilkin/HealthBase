<html>
   <!-- This is the Page Displayed for the Delete -->
   <head>
      <title>Delete a Record from MySQL Database</title>
	  <link rel="stylesheet" type="text/css" href="search.css">
   </head>
   <body>
    <?php
//Connection to the Database
		include("DBH.php");

        // query the database to show Clients
        $sql = "Select *";
        $sql .="From Clients";

        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);
//Displays information From the Database
        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class ='article-box'> 
                    <h2> ".$row['CLI_ORG_ID']." </h2>
					<p> ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
					</div>";

			}
		}
    ?>
    <!-- Form for the delete -->
               <form method = "POST" action = "deleteClient.php">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100">Client ID</td>
                        <td><input name = "CLI_ORG_ID" type = "text" 
                           id = "CLI_ORG_ID"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <button type = "submit" name = "delete"  id = "delete">Delete</button>
                        </td>
                     </tr>
                     
                  </table>
               </form>

         <form action = "AdminHomePage.php" method ="POST";>
            <table width = "350" border = "0" cellspacing = "1"
             cellpadding = "2">
               <td width = "100"> </td>
               <td>
                <button type ="submit" name = "submit-search">Home Page</button>
              </td>
        </form>
   </body>
</html>

