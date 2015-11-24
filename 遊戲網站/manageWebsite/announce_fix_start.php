<html>
	<?php
		require('header.php');
		
		require("../config.php");
	?>
	<script>
	<!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {	
            if(!reg.type[0].checked && !reg.type[1].checked && !reg.type[2].checked) 
            {
                alert("請選擇屬性。");
            }
			else if(reg.title.value == "") 
            {
                alert("請輸入標題。");
            }
			else if(reg.url.value == "") 
            {
                alert("請輸入超連結。");
            }
			else if(reg.update_date.value == "") 
            {
                alert("請輸入上傳日期。");
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
				  echo '<a href="announce_fix.php" class="btn btn-primary">修改公告</a>';
				  echo '<a href="announce_delete.php" class="btn btn-success">刪除公告</a>';
				  echo '<a href="announce_insert.php" class="btn btn-info">插入公告</a>';
				  //echo '<a href="#" class="btn btn-danger">抽籤新增</a>';
				echo  '</div>';
				echo '</div>';
				
				$bid=$_POST["uid"];
				
				$sql = "SELECT * FROM `login_billboard` where `id` = '$bid' ";
				$result = mysqli_query($DB,$sql);
				while($row = mysqli_fetch_array($result))
				{
					$id=$row['id'];
					$type=$row['type'];
					$title=$row['title'];
					$url=$row['url'];
					$date=$row['update_date'];
				}
				?>
				<br/>
				<div class="container">
					<form name="reg" method="POST" action="announce_fix_finish.php">
					<table border="1" width="100%">
					<tr>
						<td colspan="2" bgcolor="#666666"> 
							<h2 align="center"><font color="#FFFFFF">修改公告</font></h2>
						</td>
					</tr>
					<tr bgcolor="#EEEEEE">
						<td><br/>屬性<br/><br/></td>
						<td>
						<br/>
						<?php
						if($type == "NOTICE")
						{
						?>
							<label class="radio-inline"><input type="radio" name="type" value="NOTICE" checked="checked">官方通知</label>
							<label class="radio-inline"><input type="radio" name="type" value="EVENT">活動公告</label>
							<label class="radio-inline"><input type="radio" name="type" value="MAINTAIN">系統維護</label>
						<?php
						}
						else if($type == "EVENT")
						{
						?>
							<label class="radio-inline"><input type="radio" name="type" value="NOTICE">官方通知</label>
							<label class="radio-inline"><input type="radio" name="type" value="EVENT" checked="checked">活動公告</label>
							<label class="radio-inline"><input type="radio" name="type" value="MAINTAIN">系統維護</label>
						<?php
						}
						else
						{
						?>
							<label class="radio-inline"><input type="radio" name="type" value="NOTICE">官方通知</label>
							<label class="radio-inline"><input type="radio" name="type" value="EVENT">活動公告</label>
							<label class="radio-inline"><input type="radio" name="type" value="MAINTAIN" checked="checked">系統維護</label>
						<?php
						}
						?>
						<br/>
						</td>
					</tr>
					<tr>
						<td><br/>標題<br/><br/></td>
						<td>
							<br/><input type="text" class="form-control" placeholder="標題" name="title" value="<?php echo $title;?>"  style="width:50%"/><br/>
						</td>
					</tr>
					<tr bgcolor="#EEEEEE">
						<td><br/>超連結<br/><br/></td>
						<td>
							<br/><input type="text" class="form-control" placeholder="超連結" name="url" value="<?php echo $url;?>"  style="width:50%"/><br/>
						</td>
					</tr>
					<tr>
						<td><br/>上傳時間<br/><br/></td>
						<td>
							<br/><input type="text" id="datepicker" class="form-control" placeholder="上傳時間" name="update_date" value="<?php echo $date;?>" style="width:50%"/>
						</td>
					</tr>
					
					</table>
					<br/>
					<input type="hidden" name="id"  value="<?php echo $id; ?>"/>
					<input type="button" class="btn btn-primary" onclick="history.back()" value="返回上一頁" style="width:100px" />
					<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="送出" style="width:100px" /><br>

					</form>
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