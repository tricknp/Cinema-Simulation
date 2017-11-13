<?php 
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "cinema";
	
	$con = mysqli_connect($dbhost, $dbuser, $dbpass) or print(mysql_error());
	mysqli_select_db($con, $dbname);
	if (!$con) {
		echo "Error: Database not found";
	}
	
 ?>