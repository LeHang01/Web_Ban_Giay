<?php
	
	
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql="SELECT * FROM tbl_dangky WHERE email = '".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$row_data=mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangky'];
			header("Location:index.php?quanly=giohang");
		}else{
			echo '<p style="color:red; margin-left: 300px;">Mật khẩu hoặc email sai, vui lòng nhập lại</p>';
			
		}
	}
?>
<style type="text/css">
	.CHUNG3{
		height: 70vh;
		background: white;
		padding-top: 30px;
	}
		.chung31{

			height: 50vh;
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
					<li><a href="file:///E:/LAPTRINHWEB/formdkitkh2t.html">Đăng Nhập</a></li>
					<li><a href="file:///E:/LAPTRINHWEB/formdangkytk.html">Đăng ký</a></li>
				</ul>
			</div>
			<div class="chung31b">
				<form action="" autocomplete="off" method="POST">
					<label for="email">EMAIL*</label><br>
					<input type="text" placeholder="Nhập email" id="email" name="email" autocomplete="off"><br>

					<label for="pass">MẬT KHẨU*</label><br>
					<input type="password" placeholder="Nhập Mật Khẩu" id="pass" name="password" autocomplete="off"><br>
					<input type="submit" name="dangnhap" value="Đăng Nhập">
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