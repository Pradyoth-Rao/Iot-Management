<html>
<head>
<title> Display data </title>
<style type = "text/css">
html {background: url("disp.png") no-repeat center center fixed #000; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
 width: 100%; height:100%; overflow:hidden; }
table.GeneratedTable {
  width: 100%;
  background-color: #08abf7;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #13110a;
  border-style: solid;
  color: #170909;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #13110a;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #1428f2;
}
</style>
</head>


<body>
<?php

include('con.php');
$get = "SELECT * FROM maintain_staff";
$data = mysqli_query($dbcon, $get) or die('error');

echo "<table class=GeneratedTable>";
echo "<tr><th><b>EMPLOYEE_ID</th></b><th><b>NAME</th></b><th><b>WORKING_HOURS</th></tr></b>";

while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  //Fetching table contents one by one
{
	echo "<tbody>";
	echo "<tr><td>";
	echo $row['employee_id'];
	echo "</td><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['working_hours'];
	echo "</td></tr>";
	echo "</tbody>";
}

echo "</table>";
	
?>

</body>
</html>
