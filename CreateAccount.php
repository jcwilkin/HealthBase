<html>
 <!--This Page pertains to the form that will display to create the new Client -->
<head>
  <title> Create Employee Account </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div id = "frm">
    <form action = "insertEmployee.php" method="POST">
      <p>
        <label> Create Employee Account </label>
      </p>
      <p>
        <label> First Name</label>
        <input type="text" id="first" name="user" />
      </p>

      <p>
        <label> Last Name </label>
        <input type="text" id="last" name="user" />
      </p>

      <p>
        <label> UserName: </label>
        <input type="text" id="EmployeeID" name="user" />
      </p>
      <p>
        <label> Password:</label>
        <input type="password" id="pass" name="pass" />
      </p>
      <p>
        <label> Confirm Password:</label>
        <input type="password" id="pass" name="pass" />
      </p>
      <p>
        <label> Tier 1 </label>
        <input type="checkbox" id="btn"  value="Tier 1">
      </p>
      <p>
        <label> Tier 2 </label>
        <input type="checkbox" id="btn"  value="Tier 2">
      </p>
      <p>
        <label> Tier 3 </label>
        <input type="checkbox" id="btn"  value="Tier 3">
      </p>
      <p>
        <input type="submit" id="btn" value="Submit" />
      </p>
    </form>
  </div>
</body>


</html>
