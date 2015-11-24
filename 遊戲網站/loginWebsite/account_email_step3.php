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
		$email = $row["email"];
		if($row["code"]==null)
		{
			require_once 'createGUID.php';
			$sql_update = "Update `account` Set `code`='$command' Where `account`='$account'";
			mysqli_query($DB,$sql_update);
		}
	}
	?>
    <?php
        include("../include/gmail/class.phpmailer.php"); //匯入PHPMailer類別       
		
		$sql = "SELECT * From `account` where `account`='$account'";
		$result = mysqli_query($DB,$sql);
		while($row = mysqli_fetch_assoc($result))
		{
			$command = $row["code"];
		}
		
		$checkEmail = "http://127.0.0.1/_codingField/loginWebsite/account_email_step4.php?command=".$command;
		
		$mail= new PHPMailer(); //建立新物件        
		$mail->IsSMTP(); //設定使用SMTP方式寄信        
		$mail->SMTPAuth = true; //設定SMTP需要驗證        
		$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線   
		$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機        
		$mail->Port = 465;  //Gamil的SMTP主機的SMTP埠位為465埠。        
		$mail->CharSet = "UTF-8"; //設定郵件編碼        
		    
		$mail->Username = "codingfieldproject@gmail.com"; //設定驗證帳號   
		$mail->Password = "vcmm2015";		//設定驗證密碼 
		$mail->From = "codingfieldproject@gmail.com"; //設定寄件者信箱       
		$mail->FromName = "口盯目製作團隊"; //設定寄件者姓名             
		
		
		$mail->Subject = "[口盯目製作團隊] 電子信箱認證"; //設定郵件標題        
		$mail->Body = $name." 您好! "; //設定郵件內容 
		$mail->Body .= "<br><br>感謝您認證口盯目~Coding Field~的遊戲帳戶";
		$mail->Body .= "<br><br>請點擊下方連結，完成您的信箱驗證:";
		$mail->Body .= "<br><br><a href=".$checkEmail." >".$checkEmail."</a>";
		$mail->Body .= "<br><br><br><br>謝謝您，請盡情享受遊戲快樂！ ";	
		$mail->Body .= "<br>- 口盯目製作團隊 ";	
		$mail->IsHTML(true); //設定郵件內容為HTML    		
		$mail->AddAddress($email, $account); //設定收件者郵件及名稱        
		$mail->Send();
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
			<img src="../image/stepArror_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;認證信箱&nbsp;&nbsp;&nbsp;</font>
			<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
			<a><hr/></a>
			
				
			<table border="0" width="100%">
			<tr>
				<td>
					<font style="font-weight:bold; color:#00DD00;">&nbsp;&nbsp;&nbsp;&nbsp;電子郵件已發送到您電子信箱，請點擊認證。</font>
				</td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
				<td>
					<font style="font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;如果您尚未收到認證電子郵件，請點擊下方按鈕重新發送。</font>
				</td>
			</tr>
			<tr><td><br/><br/><br/></td></tr>
			<tr align="center">
				<td>
					<button class="btn btn-primary" type="button" onClick="javascript:window.location.reload()" style="width:100px ;background-color:#c465f4">重新發送</button>
				</td>
			</tr>
			</table>
				
		</div>
	</div></br></br>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>