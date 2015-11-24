<!DOCTYPE html>
<html lang="en">
	
  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  <?php
	$account=$_SESSION['account'];
    $sql = "SELECT * From `account` where `account`='$account'";
	$result = mysqli_query($DB,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$email=$row["email"];
		if($row["yn"]!='1')
		{
  ?>
	  <style>
	  hr {
		border:0; height:2px; background-color:#c465f4;
		color:#c465f4;
		}
	  </style>
	  <script type="text/javascript">
			function check()
			{	
				if(reg.myInputMail.value == "" || reg.myInputMail2.value == "") 
				{
					alert("請輸入電子郵件信箱。");
				}
				else if(reg.myInputMail.value != reg.myInputMail2.value) 
				{
					alert("兩次電子郵件信箱輸入不相同。");
				}
				else if(reg.myInputPassword.value == "") 
				{
					alert("請輸入密碼。");
				}
				<!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
				else reg.submit();
			 }
		</script>
	  <!-- Carousel items -->
	  <body>
		<!--導覽列呼叫-->
		<?php require_once 'navbar.php' ?>
		<br/><br/><br/><br/>
		
	  <!-- Carousel items -->
		<div class="container">
			<div class="col-md-8 col-md-offset-2" >
				<img src="../image/stepArror2_email_step1.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;登入&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;請確認信箱資訊&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;認證信箱&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
				<a><hr/></a>
				<form name="reg" method="POST" action="connect_toEmailStep3.php">
				
					<table style="border:5px #cccccc solid;" width="100%">
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<font>&nbsp;&nbsp;&nbsp;</font><img src="../image/warning.png" style="height: 20px; width: 20px;"/><font style="color:red">&nbsp;&nbsp;您的電子郵箱尚未認證：</font>
							<font>請依照以下步驟完成電子郵件的認證，方能開啟更多帳號功能。</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					</table>
					
					<table border="0" width="100%">
					<tr>
						<td colspan="3">
							<?php echo "親愛的".$_SESSION['account']."您好!"; ?>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td colspan="3">
							<font style="font-weight:bold">Step1.&nbsp;&nbsp;&nbsp;&nbsp;請輸入您的信箱，若您需要更改信箱資料，請自下方的框格內更改。</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td width="10%">
						<td>電子郵件信箱(E-mail)<br/></td>
						<td><input type="text" class="form-control" value="<?php echo $email?>"  name="myInputMail" style="width:300px"/></td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td width="10%">
						<td>請重新輸入電子郵箱地址(E-mail double check)</td>
						<td><input type="text" class="form-control" placeholder="請再次輸入電子信箱。" name="myInputMail2" style="width:300px"/></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td colspan="3">
							<font style="font-weight:bold">Step2.&nbsp;&nbsp;&nbsp;&nbsp;為了您的帳戶安全，請輸入密碼。</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td width="10%">
						<td>密碼(password)<br/></td>
						<td><input type="password" class="form-control" placeholder="請輸入密碼。" name="myInputPassword" style="width:300px"/>
						<?php
							if(@$_GET["passError"]!=null)
								$passError  = $_GET["passError"];
							else
								$passError=0;

							if($passError==1)
							{
								echo "<font color="."red"."> 密碼錯誤。</font>";
							}
						?>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="下一步&nbsp;&nbsp;&nbsp;&nbsp;>" style="width:100px ;background-color:#c465f4"/><br>
						</td>
					</tr>
					</table>
					
				</form>
			</div>
		</div></br></br>
	  </body>
	<?php
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
				<img src="../image/stepArror_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;請確認信箱資訊&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;認證信箱&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
				<a><hr/></a>
					<table style="border:5px #cccccc solid;" width="100%">
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<font>&nbsp;&nbsp;&nbsp;</font><img src="../image/check.png" style="height: 20px; width: 20px;"/>
							<font>您的電子郵箱已經認證成功。</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					</table>
			</div>
		</div></br></br>
	  </body>
	<?php
		}
	}
	?>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>