<html>
 <!--This Page pertains to the form that will display to create the new Client -->
<head>
  <title> Create Employee Account </title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
<div class="container">
    <form action = "insertEmployee.php" method="POST">
        <label> Create Employee Account </label>

        <label> First Name</label>
        <input type="text" id="first" name="user" />

        <label> Last Name </label>
        <input type="text" id="last" name="user" />
  
        <label> UserName: </label>
        <input type="text" id="EmployeeID" name="user" />
      
      
        <label> Password:</label>
        <input type="password" id="pass" name="pass" />
      
      
        <label> Confirm Password:</label>
        <input type="password" id="pass" name="pass" />
      
      
        <label> Tier 1 </label>
        <input type="checkbox" id="btn"  value="Tier 1">
      
      
        <label> Tier 2 </label>
        <input type="checkbox" id="btn"  value="Tier 2">
      
      
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
