<!doctype html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>gmail寄信測試</title>
	</head>
		<?php
			require ("class.phpmailer.php");  
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->CharSet = "UTF-8";
			$mail->SMTPSecure = "ssl"; // Gmail的SMTP主機需要使用SSL連線   
			$mail->Host = "smtp.gmail.com"; //Gamil的SMTP主機   
			//這幾行是必須的
			
			$mail->Username = "will830508135@gmail.com";
			$mail->Password = "willy8358451";
			//這邊是你的gmail帳號和密碼
			
			
			
			$mail->From = "tobyreallygameac@gmail.com";//postmaster@localhost
			$mail->FromName = "張傑程";
			//$mail->FromName = mb_encode_mimeheader("張傑程", "UTF-8");
			// 寄件者名稱(你自己要顯示的名稱)
			$webmaster_email = "tobyreallygameac@gmail.com"; 
			//回覆信件至此信箱


			$email="vthuang001@gmail.com";
			// 收件者信箱
			$name="劉以勒";
			// 收件者的名稱or暱稱
			//$mail->From = $webmaster_email;


			$mail->AddAddress($email,$name);
			$mail->AddReplyTo($webmaster_email,"Squall.f");
			//這不用改

			$mail->WordWrap = 50;
			//每50行斷一次行

			//$mail->AddAttachment("/XXX.rar");
			// 附加檔案可以用這種語法(記得把上一行的//去掉)

			$mail->IsHTML(true); // send as HTML

			//$mail->Subject = iconv("big5","UTF-8","[STS]教學測試用信件"); 
			$mail->Subject = "[教學用途]緊急助教開會通知信";
			// 信件標題
			$mail->Body = "
			<h3>請各助教在開到此信後盡快回復<br>
			對於期末成績計算方式有所更動，需要大家一同討論，請回復能否出席會議<br>
			地點:GameLab<br>
			日期:6/17<br>
			時間:12:00<br>
			</h3><h6 align=right>這是假的</h6>";
			//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
			$mail->AltBody = "這個到底要幹嘛FDSFSDF"; 
			//信件內容(純文字版)

			if(!$mail->Send()){
			echo "寄信發生錯誤：" . $mail->ErrorInfo;
			//如果有錯誤會印出原因
			}
			else{ 
			echo "寄信成功";
			}
		?>
		<!--<script language="javascript">
		setTimeout("self.location.reload();",5000);
		</script>-->   
</html>
	