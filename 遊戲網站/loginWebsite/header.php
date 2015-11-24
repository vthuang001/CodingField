<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Bootstrap -->
    <!--  <link href="css/bootstrap.min.css" rel="stylesheet">  -->
	
	<!--datepicker-->
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!--  <link rel="stylesheet" href="/resources/demos/style.css">  -->
		
	<!--連接資料庫-->
	<?php require_once 'DBconnect.php' ?>
	
	<?php //啟用session
		session_start();  
	?>
	
	<!--設定日期時間變數-->
		<script>
			$(function() {
				$( "#datepicker" ).datepicker({
				  dateFormat:"yy-mm-dd",
				  changeMonth: true,
				  changeYear: true,
				  yearRange: '1911:2015',
				  monthNamesShort: [ "1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月" ]
				});
			  });
		</script>
		
		<style>
		<!--圖片置中-->
		img.center {
		  display: block;
		  margin: 0px auto 10px;
		  cursor: pointer;
		  text-align: center;
		}
		</style>
	<title> 口盯目遊戲登錄網頁 </title>
</head>