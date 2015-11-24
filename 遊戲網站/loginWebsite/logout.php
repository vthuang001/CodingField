<html>
	<?php require_once 'header.php' ?>
	<?php
		//將session清空
		unset($_SESSION['account']);
		header("Location: index.php");
	?>
</html>