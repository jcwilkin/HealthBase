<?php
// Connection to the Database
	include("DBH.php");
// query for the database
$query = "SELECT CLI_ORG_ID, FIRST_NAME, LAST_NAME ";
$query .= "FROM Clients ORDER BY LAST_NAME ASC";

// Execution of Query
$results = mysqli_query($conn,$query);

$queryResults = mysqli_num_rows($results);

// Displays information
	if ($queryResults > 0) {
		echo "<div class='row'>";
		echo "<center>";
		echo "<h2>Clients</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th></th><th></th></tr>";
		while ($row = $results->fetch_assoc())  {
			echo "<tr>";
  		echo "<td style='text-align:center'>"." ".$row['FIRST_NAME']." ".$row['LAST_NAME']."</td>";
			echo "<td>&nbsp;<a href = 'editClient.php?id=".urlencode($row["CLI_ORG_ID"])."'>Edit</a>&nbsp;&nbsp;</td>";
			
			echo "</tr>";
		}
		echo "</table>";
		echo "<br /><br /><a href='createClientAccount.php'>Add a person</a>";

		echo "</center>";
		echo "</div>";
	}
?>


