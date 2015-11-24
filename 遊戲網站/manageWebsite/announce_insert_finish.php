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
				
				$type  = mysqli_real_escape_string($DB, $_POST["type"]);
				$title = mysqli_real_escape_string($DB, $_POST["title"]);
				$url = mysqli_real_escape_string($DB, $_POST["url"]);
				$date  = mysqli_real_escape_string($DB, $_POST["update_date"]);
				
				$sql_query="INSERT INTO `login_billboard` (`type`, `title`, `url`, `update_date`) VALUES (";
				$sql_query .= "'".$type."',";
				$sql_query .= "'".$title."',";
				$sql_query .= "'".$url."',";
				$sql_query .= "'".$date."')";
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