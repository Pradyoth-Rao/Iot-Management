<?php

if (isset($_POST['submit'])){

include('con.php');
$sql="SELECT * FROM Login WHERE id='$_POST[id]' AND password='$_POST[password]'";
$res = mysqli_query($dbcon, $sql) or die('error');
if(mysqli_num_rows($res)==1)
{
	if($_POST["Select"]=="Student")
	{
		echo "<b> Welcome Student <br/> ";
		//echo $_POST["Select"] ;
		echo "<a href='disp.php'> Display Devices </a><br/>";
		echo "<a href='display_student.php'> Display Student </a><br/>";
		echo "<a href='display_ta.php'> Display TA </a><br/>";
		
	}
	else if($_POST["Select"]=="Faculty")
	{
		echo "<b> Welcome Faculty <br/> ";
		//echo $_POST["Select"];
		echo "<a href='disp.php'> Display Devices </a><br/>";
		echo "<a href='disp_faculty.php'> Display Faculty </a><br/>";
		echo "<a href='display_student.php'> Display Student </a><br/>";
		echo "<a href='display_ta.php'> Display TA </a><br/>";
		echo "<a href='insert_student.php'> Insert Student </a><br/>";
		echo "<a href='insert_ta.php'> Insert TA </a><br/>";
		echo "<a href='device_control.php'> Devices ON </a><br/>";
		echo "<a href='device_off.php'> Devices OFF </a><br/>";
	}
	else if($_POST["Select"]=="Admin")
	{
		echo "<b> Welcome Admin <br/> ";
		//echo $_POST["Select"];
		echo "<a href='disp.php'> Display Devices </a><br/>";
		echo "<a href='disp_faculty.php'> Display Faculty </a><br/>";
		echo "<a href='display_student.php'> Display Student </a><br/>";
		echo "<a href='display_ta.php'> Display TA </a><br/>";
		echo "<a href='display_maintain_staff.php'> Display Staff </a><br/>";
		echo "<a href='insert_student.php'> Insert Student </a><br/>";
		echo "<a href='insert_ta.php'> Insert TA </a><br/>";
		echo "<a href='insertform.php'> Insert Device </a><br/>";
		echo "<a href='insert_faculty.php'> Insert Faculty </a><br/>";
		echo "<a href='insert_maintain.php'> Insert Maintain Staff </a><br/>";		
		echo "<a href='device_control.php'> Devices ON </a><br/>";
		echo "<a href='device_off.php'> Devices OFF </a><br/>";
	}
	else
	{
		echo "<b> Welcome Staff <br/>";
		echo "<a href='insert_maintain.php'> Insert Stass </a><br/>";
		echo "<a href='display_maintain.php'> Display Staff </a><br/>";
		//echo "Not Student";
	}
}
else
{
	echo "Invalid Password:";
}
mysqli_close($dbcon);
}
?>
