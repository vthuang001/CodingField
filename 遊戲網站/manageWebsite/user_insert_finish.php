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
				  //echo '<a href="#" class="btn btn-danger">抽籤新增</a>';
				echo  '</div>';
				echo '</div>';
				
				$account = mysqli_real_escape_string($DB, $_POST["account"]);
				$password = mysqli_real_escape_string($DB, $_POST["password"]);
				$email = mysqli_real_escape_string($DB, $_POST["email"]);
				$gender = mysqli_real_escape_string($DB, $_POST["gender"]);
				$code = mysqli_real_escape_string($DB, $_POST["code"]);
				$yn = mysqli_real_escape_string($DB, $_POST["yn"]);
				
				$sql_query="INSERT INTO `account` (`account`, `password`, `email`, `gender`, `code`, `yn`) VALUES (";
				$sql_query .= "'".$account."',";
				$sql_query .= "'".$password."',";
				$sql_query .= "'".$email."',";
				$sql_query .= "'".$gender."',";
				$sql_query .= "'".$code."',";
				$sql_query .= "'".$yn."')";	
				$result = mysqli_query($DB,$sql_query);
				
				?>
				<br/>
				<div class="container">
					<h3>上傳成功!</h3>
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