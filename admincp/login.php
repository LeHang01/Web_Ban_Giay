<?php
	session_start();
	include('config/connect.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql="SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khaonr hoặc mật khẩu không đúng, vui lòng nhập lại.")</script>';
			header("Location:login.php");
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<style type="text/css">
		body{
			background: #f2f2f2;
		}
		.wrapper-login{
			width: 22%;
			margin: 0 auto;
		}
		table.table-login{
			width: 100%;
		}
		table.table-login tr td{
			padding: 5px;

		}

	</style>
</head>
<body>
<div class="wrapper-login">
	<form action="" autocomplete="off" method="POST">
	<table border="1" class="table-login" style="text-align: center; border-collapse: collapse;">
		<tr>
			<td colspan="2"><h3>Đăng nhập admin</h3></td>
		</tr>
		<tr>
			<td>Tài khoản</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
		</tr>
	</table>
	</form>
</div>

</body>
</html>