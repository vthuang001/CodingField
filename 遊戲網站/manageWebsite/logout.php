<html>
	<?php 
		require('header.php');
	?>
	<?php
		//將session清空
		unset($_SESSION['account']);
		echo '登出中......';
		echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	?>
</html>