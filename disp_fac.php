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


<body background="">

<?php

include('con.php');
$get = "SELECT * FROM Access WHERE User='F' OR User='SF'";
$data = mysqli_query($dbcon, $get) or die('error');

echo "<table class=GeneratedTable>";
echo "<thead><tr><th><b>DEVICE_ID</th><th><b>DEVICE_NAME</th><th><b>FUNCTION</th><th><b>DEVICE_STATUS</th></tr></thead></b>";

while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  //Fetching table contents one by one
{
         echo "<tbody>";
	echo "<tr><td>";
	echo $row['device_id'];
	echo "</td><td>";
	echo $row['device_name'];
	echo "</td><td>";
	echo $row['Function'];
	echo "</td><td>";
	echo $row['device_status'];
	echo "</td></tr>";
	echo "</tbody>";
}

echo "</table>";
	
?>

</body>
</html>
