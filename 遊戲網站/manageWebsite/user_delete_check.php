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
					<br/>
						<div class="alert alert-danger">
						  <strong>請再次確認是否刪除以下帳號。</strong>
						</div>
					</div>
					<div class="container">
					<div class="col-md-8 col-md-offset-3">
						<form name="reg" method="POST" action="user_delete_finish.php">
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
						</table>
						<input type="hidden" name="account"  value="<?php echo $account; ?>"/>
						<input type="button" class="btn btn-primary" onclick="history.back()" value="返回上一頁" style="width:100px" />
						<input class="btn btn-primary" type="submit" onclick='return confirm("刪除將不可回復")' value="送出" style="width:100px" /><br>

						</form>
					</div>
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