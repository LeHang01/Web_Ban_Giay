<?php
		
		if(isset($_POST['dangky'])){



		$tenkhachhang = $_POST['hovaten'];
		$dienthoai = $_POST['dienthoai'];
		$diachi = $_POST['diachi'];
		$email = $_POST['email'];
		$matkhau = md5($_POST['matkhau']);
		$sql_dangky= mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
			if($sql_dangky){
				echo '<p>Bạn đã đăng kí thành công</p>';
				
				$_SESSION['dangky'] = $tenkhachhang;
				
				$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
				header('Location:index.php?quanly=giohang');
			}

	}

?>

<style type="text/css">
	.CHUNG3{
		height: 130vh;
		background: white;
		padding-top: 30px;
	}
		.chung31{

			height: 86.5vh;
			width: 60%;
			margin: 0px auto;
			border: 5px solid pink;
			border-radius: 10px;
		}
			/* .CHUNG3{
			margin: 30px 400px;
			width: 620px;
			} */
			.chung31a{
				background: white;
				text-align: center;
			}
			.chung31a ul li{
				font-size: 20px;
				text-align: center;
				padding-bottom: 10px;
				padding-top: 10px;
				width: 430px;
				display: inline-block;
				list-style: none;
				position: relative;
				border-right: 1px dashed black;
				border-bottom: 1px solid black;
			}
			.chung31a ul li a{
				color: black;
				text-decoration: none;
				display: block;
			}
			.chung31a ul li:hover {
				background: pink;

			}
			.chung31a ul li:last-child{
				border-right: none;
			}
		.chung31b{
			/* font-size: 20px;
			padding-top: 20px; */
			padding-left: 40px;
			/* text-align: center; */
		}
		input{
			display: block;
			height: 35px;
			width: 95%;
			padding: 3px;
			margin-top: 5px;
			margin-bottom: 12px;
			outline: none;
		}
		input[type="sumit"]{
			background: green;
			border-radius: 7px;
			padding :5px;
			color : white;
			cursor: position;
		}
		input [type="sumit"]:hover{
			opacity: 0.8;
		}
			.chung31b1{

				width: 300px;
				margin: 0px auto;
				height: 50px;
			}
			.chung31b1{
				background: black;
				text-align: center;
			}
			.chung31b1 ul li{
				/* padding-bottom: 10px;
				padding-top: 10px; */
				width: 120px;
				display: inline-block;
				list-style: none;
				position: relative;
				border-right: 1px dashed white;
			}
			.chung31b1 ul li a{
				color: white;
				text-decoration: none;
				display: block;
			}
			.chung31b1 ul li:hover {
				background: black;
			}
			.chung31b1 ul li:last-child{
				border-right: none;
			}

</style>

<div class="CHUNG3">
		<div class="chung31">
			<div class="chung31a">
				<ul>
					
					<li><a href="file:///E:/LAPTRINHWEB/formdangkytk.html">Đăng ký</a></li>
				</ul>
			</div>
			<div class="chung31b">
				<form action="" method="POST">

					<label for="ten">HỌ VÀ TÊN*</label><br>
					<input type="text" placeholder="Nhập họ và tên" name="hovaten" id="ten"><br>

					<label for="sdt">SỐ ĐIỆN THOẠI*</label><br>
					<input type="text" placeholder="Nhập số điện thoại" name="dienthoai" id="ho"><br>

					<label for="diachi">ĐỊA CHỈ*</label><br>
					<input type="text" placeholder="Nhập địa chỉ" name="diachi" id="ho"><br>

					<label for="email">EMAIL*</label><br>
					<input type="text" placeholder="Nhập Địa Chỉ Email" name="email" id="email" autocomplete="off"><br>

					<label for="pass">MẬT KHẨU*</label><br>
					<input type="text" placeholder="Nhập Mật Khẩu" name="matkhau" id="pass" autocomplete="off"><br>
					<input type="submit" name="dangky" value="Đăng ký">
					<div style="border: 1px solid black; width: 95%;height: 35px;line-height: 35px; text-align: center; background: lavender;"><a href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></div>
					

				</form>
				<p>MLB Vietnam cam kết bảo mật và sẽ không bao giờ đăng
hay chia sẻ thông tin mà chưa có được sự đồng ý của bạn.</p>
				
				<div class="chung31b1">
					<p>Hoặc đăng nhập qua</p>
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Google</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>