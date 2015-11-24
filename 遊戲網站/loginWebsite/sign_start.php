<!DOCTYPE html>
<html lang="en">

  <?php require_once 'header.php' ?>
  <?php include("../config.php"); ?>
  
  <script>
  checkRegAcc = function (){
	if ($('#account').val().length >=4) {
		$.ajax( {
      url: 'checkuser.php',
      type: 'POST',
      data: {
        user_name: $('#account').val()
      },
      error: function(xhr) {
        alert('Ajax request 發生錯誤');
      },
      success: function(response) {
		  if(response=='true')
		  {
			  document.getElementById('msg_user_name').innerHTML='<font color="red"> 該帳號已存在。</font>';
		  }
		  else
		  {
			  document.getElementById('msg_user_name').innerHTML='<font color="green"> 該帳號可以使用。</font>'; 
		  }
      }
		} );
		}
	else{
			$('#msg_user_name').html('');
		}
  };
  </script>
	
  <!-- Carousel items -->
  <body onload="ShowTime();" >
    <!--導覽列呼叫-->
	<!--<?php require_once 'navbar.php' ?>-->
	<br/><br/>
	<script type="text/javascript">
        <!-- 用來確認身分證字號是否正確的函式 -->
	    function checkID( id ) {
        tab = "ABCDEFGHJKLMNPQRSTUVWXYZIO"
        A1 = new Array (1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3 );
        A2 = new Array (0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5 );
        Mx = new Array (9,8,7,6,5,4,3,2,1,1);

        if ( id.length != 10 ) return false;
        i = tab.indexOf( id.charAt(0) );
        if ( i == -1 ) return false;
        sum = A1[i] + A2[i]*9;

        for ( i=1; i<10; i++ ) {
           v = parseInt( id.charAt(i) );
           if ( isNaN(v) ) return false;
           sum = sum + v * Mx[i];
        }
        if ( sum % 10 != 0 ) return false;
        return true;
        }
		
		<!-- 此check()函式在最後的「傳送」案鈕會用到 -->
        function check()
        {	
            if(reg.myInputAccount.value == "") 
            {
                alert("請輸入帳號。");
            }
			else if(document.getElementById('msg_user_name').innerHTML == '<font color="red">該帳號已存在。</font>') 
            {
                alert("該帳號已有人使用，請重新輸入。");
            }
			else if(reg.myInputPassword.value == "") 
            {
                alert("請輸入密碼。");
            }
			else if(reg.myInputPassword.value != reg.myInputPassword2.value) 
            {
                alert("兩次密碼不相同。");
            }
			else if(!reg.myInputSex[0].checked && !reg.myInputSex[1].checked)
            {
                alert("請輸入性別。");
            }
			else if(reg.myInputMail.value == "")
            {
                alert("請輸入電子郵件信箱。");
            }
            <!-- 若以上條件皆不符合，也就是表單資料皆有填寫的話，則將資料送出 -->
            else reg.submit();
         }
    </script>
	
  <!-- Carousel items -->
	<div class="container">
		
		<br/><br/><br/>
		<div class="col-md-8 col-md-offset-2" >
			<form name="reg" method="POST" action="sign_submit.php">
				<table border="1" width="100%">
				<tr>
					<td colspan="2" bgcolor="#666666"> 
						<h2 align="center"><font color="#FFFFFF">遊戲帳號註冊</font></h2>
					</td>
				</tr>
				<tr bgcolor="#EEEEEE">
					<td><br/>帳號(Account/ID)<br/><br/></td>
					<td>
						<br/>
						<input type="text" class="form-control" placeholder="帳號" name="myInputAccount" id="account" style="width:200px" onkeyup="checkRegAcc()">
						<span name="checkuser" id="msg_user_name"></span>
						<br/>
					</td>
				</tr>
				<tr>
					<td><br/>密碼(Password)<br/><br/></td>
					<td>
						<br/><input type="password" class="form-control" placeholder="密碼" name="myInputPassword"  style="width:200px"/><br/>
					</td>
				</tr>
				<tr bgcolor="#EEEEEE">
					<td><br/>密碼確認(PasswordCheck)<br/><br/></td>
					<td>
						<br/><input type="password" class="form-control" placeholder="密碼確認" name="myInputPassword2"  style="width:200px"/><br/>
					</td>
				</tr>
				<tr>
					<td><br/>性別(Gender)<br/><br/></td>
					<td>
						<br/>
						<label class="radio-inline"><input type="radio" name="myInputSex" value="M">男生(Male)</label>
						<label class="radio-inline"><input type="radio" name="myInputSex" value="F">女生(Female)</label>
						<br/>
						<br/>
					</td>
				</tr>
				<tr bgcolor="#EEEEEE">
					<td><br/>電子郵件信箱(E-mail)<br/><br/></td>
					<td><br/><input type="text" class="form-control" placeholder="電子郵件信箱" name="myInputMail" style="width:300px"/><br/></td>
				</tr>
				</table>
				<br>
				<input class="btn btn-primary dropdown-toggle" type="button" onClick="check()" value="送出" /><br>

		    </form>
		</div>
	</div></br></br>
  </body>
  
  <?php require_once 'DBdisconnect.php' ?>
  
</html>