
<!-- 導航欄，類似Google上面選單 -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role=navigation> <!-- navbar-fixed-top 固定navbar在上方，滾動下拉時不會跑掉 -->
        <div class="container">
			<div>
                <a class="navbar-brand" href="index.php">遊戲登錄網站</a>
                <ul class="nav navbar-nav navbar-right">
					<li><img src="http://images.cooltext.com/4471051.gif" width="300" height="50" alt="CODING FIELD" /></li>
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>首頁</a></li>
					
					<?php
					if(!isset($_SESSION['account']))
						echo "<li><a href="."sign_start.php"."><span class='glyphicon glyphicon-user'></span> 帳號註冊 </a></li>";
					else
					{
						echo "<li><a class="."dropdown-toggle"." data-toggle="."dropdown"." href="."#"."><span class='glyphicon glyphicon-user'></span> 我的帳戶";
						echo "<span class="."caret"."></span></a>";
						echo "<ul class="."dropdown-menu".">";
						echo 	"<li><a href="."account_email_step2.php?account=".$_SESSION['account']."".">信箱驗證</a></li>";
						echo 	"<li><a href="."account_data_step2.php?account=".$_SESSION['account']."".">更改資料</a></li>";
						echo "</ul></li>";
					}
						
					?>
					
					<li><a href="support.php"><span class="glyphicon glyphicon-question-sign"></span> 問題Q&A </a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> 聯絡我們 </a></li>
					<?php
					if(!isset($_SESSION['account']))
						echo "<li><a href="."login.php"."><span class='glyphicon glyphicon-log-in'></span> 登入 </a></li>";
					else
						echo "<li><a href="."logout.php"."><span class='glyphicon glyphicon-log-out'></span> 登出 </a></li>";
					?>
                </ul>
            </div>
	    </div>
    </nav>