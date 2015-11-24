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
				
				$sql = "SELECT * FROM `login_billboard`";
				$result = mysqli_query($DB,$sql);
				$qualifyNum = mysqli_num_rows($result);
				
				//一頁幾筆
				$number = 5;
				$total = $qualifyNum;
				$pages = ceil($total/$number);
				if(isset($_GET['page']))
				{
					$page=$_GET['page'];
				}
				else
				{
					$page=1;
				}	
				$start=($page-1)*$number;
				$sql = "SELECT * FROM `login_billboard` limit $start, $number";
				$result = mysqli_query($DB,$sql);
				$count = 0;
				
				
				?>
				<div class="container">
					<table class="table">
						<thead>
							  <tr>
								<th width="5%">id</th>
								<th width="15%">屬性</th>
								<th width="30%">標題</th>
								<th width="30%">超連結</th>
								<th width="15%">上傳時間</th>
								<th width="5%">&nbsp;</th>
							  </tr>
						</thead>
							<?php
							while($row = mysqli_fetch_array($result))
							{
								if($page < $pages)
								{
								?>
									<tbody>
									<tr>
										<td><?php echo $row['id'];?></td>
										<td><?php echo $row['type'];?></td>
										<td><?php echo $row['title'];?></td>
										<td><a href="<?php echo $row['url'];?>"><?php echo $row['url'];?></a></td>
										<td><?php echo $row['update_date'];?></td>
										<td>
										<form method="post" action="announce_delete_finish.php">
											<input type="hidden" name="uid" value="<?php echo $row['id'];?>">
											<input type="submit" class="btn btn-danger" onclick='return confirm("刪除將不可回復")' value="刪除">
										</form>
										</td>
									</tr>
									</tbody><?php
								}
								else 
								{
									if($number*($pages-1) + $count < $qualifyNum)
									{
										?>
										<tbody>
										<tr>
											<td><?php echo $row['id'];?></td>
											<td><?php echo $row['type'];?></td>
											<td><?php echo $row['title'];?></td>
											<td><a href="http://<?php echo $row['url'];?>"><?php echo $row['url'];?></a></td>
											<td><?php echo $row['update_date'];?></td>
											<td>
											<form method="post" action="announce_delete_finish.php">
											<input type="hidden" name="uid" value="<?php echo $row['id'];?>">
											<input type="submit" class="btn btn-danger" onclick='return confirm("刪除將不可回復")' value="刪除">
										</form>
											</td>
										</tr>
										</tbody>
										<?php
									}
								}
								$count++;
							}?>
					</table>		
						<div class="container">
							
							<p align="center">
							<?php
								for($i=1;$i<=$pages;$i++)
								{
									echo "<a href=announce_delete.php?page=$i\>$i </a>";
								}
							?>
							<p align="center">共有<?php echo $pages?>頁</p>
							<p>&nbsp;</p>
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