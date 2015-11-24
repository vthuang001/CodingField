<!DOCTYPE html>
<html lang="en">
	
  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  <?php
	$account=$_SESSION['account'];
	$myCommand  = $_GET["command"];
	
    $sql = "SELECT * From `account` where `account`='$account'";
	$result = mysqli_query($DB,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		if($row["code"]==$myCommand)
		{
			$email=$row["email"];
	?>
			<style>
			hr {
			border:0; height:2px; background-color:#c465f4;
			color:#c465f4;
			}
			</style>
			<!-- Carousel items -->
			<body>
			<!--導覽列呼叫-->
			<?php require_once 'navbar.php' ?>
			<br/><br/><br/><br/>
			
			<!-- Carousel items -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2" >
					<img src="../image/stepArror2_email_step1.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;登入&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror2_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;請確認信箱資訊&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;認證信箱&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;成功</font>
					<a><hr/></a>	
					<table style="border:5px #cccccc solid;" width="100%">
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<font>&nbsp;&nbsp;&nbsp;</font><img src="../image/check.png" style="height: 20px; width: 20px;"/>
							<font>恭喜！您帳戶目前安全。 您認證電子郵箱是<?php echo $email; ?></font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					</table>
				</div>
			</div></br></br>
			</body>
	<?php
		//將帳戶更改為已激活
		$sql_update = "Update `account` Set `yn`='1' Where `account`='$account'";
		mysqli_query($DB,$sql_update);
  		}
		else
		{
	?>
			<style>
			hr {
			border:0; height:2px; background-color:#c465f4;
			color:#c465f4;
			}
			</style>
			<!-- Carousel items -->
			<body>
			<!--導覽列呼叫-->
			<?php require_once 'navbar.php' ?>
			<br/><br/><br/><br/>
			
			<!-- Carousel items -->
			<div class="container">
				<div class="col-md-8 col-md-offset-2" >
					<img src="../image/stepArror2_email_step1.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;登入&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror2_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;請確認信箱資訊&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;認證信箱&nbsp;&nbsp;&nbsp;</font>
					<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
					<a><hr/></a>	
					<table style="border:5px #cccccc solid;" width="100%">
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<font>&nbsp;&nbsp;&nbsp;</font><img src="../image/warning.png" style="height: 20px; width: 20px;"/>
							<font>認證碼錯誤! 即將返回首頁......</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					</table>
				</div>
			</div></br></br>
			</body>
			<meta http-equiv="refresh" content="3;URL=index.php">
	<?php
		}
	}
	?>
	
	
  <?php require_once 'DBdisconnect.php' ?>
  
</html>