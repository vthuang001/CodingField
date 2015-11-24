<html>
	<?php require_once 'header.php' ?>
	<?php include("../config.php"); ?>
	<meta charset="UTF-8" />
	
	<?php require_once 'navbar.php' ?>
	<?php
		$account = $_SESSION['account'];
		$password = $_POST['myInputPassword'];
		$email = $_POST['myInputMail'];

		$sql = "SELECT * FROM account where account = '$account'";
		$result = mysqli_query($DB,$sql);
		$row = mysqli_fetch_row($result);

		//判斷帳號與密碼
		if($account != null && $password != null && $row[0] == $account && $row[1] == $password)
		{
			//上傳更改後的信箱
			$sql_update = "Update `account` Set `email`='$email' Where `account`='$account'";
			mysqli_query($DB,$sql_update);
			
			//若確認無誤即可跳轉至step.3
			header("Location: account_email_step3.php"); 
			exit;
		}
		else
		{
			header("Location: account_email_step2.php?passError=1"); 
			exit;
		}
	?>
</html>