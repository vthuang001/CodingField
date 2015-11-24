<!DOCTYPE html>
<html lang="en">
	
  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  <style>
  hr {
	border:0; height:2px; background-color:#c465f4;
	color:#c465f4;
	}
  </style>
    <script type="text/javascript">
        function check()
        {	
            if(reg.myInputAccount.value == "") 
            {
                alert("請輸入帳號。");
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
	<!--<?php require_once 'navbar.php' ?>-->
	<br/><br/><br/><br/>
	
  <!-- Carousel items -->
	<div class="container">
		<div class="col-md-8 col-md-offset-2" >
			<img src="../image/stepArror_email_step1.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold">&nbsp;登入&nbsp;&nbsp;&nbsp;</font>
			<img src="../image/stepArror2_email_step2.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;修改資料&nbsp;&nbsp;&nbsp;</font>
			<img src="../image/stepArror2_email_step3.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;確認資料&nbsp;&nbsp;&nbsp;</font>
			<img src="../image/stepArror2_email_step4.png" style="height: 40px; width: 60px;" /><font size="5" style="font-weight:bold; color:#D9D2E9">&nbsp;成功</font>
			<a><hr/></a>
			<form name="reg" method="POST" action="connect_toDataStep2.php">
				<table border="0" width="100%">
				<tr>
					<td> 
						<h3 align="center"><font>請先登入</font></h3>
					</td>
				</tr>
				<tr><td><br/></td></tr>
				<tr align="center">
					<td>
						<input type="text" class="form-control" placeholder="請輸入帳號 (Please input your Account.)" name="myInputAccount" id="account" style="width:400px" onkeyup="checkRegAcc()">
						<span name="checkuser" id="msg_user_name"></span>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr align="center">
					<td>
						<input type="password" class="form-control" placeholder="請輸入密碼 (Please input your Password.)" name="myInputPassword"  style="width:400px"/>
						<?php
							if(@$_GET["passError"]!=null)
								$passError  = $_GET["passError"];
							else
								$passError=0;
							
							if($passError==1)
							{
								echo "<font color="."red"."> 登入失敗：帳號或密碼錯誤。</font>";
							}
						?>
					</td>
				</tr>
				<tr><td><br></td></tr>
				<tr align="center">
					<td>
						<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="登入>" style="width:400px ;background-color:#c465f4"/><br>
					</td>
				</tr>
				</table>
				
		    </form>
		</div>
	</div></br></br>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>