<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  
	
  <!-- Carousel items -->
  <body onload="ShowTime();" >
    <!--導覽列呼叫-->
	<?php require_once 'navbar.php' ?>
	<br/><br/>
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
	<div class="container">
		
		<br/><br/><br/>
		<div class="col-md-8 col-md-offset-2" >
			<form name="reg" method="POST" action="connect.php">
				<table border="0" width="100%">
				<tr>
					<td> 
						<h3 align="center"><font>登入</font></h3>
					</td>
				</tr>
				<tr><td><br/><br/><br/></td></tr>
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
						<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="立刻登入" style="width:400px ;background-color:#FF47D1"/><br>
					</td>
				</tr>
				<tr><td><br/><br/></td></tr>
				<tr align="center">
					<td>
						<a href="sign_start.php">註冊</a>
						<a>&nbsp;&nbsp;&nbsp;</a>
						<a href="#">忘記密碼</a>
					</td>
				</tr>
				</table>
				<br>

		    </form>
		</div>
	</div></br></br>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>