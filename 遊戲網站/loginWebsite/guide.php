<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>

  <!-- Carousel items -->
  <body onload="ShowTime();">
    <!--導覽列呼叫-->
	<?php require_once 'navbar.php' ?>
	<br/><br/>
	<div style="background-color:#FF0000">
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
				<td width="40%"/>
				<!-- 遊戲開始按鈕 -->
				<td width="30%">
				
				</td>
				
			</tr>
			</tbody>
		</table>
	</div>
	<!--遊戲導覽列-->
	<?php require_once 'navbarGame.php' ?>
  </body>
  
</html>