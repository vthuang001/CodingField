<?php	    
	$hostname = '127.0.0.1';
	$port = '3306';
	$database = 'coding_field';
	$username = 'GAMELab';
	$password = 'GAMELab';
	$check=0;
	$DB = new mysqli($hostname, $username, $password, $database, $port);
	if($DB->connect_errno)
	{
		printf("Connect failed : %s\n",$DB->connect_error);
		exit();
	}
	mysqli_set_charset($DB,"utf8");
?>