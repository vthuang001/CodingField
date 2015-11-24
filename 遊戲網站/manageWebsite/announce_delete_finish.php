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
				  echo '<a href="announce_fix.php" class="btn btn-primary">修改公告</a>';
				  echo '<a href="announce_delete.php" class="btn btn-success">刪除公告</a>';
				  echo '<a href="announce_insert.php" class="btn btn-info">插入公告</a>';
				  //echo '<a href="#" class="btn btn-danger">抽籤新增</a>';
				echo  '</div>';
				echo '</div>';
				
				$id = mysqli_real_escape_string($DB, $_POST["uid"]);
				
				$sql_query = "delete from `login_billboard` where `id`='$id'";
				$result = mysqli_query($DB,$sql_query);
				
				?>
				<br/>
				<div class="container">
					<h3>刪除成功!</h3>
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