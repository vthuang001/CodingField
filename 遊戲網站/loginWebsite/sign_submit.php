<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
	
	<?php
			$myAccount  = mysqli_real_escape_string($DB, $_POST["myInputAccount"]);
			$myPassword = mysqli_real_escape_string($DB, $_POST["myInputPassword"]);
			
			$mySex = mysqli_real_escape_string($DB, $_POST["myInputSex"]);
			$myMail  = mysqli_real_escape_string($DB, $_POST["myInputMail"]);

			$sql_query="INSERT INTO `account` (`account`, `password`, `email`, `gender`) VALUES (";
			$sql_query .= "'".$myAccount."',";
			$sql_query .= "'".$myPassword."',";
			$sql_query .= "'".$myMail."',";
			$sql_query .= "'".$mySex."')";
			$result = mysqli_query($DB,$sql_query);
			
			$sql_query="INSERT INTO `user_data` (`account`) VALUES ('$myAccount')";
			$result = mysqli_query($DB,$sql_query);
	?>
  <!-- Carousel items -->
  <body>
    <!--導覽列呼叫-->
	<!--<?php require_once 'navbar.php' ?>-->
	<br/><br/>
	
  <!-- Carousel items -->
	<div class="container">
		
		<tr><td><br></td></tr>
		<div class="col-md-8 col-md-offset-2" >
			<form name="reg" method="POST" action="drawing_sign_check.php">
				<table border="0" width="100%">
				<tr>
					<td colspan="2"> 
						<h2 align="center">感謝您註冊帳號!</h2>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2">
						為了確保您的帳號安全，請參考以下說明：
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr valign="top">
					<td width="10%">
						1.
					</td>
					<td width="90%">
						<p>建議您馬上進行電子信箱認證，以確保關於合約規範之所有事項通知送達，並提高帳號安全性，且忘記密碼時才可藉由此信箱取回密碼。</p>
						<p><font color="red">請注意!!! 如帳號未完成電子信箱驗證，將無法收取系統所寄發之信件與通知。</font></p>
						<br/>
						<p><a href="account_email_step1.php"> >> 現在就進行信箱認證 </a></p>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr valign="top">
					<td width="10%">
						2.
					</td>
					<td width="90%">
						<p>「 帳號實名制」的註冊方式提升您的帳號整體安全，客服人員將會以您所填寫的資料作核對。為維護您的個人權益，請填寫正確資料。</p>
						<br/>
						<p> >> 現在就填寫會員資料 </p>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr>
					<td colspan="2" align="center">
						<a href="login.php" class="btn btn-primary" role="button">立即登入</a>
						<a>&nbsp;&nbsp;&nbsp;</a>
						<a href="index.php" class="btn btn-primary" role="button">返回首頁</a>
					</td>
				</tr>
		    </form>
		</div>
	</div></br></br>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>