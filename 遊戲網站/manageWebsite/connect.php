<html>
	<meta charset="UTF-8" />
	<?php 
		//啟用session
		session_start(); 
		//連接資料庫
		include("DBconnect.php"); 
		require("../config.php");
		
	?>
	
	
	<?php
		$account = $_POST['account'];
		$pw = $_POST['pwd'];

		$sql = "SELECT * FROM manager where account = '$account'";
		$result = mysqli_query($DB,$sql);
		$row = mysqli_fetch_row($result);

		//判斷帳號與密碼
		if($account != null && $pw != null && $row[0] == $account && $row[1] == $pw)
		{
				//將帳號寫入session，方便驗證使用者身份
				$_SESSION['account'] = $account;
				echo '登入成功!';
				echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
		}
		else
		{
				echo '登入失敗!';
				echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
		}
	?>
</html>