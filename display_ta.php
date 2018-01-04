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
$get = "SELECT * FROM ta";
$data = mysqli_query($dbcon, $get) or die('error');

echo "<table class=GeneratedTable>";
echo "<tr><th><b>TA_ID</th></b><th><b>TA_NAME</th></b><th><b>TA_OFFICE_HOURS</th></b><th><b>TA_ROOM_NUMBER</th></tr></b>";

while($row = mysqli_fetch_array($data,MYSQLI_ASSOC))  //Fetching table contents one by one
{
	echo "<tbody>";
	echo "<tr><td>";
	echo $row['ta_id'];
	echo "</td><td>";
	echo $row['ta_name'];
	echo "</td><td>";
	echo $row['ta_office_hours'];
	echo "</td><td>";
	echo $row['ta_room_number'];
	echo "</td></tr>";
	echo "</tbody>";
}

echo "</table>";
	
?>

</body>
</html>
