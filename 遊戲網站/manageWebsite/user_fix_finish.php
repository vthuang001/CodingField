<html>
	<?php
		require('header.php');
		
		require("../config.php");
	?>
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
				
				$account = mysqli_real_escape_string($DB, $_POST["account"]);
				$password = mysqli_real_escape_string($DB, $_POST["password"]);
				$email = mysqli_real_escape_string($DB, $_POST["email"]);
				$gender = mysqli_real_escape_string($DB, $_POST["gender"]);
				$code = mysqli_real_escape_string($DB, $_POST["code"]);
				$yn = mysqli_real_escape_string($DB, $_POST["yn"]);
				
				$sql_update = "Update `account` Set `password`='$password', `email`='$email', `gender`='$gender', `code`='$code', `yn`='$yn' Where `account`='$account'";
				$result = mysqli_query($DB,$sql_update);
				
				?>
				<br/>
				<div class="container">
					<h3>修改完成!</h3>
				</div>
					<div class="container">
					<div class="col-md-8 col-md-offset-3">
						<table>
							<tr>
								<td><h4>帳號: </h4></td>
								<td><h4><strong><div class="text-info"><?php echo $account;?></div></strong></h4></td>
							</tr>
							<tr>
								<td><h4>密碼: </h4></td>
								<td><h4><strong><div class="text-info"><?php echo $password;?></div></strong></h4></td>
							</tr>
							<tr>
								<td><h4>信箱: </h4></td>
								<td><h4><strong><div class="text-info"><?php echo $email;?></div></strong></h4></td>
							</tr>
							<tr>
								<td><h4>性別: </h4></td>
								<td><h4>
								<strong><div class="text-info">
								<?php 
								if($gender=="M")
									echo '男';
								else
									echo '女';
								?>
								</div></strong></h4></td>
							</tr>
							<tr>
								<td><h4>驗證碼: </h4></td>
								<td><h4><strong><div class="text-info"><?php echo $code;?></div></strong></h4></td>
							</tr>
							<tr>
								<td><h4>驗證完畢: </h4></td>
								<td><h4>
								<strong><div class="text-info">
								<?php
								if($yn=="1")
									echo '是';
								else
									echo '否';
								?>
								</div></strong></h4></td>
							</tr>
						</table>	
					</div>
					</div>
				<?php
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