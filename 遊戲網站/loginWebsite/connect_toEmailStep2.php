<html>
	<?php require_once 'header.php' ?>
	<?php include("../config.php"); ?>
	<meta charset="UTF-8" />
	
	<?php require_once 'navbar.php' ?>
	<?php
		$account = $_POST['myInputAccount'];
		$password = $_POST['myInputPassword'];

		$sql = "SELECT * FROM account where account = '$account'";
		$result = mysqli_query($DB,$sql);
		$row = mysqli_fetch_row($result);

		//判斷帳號與密碼
		if($account != null && $password != null && $row[0] == $account && $row[1] == $password)
		{
			//將帳號寫入session，方便驗證使用者身份
			$_SESSION['account'] = $account;
			header("Location: account_email_step2.php?account=".$_SESSION['account'].""); 
			exit;
		}
		else
		{
			header("Location: account_email_step1.php?passError=1"); 
			exit;
		}
	?>
</html>