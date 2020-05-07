<!DOCTYPE html>
<html lang="vi"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
    
    <style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #58257b;
  border-radius: 4px;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #58257b;
  border-radius: 4px;
}
input[type=button] {
  
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid #58257b;
  border-radius: 4px;
}
  </style>
  <center>
	<title>Yêu cầu đăng ký</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <?php 
    echo "Chào bạn, bây giờ là ";                        
echo date("H");
echo " giờ ";
echo date("i");
echo " phút ngày ";
echo date("d/m/Y");
     ?>
     <br>
<h2>Yêu cầu đăng ký</h2>

<table>
	<tr><td><div id="error" style="color: red;"></div><div id="ok" style="color: green"></div></td></tr>
	<tr><td>UserName</td><td><input type="text" id = "username" name="username"></td></tr>
	<tr><td>PassWord</td><td><input type="password" id = "password" name="password"></td></tr>
	<tr><td colspan="2" align="center"><input type="button" id="btn_submit" name="btn_submit" value="Đăng ký"></td></tr>
</table>

<script type="text/javascript">
	$("#btn_submit").on("click", function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var error = $("#error");
		var ok = $("#ok");

		error.html("");
		ok.html("");

		if (username == "") {
			error.html("Tên đăng nhập không được để trống");
			return false;
		}
		if (password == "") {
			error.html("Mật khẩu không được để trống");
			return false;
		}
		
		$.ajax({
		  url: "userRegister.php",
		  method: "POST",
		  data: { username : username, password : password },
		  success : function (result){
                        $('#result').html(result);
                    }
		});
$.ajax(agrs);
	});
</script>
<div id="result">
            
        </div>
<br>
<a href="https://thietkewebgiare.xyz/userView.php">Click vào đây để xem danh sách</a>

</body>
</center>
</html>














