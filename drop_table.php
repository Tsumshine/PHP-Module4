<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_password = "pass1234";
	$conn = mysql_connect($db_host,$db_user,$db_password);

	if(!$conn){
		die("Could not connect: " . mysql_error());
	}
	echo "Connected successfully<br>";
	
	mysql_select_db('student_details');
	$sql = "DROP TABLE student;";
	$retval = mysql_query($sql,$conn);
	if(!$retval){
		die("Could not drop table " . mysql_error());
	}
	echo "Table dropped successfully<br>";
	mysql_close($conn);
?>