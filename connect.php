<!Doctype html>
<html>
<head>
	<title>Connecting to database</title>
</head>
<body>
	<?php
		$con=mysql_connect('localhost','root','!MV13cs078');
		$db=mysql_select_db('ESE537');
		
		if($con)
		{
			echo 'Successfully connected';
		}
		else
		{
			echo 'Not connetced';
		}
		if(!db)
		{
			echo 'No database present';
		}
		else
		{
			echo 'database accessed';
		}
	?>
</body>
</html>
		

