<?php
	include("DBH.php");


	//****************  Add Query
	//  Query people to select PersonID, FirstName, and LastName, sorting in ascending order by LastName
$query = "SELECT  FIRST_NAME, LAST_NAME ";
$query .= "FROM Clients ORDER BY LastName ASC";

	//  Execute query
$result = $mysqli -> query($query);
// print_r($result);

// /********************    Uncomment Once Code Completed  **************************
	if ($result && $result->num_rows > 0) {
		echo "<div class='row'>";
		echo "<center>";
		echo "<h2>Clients</h2>";
		echo "<table>";
		echo "<tr><th>Name</th><th></th><th></th></tr>";
		while ($row = $result->fetch_assoc())  {
			echo "<tr>";
			//Output FirstName and LastName
  		echo "<td style='text-align:center'>"." ".$row['FirstName']." ".$row['LastName']."</td>";
			echo "<td>&nbsp;<a href = 'editClient.php?id=".urlencode($row["PersonID"])."'>Edit</a>&nbsp;&nbsp;</td>";
			echo "<td>&nbsp;<a href = 'deleteClient.php?id=".urlencode($row["PersonID"])." ' onclick='return confirm('Are you sure?');'>Delete</a>&nbsp;&nbsp;</td>";



			echo "</tr>";
		}
		echo "</table>";
		echo "<br /><br /><a href='createClientAccount.php'>Add a person</a>";

		echo "</center>";
		echo "</div>";
	}
// /************       Uncomment Once Code Completed For This Section  ********************/
?>

<?php  new_footer("Who's Who", $mysqli); ?>
