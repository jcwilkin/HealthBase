<html>
   
   <head>
      <title>Delete a Record from MySQL Database</title>
   </head>
   <body>
    <?php

		include("DBH.php");

        $sql = "Select *";
        $sql .="From Clients";

        $result = mysqli_query($conn,$sql);

        $queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<div class ='article-box'> 
                    <h2> ".$row['CLI_ORG_ID']." </h2>
					<p> ".$row['FIRST_NAME']." ".$row['LAST_NAME']." </p>
					</div>";

			}
		}
		?>
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
                           <input type = "submit" name = "delete"  id = "delete" >
                        </td>
                     </tr>
                     
                  </table>
               </form>
   </body>
</html>

