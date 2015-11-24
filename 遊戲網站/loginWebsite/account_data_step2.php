<!DOCTYPE html>
<html lang="en">
	
  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  <?php
	$account=$_SESSION['account'];
	$sql = "SELECT * From `user_data` where `account`='$account'";
	$result = mysqli_query($DB,$sql);
	while($row = mysqli_fetch_assoc($result))
	{
		$uid =$row["uid"];
		$birthday=$row["birthday"];
		$name=$row["name"];
	}
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
				<img src="../image/stepArror_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;修改資料&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;確認資料&nbsp;&nbsp;&nbsp;</font>
				<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
				<a><hr/></a>
				<form name="reg" method="POST" action="connect_toEmailStep3.php">
				
					<table style="border:5px #cccccc solid;" width="100%">
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<font>&nbsp;&nbsp;&nbsp;</font><img src="../image/warning.png" style="height: 20px; width: 20px;"/>
							<font>請在下方填入或修改您的會員資料。</font>
						</td>
					</tr>
					<tr><td><br/></td></tr>
					</table>
					<tr><td><br/></td></tr>
					<table border="0" width="100%">
					<tr>
						<td width="10%">
						<td>姓名(Name)<br/></td>
						<td><input type="text" class="form-control" value="<?php echo $name;?>"  name="myInputName" style="width:300px"/></td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td width="10%">
						<td>身份證字號(Uid/Passport)<br/></td>
						<td><input type="text" class="form-control" value="<?php echo $uid;?>"  name="myInputUid" style="width:300px"/></td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td width="10%">
						<td>生日(birthday)<br/></td>
						<td><input type="text" class="form-control" value="<?php echo $birthday;?>"  name="myInputBirthday" style="width:300px"/></td>
					</tr>
					<tr><td><br/></td></tr>
					<tr>
						<td>
							<input class="btn btn-primary dropdown-toggle" type="submit" value="下一步&nbsp;&nbsp;&nbsp;&nbsp;>" style="width:100px ;background-color:#c465f4"/><br>
						</td>
					</tr>
					</table>
					
				</form>
			</div>
		</div></br></br>
	  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>