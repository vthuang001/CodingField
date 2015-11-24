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
				
				$sql = "SELECT * FROM `account`";
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
				$sql = "SELECT * FROM `account` limit $start, $number";
				$result = mysqli_query($DB,$sql);
				$count = 0;
				?>
				<div class="container">
					<form role="form" action="user_fix_start.php" method="post">
					  <div class="form-group">
						<label class="control-label col-sm-3" for="uid">請輸入帳號(account)進行搜尋：</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" name="uid">
						</div>
						<div class="col-sm-4">
							<button type="submit" class="btn btn-primary btn-block">查詢</button>
						</div>
						
					  </div>
					</form>
				</div>
				<div class="container">
					<table class="table">
						<thead>
							  <tr>
								<th width="15%">帳號</th>
								<th width="15%">密碼</th>
								<th width="30%">信箱</th>
								<th width="5%">性別</th>
								<th width="25%">驗證碼</th>
								<th width="5%">驗證完畢</th>
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
											<td><?php echo $row['account'];?></td>
											<td><?php echo $row['password'];?></td>
											<td><?php echo $row['email'];?></td>
											<!--性別-->
											<?php
											if($row['gender']=="M")
											{?>
												<td>男</td>
											<?php
											}
											else
											{?>
												<td>女</td>
											<?php
											}?>
											<td><?php echo $row['code'];?></td>
											<!--驗證完畢-->
											<?php
											if($row['yn']=="0")
											{?>
												<td>否</td>
											<?php
											}
											else
											{?>
												<td>是</td>
											<?php
											}?>
											<td>
											<form method="post" action="user_fix_start.php">
												<input type="hidden" name="uid" value="<?php echo $row['account'];?>">
												<input type="submit" class="btn btn-success" value="修改">
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
											<td><?php echo $row['account'];?></td>
											<td><?php echo $row['password'];?></td>
											<td><?php echo $row['email'];?></td>
											<td><?php echo $row['gender'];?></td>
											<td><?php echo $row['code'];?></td>
											<td><?php echo $row['yn'];?></td>
											<td>
											<form method="post" action="user_fix_start.php">
												<input type="hidden" name="uid" value="<?php echo $row['account'];?>">
												<input type="submit" class="btn btn-success" value="修改">
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
									echo "<a href=user_fix.php?page=$i\>$i </a>";
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