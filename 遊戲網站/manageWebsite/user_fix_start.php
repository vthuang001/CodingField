<html>
	<?php
		require('header.php');
		
		require("../config.php");
	?>
	<script>
	<!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {	
			if(reg.password.value == "") 
            {
                alert("請輸入密碼。");
            }
			else if(reg.email.value == "") 
            {
                alert("請輸入信箱。");
            }
			else if(!reg.gender[0].checked && !reg.gender[1].checked) 
            {
                alert("請選擇性別。");
            }
			else if(!reg.yn[0].checked && !reg.yn[1].checked) 
            {
                alert("請選擇是否驗證完畢。");
            }
            <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
            else reg.submit();
         }
    </script>
	<body>
		<?php 
			if(isset($_SESSION['account']))
			{
				require('navbar.php');
				echo '<div class="container">';
				echo '<div class="btn-group btn-group-justified">';
				  echo '<a href="user_fix.php" class="btn btn-primary">修改使用者資料</a>';
				  echo '<a href="user_delete.php" class="btn btn-success">刪除使用者資料</a>';
				  echo '<a href="user_insert.php" class="btn btn-info">新增使用者資料</a>';
				echo  '</div>';
				echo '</div>';
				
				$account=$_POST["uid"];
				$find=0;
				
				$sql = "SELECT * FROM `account` where `account` = '$account' ";
				$result = mysqli_query($DB,$sql);
				while($row = mysqli_fetch_array($result))
				{
					$find = 1;
					$account=$row['account'];
					$password=$row['password'];
					$email=$row['email'];
					$gender=$row['gender'];
					$code=$row['code'];
					$yn=$row['yn'];
				}
				if($find==0)
				{
				?>
					<div class="container">
					<br/>
						<div class="alert alert-danger">
						  <strong>錯誤！</strong> 找不到目標帳號，請重新輸入。
						</div>
					</div>
				<?php
				}
				else
				{
				?>
					<br/>
					<div class="container">
						<form name="reg" method="POST" action="user_fix_finish.php">
						<table border="1" width="100%">
						<tr>
							<td colspan="2" bgcolor="#666666"> 
								<h2 align="center"><font color="#FFFFFF">修改使用者資料</font></h2>
							</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td><br/>帳號<br/><br/></td>
							<td>
								<br/><?php echo $account;?><br/>
							</td>
						</tr>
						<tr>
							<td><br/>密碼<br/><br/></td>
							<td>
								<br/><input type="text" class="form-control" placeholder="密碼" name="password" value="<?php echo $password;?>"  style="width:50%"/><br/>
							</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td><br/>信箱<br/><br/></td>
							<td>
								<br/><input type="text" class="form-control" placeholder="標題" name="email" value="<?php echo $email;?>"  style="width:50%"/><br/>
							</td>
						</tr>
						<tr>
							<td><br/>性別<br/><br/></td>
							<td>
							<br/>
							<?php
							if($gender == "M")
							{
							?>
								<label class="radio-inline"><input type="radio" name="gender" value="M" checked="checked">男</label>
								<label class="radio-inline"><input type="radio" name="gender" value="F">女</label>
							<?php
							}
							else if($gender = "F")
							{
							?>
								<label class="radio-inline"><input type="radio" name="gender" value="M">男</label>
								<label class="radio-inline"><input type="radio" name="gender" value="F" checked="checked">女</label>
							<?php
							}
							else
							{
							?>
								<label class="radio-inline"><input type="radio" name="gender" value="M">男</label>
								<label class="radio-inline"><input type="radio" name="gender" value="F">女</label>
							<?php
							}
							?>
							<br/>
							</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td><br/>驗證碼<br/><br/></td>
							<td>
								<br/><input type="text" class="form-control" placeholder="標題" name="code" value="<?php echo $code;?>"  style="width:50%"/><br/>
							</td>
						</tr>
						<tr bgcolor="#EEEEEE">
							<td><br/>驗證完畢<br/><br/></td>
							<td><br/>
							
							<?php
							if($yn == "1")
							{
							?>
								<label class="radio-inline"><input type="radio" name="yn" value="1" checked="checked">是</label>
								<label class="radio-inline"><input type="radio" name="yn" value="0">否</label>
							<?php
							}
							else if($yn == "0")
							{
							?>
								<label class="radio-inline"><input type="radio" name="yn" value="1">是</label>
								<label class="radio-inline"><input type="radio" name="yn" value="0" checked="checked">否</label>
							<?php
							}
							?>
							<br/></td>
						</tr>
						
						</table>
						<br/>
						<input type="hidden" name="account"  value="<?php echo $account; ?>"/>
						<input type="button" class="btn btn-primary" onclick="history.back()" value="返回上一頁" style="width:100px" />
						<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="送出" style="width:100px" /><br>

						</form>
					</div>
				
				<?php
				}
				require_once 'DBdisconnect.php';
			}
			else
			{
				echo '您無權限觀看此頁面!';
				require_once 'DBdisconnect.php';
				echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
			}
			
		?>
	</body>
</html>