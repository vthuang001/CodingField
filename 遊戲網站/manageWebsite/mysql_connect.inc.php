<html>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php
		$db_server = "127.0.0.1";
		$db_name = "coding";
		$db_user = "GAMELab";
		$db_passwd = "GAMELab";
		
		if(!mysqli_connect($db_server, $db_user, $db_passwd,$db_name))
				die("無法對資料庫連線");
		else
		{
			$mysqli = new mysqli($db_server, $db_user, $db_passwd,$db_name);
			mysqli_set_charset($mysqli, "utf8") ;
		}
	?> 
</html>