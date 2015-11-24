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
				
				$id = mysqli_real_escape_string($DB, $_POST["id"]);
				$type  = mysqli_real_escape_string($DB, $_POST["type"]);
				$title = mysqli_real_escape_string($DB, $_POST["title"]);
				$url = mysqli_real_escape_string($DB, $_POST["url"]);
				$date  = mysqli_real_escape_string($DB, $_POST["update_date"]);
				
				$sql_update = "Update `login_billboard` Set `type`='$type', `title`='$title', `url`='$url', `update_date`='$date' Where `id`='$id'";
				$result = mysqli_query($DB,$sql_update);
				
				?>
				<br/>
				<div class="container">
					<h3>修改完成!</h3>
				</div>
				
				<div class="container">
					<div class="col-md-7 col-md-offset-3" >
						<table>
							<tr>
								<td><h4>屬性: </h4></td>
								<td><h3><?php echo $type;?></h3></td>
							</tr>
							<tr>
								<td><h4>標題: </h4></td>
								<td><h3><?php echo $title;?></h3></td>
							</tr>
							<tr>
								<td><h4>超連結: </h4></td>
								<td><h3><?php echo $url;?></h3></td>
							</tr>
							<tr>
								<td><h4>上傳日期: </h4></td>
								<td><h3><?php echo $date;?></h3></td>
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