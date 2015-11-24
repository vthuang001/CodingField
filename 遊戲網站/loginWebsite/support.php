<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>

	<script type="text/javascript">
	function mouseOverRequest()
	{
	document.getElementById('requestButton').src ="../image/support_request2.png"
	}
	function mouseOutRequest()
	{
	document.getElementById('requestButton').src ="../image/support_request1.png"
	}
	
	function mouseOverQuestion()
	{
	document.getElementById('questionButton').src ="../image/support_question2.png"
	}
	function mouseOutQuestion()
	{
	document.getElementById('questionButton').src ="../image/support_question1.png"
	}
	</script>
	
  <!-- Carousel items -->
  <body onload="ShowTime();" style="background-image:url(../image/support_bg.png)">
    <!--導覽列呼叫-->
	<?php require_once 'navbar.php' ?>
	<br/><br/>
	<div class="container">
		<table align="center" border="0" width="80%" height="200">
		<!--這邊要放圖片-->
		</table>
	</div>
	
	<div class="container">
		<table align="center" border="0" width="80%">
			<tr><td align="center">
			<a><img src="http://images.cooltext.com/4472353.png" width="750" height="80" alt="Support & Help 問題Q&A" /></a>
			</td></tr>
			<tr><td	>
				<hr/>
			</td></tr>
			<tr>
				<td align="center">
					<a href="#" onmouseover="mouseOverRequest()" onmouseout="mouseOutRequest()">
					<img alt="錯誤回報" src="../image/support_request1.png" id="requestButton"/>
					</a>
					<a>&nbsp;&nbsp;&nbsp;</a>
					<a href="#" onmouseover="mouseOverQuestion()" onmouseout="mouseOutQuestion()">
					<img alt="問題查詢" src="../image/support_question1.png" id="questionButton"/>
					</a>
				</td>
			</tr>
			<tr height="20">
			</tr>
			<tr>
				<td align="center">
					<a href="#"><img src="../image/support_term.png" width="350" height="110" alt="使用條款" /></a>
					<a>&nbsp;&nbsp;&nbsp;</a>
					<a href="#"><img src="../image/support_privacy.png" width="350" height="110" alt="隱私權規約" /></a>
				</td>
			</tr>
		</table>
	</div>
	
  </body>
  
</html>