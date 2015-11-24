<?php require_once 'DBconnect.php' ?>
<?php
//emailÕýÔò
$Account = $_POST['user_name'];
$query = "SELECT account FROM `account` WHERE account = '$Account'";
$result = mysqli_query($DB,$query);
if($row_result=mysqli_fetch_assoc($result))
{
	//  The user ID found
	$response = "true";
}
else
{
	//  The user ID specified was not found
	$response = "false";
}
?>
<?php echo $response; ?>
<?php require_once 'DBdisconnect.php' ?>
