<html>
<title> Display data </title>
<style type = "text/css">
body { background-image: url("750.jpg");
	
  } 
h2 { text-align: center; color: #CCC; }
a {
  display: block;
  text-decoration: none;
  width: 100%;
  height: 100%;
  color: #999;
}

a:hover { color: #777; }

/* NAVIGATION */
.navigation {
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
  margin: 20px auto;
  background: #95C11F;
}

.navigation, .navigation a.main {
  border-radius: 4px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
}

.navigation:hover, .navigation:hover a.main {
  border-radius: 4px 4px 0 0;
  -webkit-border-radius: 4px 4px 0 0;
  -moz-border-radius: 4px 4px 0 0;
}

.navigation a.main {
  display: block; 
  height: 40px;
  font: bold 15px/40px arial, sans-serif; 
  text-align: center; 
  text-decoration: none; 
  color: #FFF;  
  -webkit-transition: 0.2s ease-in-out;
  -o-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
}

.navigation:hover a.main {
  color: rgba(255,255,255,0.6);
  background: rgba(0,0,0,0.04);
}

.navigation li { 
  width: 250px; 
  height: 40px;
  background: #F7F7F7;
  font: normal 12px/40px arial, sans-serif !important; 
  color: #999;
  text-align: center;
  margin: 0;
  -webkit-transform-origin: 50% 0%;
  -o-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transform: perspective(350px) rotateX(-90deg);
  -o-transform: perspective(350px) rotateX(-90deg);
  transform: perspective(350px) rotateX(-90deg);
  box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
  -webkit-box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
  -moz-box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
}

.navigation li:nth-child(even) { background: #F5F5F5; }
.navigation li:nth-child(odd) { background: #EFEFEF; }

.navigation li.n1 { 
  -webkit-transition: 0.2s linear 0.8s;
  -o-transition: 0.2s linear 0.8s;
  transition: 0.2s linear 0.8s;
}
.navigation li.n2 {
  -webkit-transition: 0.2s linear 0.6s;
  -o-transition: 0.2s linear 0.6s;
  transition: 0.2s linear 0.6s;
}
.navigation li.n3 {
  -webkit-transition: 0.2s linear 0.4s;
  -o-transition: 0.2s linear 0.4s;
  transition: 0.2s linear 0.4s;
}
.navigation li.n4 { 
  -webkit-transition:0.2s linear 0.2s;
  -o-transition:0.2s linear 0.2s;
  transition:0.2s linear 0.2s;
}
.navigation li.n5 {
  border-radius: 0px 0px 4px 4px;
  -webkit-transition: 0.2s linear 0s;
  -o-transition: 0.2s linear 0s;
  transition: 0.2s linear 0s;
}

.navigation:hover li {
  -webkit-transform: perspective(350px) rotateX(0deg);
  -o-transform: perspective(350px) rotateX(0deg);
  transform: perspective(350px) rotateX(0deg);
  -webkit-transition:0.2s linear 0s;
  -o-transition:0.2s linear 0s;
  transition:0.2s linear 0s;
}
.navigation:hover .n2 {
  -webkit-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.navigation:hover .n3 {
  -webkit-transition-delay: 0.4s;
  -o-transition-delay: 0.4s;
  transition-delay: 0.4s;
}
.navigation:hover .n4 {
  transition-delay: 0.6s;
  -o-transition-delay: 0.6s;
  transition-delay: 0.6s;
}
.navigation:hover .n5 {
  -webkit-transition-delay: 0.8s;
  -o-transition-delay: 0.8s;
  transition-delay: 0.8s;
}

</style>
</head>
<body>
<?php

if (isset($_POST['submit'])){

include('con.php');
$sql="SELECT * FROM Login WHERE id='$_POST[id]' AND password='$_POST[password]'";
$res = mysqli_query($dbcon, $sql) or die('error');
if(mysqli_num_rows($res)==1)
{
	if($_POST["Select"]=="Student")
	{
	echo "<h2>WELCOME  STUDENT</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
  	echo "<li class=n1><a href=disp_std.php>DISPLAY LIST OF DEVICES</a></li>";
  	echo "<li class=n2><a href=display_student.php>DISPLAY LIST OF STUDENTS</a></li>";
	echo "<li class=n3><a href=display_ta.php>DISPLAY TA LIST</a></li>";
	echo "<li class=n3><a href='device_control.php'> SWITCH ON Devices</a></li>";
	echo "<li class=n3><a href='device_off.php'> SWITCH OFF Devices</a></li></ul>";		
	}
	else if($_POST["Select"]=="Faculty")
	{
	echo "<h2>WELCOME  FACULTY</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
  	echo "<li class=n1><a href='disp_fac.php'> Display Devices</a></li>";
  	echo "<li class=n2><a href='disp_faculty.php'> Display Faculty</a></li>";
	echo "<li class=n3><a href='display_student.php'> Display Student</a></li>";
	echo "<li class=n3><a href='display_ta.php'> Display TA</a></li>";
	echo "<li class=n3><a href='insert_student.php'> Insert Student</a></li>";
	echo "<li class=n3><a href='insert_ta.php'> Insert TA</a></li>";
	echo "<li class=n3><a href='device_control.php'> SWITCH ON Devices</a></li>";
	echo "<li class=n3><a href='device_off.php'> SWITCH OFF Devices</a></li></ul>";			
	}
	else if($_POST["Select"]=="Admin")
	{
	echo "<h2>WELCOME  ADMIN</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
  	echo "<li class=n1><a href='disp.php'> Access Control</a></li>";
  	echo "<li class=n2><a href='disp_faculty.php'> Display Faculty</a></li>";
	echo "<li class=n3><a href='display_student.php'> Display Student</a></li>";
	echo "<li class=n3><a href='display_ta.php'> Display TA</a></li>";
	echo "<li class=n3><a href='insertform.php'> Insert Device</a></li>";
	echo "<li class=n3><a href='insert_faculty.php'> Insert Faculty</a></li>";
	echo "<li class=n3><a href='insert_student.php'> Insert student</a></li>";
	echo "<li class=n3><a href='insert_ta.php'> Insert TA</a></li>";
	echo "<li class=n3><a href='insert_maintain.php'> Insert Maintain Staff</a></li>";
	echo "<li class=n3><a href='delete_student.php'> Delete Student</a></li>";
	echo "<li class=n3><a href='delete_faculty.php'> Delete Faculty</a></li>";
	echo "<li class=n3><a href='delete_ta.php'> Delete TA</a></li>";
	echo "<li class=n3><a href='delete_maintain.php'> Delete Maintain Staff</a></li>";
	echo "<li class=n3><a href='delete_device.php'> Delete Device</a></li>";
	echo "<li class=n3><a href='device_control.php'> SWITCH ON Devices</a></li>";
	echo "<li class=n3><a href='device_off.php'> SWITCH OFF Devices</a></li></ul>";			
	}	
	else
	{
	echo "<h2>WELCOME  STAFF</h2>";
	echo "<ul class=navigation>";
  	echo "<a class=main >SELECT AN OPTION</a>";
	echo "<li class=n1><a href='insert_maintain.php'> Insert Maint. Staff</a></li>";
  	echo "<li class=n2><a href='display_maintain_staff.php'> Display Maint. Staff</a></li></ul>";
	}
}
else
{
	echo "<span style='color:#AFA;text-align:center;'>INVALID PASSWORD</span>";
}
mysqli_close($dbcon);
}
?>
