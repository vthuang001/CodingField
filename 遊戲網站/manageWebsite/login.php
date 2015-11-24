<html>
	<?php require('header.php'); ?>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container">
			<div class="navbar-header">
			  <a class="navbar-brand" href="#">STS後台</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="../register"><span class="glyphicon glyphicon-log-out"></span> 回首頁</a></li>
			  </ul>
			</div>
		  </div>
		</nav>
		
		<div class="container" align="center">
			<form role="form" action="connect.php" method="post">
			  <div class="form-group col-md-4 col-md-offset-4">
				<label for="id">帳號:</label>
				<input type="text" class="form-control" id="account" name="account">
			  </div>
			  <div class="form-group col-md-4 col-md-offset-4">
				<label for="pwd">密碼:</label>
				<input type="password" class="form-control" id="pwd" name="pwd">
			  </div>
			  <div class="form-group col-md-4 col-md-offset-4">
				<button type="submit" class="btn btn-default">登入</button>
			  </div>
			</form>
		</div>
		
		<?phprequire('footer.php');?>
	</body>
</html>