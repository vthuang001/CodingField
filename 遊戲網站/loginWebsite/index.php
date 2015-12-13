<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  
	<script language="JavaScript">
	function ShowTime(){
	　var NowDate=new Date();
	　var h=NowDate.getHours();
	　var m=NowDate.getMinutes();
	　var s=NowDate.getSeconds();　
	　document.getElementById('showbox').innerHTML = h+'時'+m+'分'+s+'秒';
	　setTimeout('ShowTime()',1000);
	}
	</script>
	
	<script type="text/javascript">
	function mouseOver()
	{
	document.getElementById('startButton').src ="../image/StartButton2.png"
	}
	function mouseOut()
	{
	document.getElementById('startButton').src ="../image/StartButton1.png"
	}
	</script>
	
  <!-- Carousel items -->
  <body onload="ShowTime();" >
    <!--導覽列呼叫-->
	<?php require_once 'navbar.php' ?>
	<br/><br/>
	<div style="background-color:#FFFFBB">
		<table align="center" border="0" width="80%" height="300">
			<tbody>
			<tr>
				<!-- 遊戲logo -->
				<td width="30%" align="left">
					<div align="center">
						<img src="../image/miniFarmLogo.jpg" class="img-circle" alt="Cinque Terre" style="height: 200px; width: 200px;">
					</div>
					<br>
					
				</td>
				<td width="20%"/>
				<!-- 遊戲開始按鈕 -->
				<td width="30%">
					<div align="center">
						<br/><br/>
						<a href="../Build/Build.php" onmouseover="mouseOver()" onmouseout="mouseOut()">
						<img alt="Game Start!" src="../image/StartButton1.png" id="startButton" style="height: 235px; width: 210px;"/>
						</a>
					</div>
				</td>
				
			</tr>
			</tbody>
		</table>
	</div>
	<!--遊戲導覽列-->
	<?php require_once 'navbarGame.php' ?>
	<div  class="container">
		<table align="center" border="0" width="80%" >
		<tbody>
			<tr>
				<td align="left" width="60%">
					<!-- 幻燈片內容開始 -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel" style="height: 200px; width: 600px; background-color: #DA81F5">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							<li data-target="#myCarousel" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox" align="center">
							<div class="item active" >
								<img src="../image/gameWebsite.jpg" alt="gameImage01">
							</div>

							<div class="item">
								<img src="../image/loginProcess.jpg" alt="gameImage02">
							</div>

							<div class="item">
								<img src="../image/gameProcess.jpg" alt="gameImage03">
							</div>

							<div class="item">
								<img src="../image/loginWebsite.jpg" alt="gameImage04">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a>
					</div>
					<!-- 幻燈片內容結束 -->
					<br/><br/><br/>
					<!-- 佈告欄開始 -->
					<div align="center">
						<table style="background-image:url(../image/Billboard_out.png);width:560px;height:580px;">
						<tr height="70">
						<tr>
							<td vAlign=top align=center vAlign=middle width="490" height="360" >　 
								<table border=0 cellPadding=0 cellSpacing=0 width="470">
								<tr>
									<!-- 佈告欄navbar -->
									<ul class="nav nav-pills">
									<!--補空白使navbar置中-->
									<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
									<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
									<li class="active"><a data-toggle="pill" href="#new" style="background-color: #FF8888">最新消息</a></li>
									<li><a data-toggle="pill" href="#NOTICE" style="background-color: #FFDD55">官方通知</a></li>
									<li><a data-toggle="pill" href="#EVENT" style="background-color: #BBFF66">活動公告</a></li>
									<li><a data-toggle="pill" href="#MAINTAIN" style="background-color: #9999FF">系統維護</a></li>
									</ul>
								</tr>
								<tr>
									<td width="20">&nbsp;</td>
									<td align=center vAlign=middle width="430" height="360" background="../image/Billboard_in_square.png" style="vertical-align:top">
									<!-- 佈告欄內容 -->
									<!--以下您可插入想安排的圖、文或網頁元件-->
									<div class="tab-content">
									<!-- 印出"最新消息"佈告欄內容 -->
									<div id="new" class="tab-pane fade in active">
										<table>
										<?php
										$sql = "SELECT * FROM login_billboard order by update_date DESC";
										$result = mysqli_query($DB,$sql);
										$count=7;
										while($row = mysqli_fetch_array($result))
										{
											if($count!=0)
											{?>
											<tr height="45">
												<td width="2%"></td>
												<?php
												if($row['type']=="EVENT")
												{
												?>
													<td width="10%">
														<img src="../image/billboard_event.png" id="event" style="height: 30px; width: 70px;"/>
													</td>
												<?php
												}
												else if($row['type']=="NOTICE")
												{
												?>
													<td width="10%">
														<img src="../image/billboard_notice.png" id="notice" style="height: 30px; width: 70px;"/>
													</td>
												<?php
												}
												else
												{
												?>
													<td width="10%">
														<img src="../image/billboard_maintain.png" id="maintain" style="height: 30px; width: 70px;"/>
													</td>
												<?php
												}
												?>
												<td width="2%"></td>
												<td width="25%">
													<?php echo $row['update_date'];?>
												</td>
												<td width="60%">
													<a href="<?php echo $row['url'];?>" target="_blank" style="color:black;"><?php echo $row['title'];?></a>
												</td>
											</tr>
											<?php
												$count--;
											}
										}
										while($count!=0)
										{
											echo "<tr height="."45"."></tr>";
											$count--;
										}
										?>
										<tr height="45" align="center" valign="center">
											<td colspan="5">
												<a href="#" target="_blank">More>></a>
											</td>
										</tr>
										</table>
									</div>
									<!-- 印出"官方通知"佈告欄內容 -->
									<div id="NOTICE" class="tab-pane fade">
										<table>
										<?php
										$sql = "SELECT * FROM login_billboard where type = 'NOTICE' order by update_date DESC";
										$result = mysqli_query($DB,$sql);
										$count=7;
										while($row = mysqli_fetch_array($result))
										{
											if($count!=0)
											{?>
											<tr height="45">
												<td width="2%"></td>
												<td width="10%">
													<img src="../image/billboard_notice.png" id="notice" style="height: 30px; width: 70px;"/>
												</td>
												<td width="2%"></td>
												<td width="25%">
													<?php echo $row['update_date'];?>
												</td>
												<td width="60%">
													<a href="<?php echo $row['url'];?>" target="_blank" style="color:black;"><?php echo $row['title'];?></a>
												</td>
											</tr>
											<?php
												$count--;
											}
										}
										while($count!=0)
										{
											echo "<tr height="."45"."></tr>";
											$count--;
										}
										?>
										<tr height="45" align="center" valign="center">
											<td colspan="5">
												<a href="#" target="_blank">More>></a>
											</td>
										</tr>
										</table>
									</div>
									<div id="EVENT" class="tab-pane fade">
										<table>
										<?php
										$sql = "SELECT * FROM login_billboard where type = 'EVENT' order by update_date DESC";
										$result = mysqli_query($DB,$sql);
										$count=7;
										while($row = mysqli_fetch_array($result))
										{
											if($count!=0)
											{?>
											<tr height="45">
												<td width="2%"></td>
												<td width="10%">
													<img src="../image/billboard_event.png" id="event" style="height: 30px; width: 70px;"/>
												</td>
												<td width="2%"></td>
												<td width="25%">
													<?php echo $row['update_date'];?>
												</td>
												<td width="60%">
													<a href="<?php echo $row['url'];?>" target="_blank" style="color:black;"><?php echo $row['title'];?></a>
												</td>
											</tr>
											<?php
												$count--;
											}
										}
										while($count!=0)
										{
											echo "<tr height="."45"."></tr>";
											$count--;
										}
										?>
										<tr height="45" align="center" valign="center">
											<td colspan="5">
												<a href="#" target="_blank">More>></a>
											</td>
										</tr>
										</table>
									</div>
									<div id="MAINTAIN" class="tab-pane fade">
										<table>
										<?php
										$sql = "SELECT * FROM login_billboard where type = 'MAINTAIN' order by update_date DESC";
										$result = mysqli_query($DB,$sql);
										$count=7;
										while($row = mysqli_fetch_array($result))
										{
											if($count!=0)
											{?>
											<tr height="45">
												<td width="2%"></td>
												<td width="10%">
													<img src="../image/billboard_maintain.png" id="maintain" style="height: 30px; width: 70px;"/>
												</td>
												<td width="2%"></td>
												<td width="25%">
													<?php echo $row['update_date'];?>
												</td>
												<td width="60%">
													<a href="<?php echo $row['url'];?>" target="_blank" style="color:black;"><?php echo $row['title'];?></a>
												</td>
											</tr>
											<?php
												$count--;
											}
										}
										while($count!=0)
										{
											echo "<tr height="."45"."></tr>";
											$count--;
										}
										?>
										<tr height="45" align="center" valign="center">
											<td colspan="5">
												<a href="#" target="_blank">More>></a>
											</td>
										</tr>
										</table>
									</div>
									</div>
									<!--以上您可插入想安排的圖、文或網頁元件-->
									</td>
									<td width="20">&nbsp;</td></TR>
								</table>
							</td>
						</tr>
						</table>
					</div>
					<!-- 佈告欄結束 -->
				</td>
				<!-- 遊戲圖片+新資訊 -->
				<td width="20%" align="right" style="vertical-align:top"> 
					<div class="alert alert-info">
						<?php
						//計算玩家資料筆數
						$sql = "SELECT * FROM `account`";
						$result = mysqli_query($DB,$sql);
						$userNum = mysqli_num_rows($result);
						?>
						<h4><strong>目前玩家數：</strong> <?php echo $userNum."位" ?></h4>
					</div>
					<div class="alert alert-success">
						<h4><strong>伺服器時間：<br></strong> <span id="showbox"></span>
					</div>
					<div class="alert alert-warning">
						<h4><strong>聯絡方式  ：</strong> <?php echo $email1 ?> </h4>
					</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>