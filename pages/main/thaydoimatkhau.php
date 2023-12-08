<?php
	if(isset($_POST['doimatkhau'])){
		$taikhoan = $_POST['email'];
		$matkhau_cu = md5($_POST['password_cu']);
		$matkhau_moi = md5($_POST['password_moi']);
		$sql="SELECT * FROM tbl_dangky WHERE email = '".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
			echo '<p style="color:green; margin-left:300px;">Mật khẩu đã được thay đổi</p>';
		}else{
			echo '<p style="color:red;margin-left:300px;">Tài khoản hoặc mật khẩu cũ không đúng, vui lòng nhập lại</p>';
		}
	}
?>
<style type="text/css">
	.CHUNG3{
		height: 80vh;
		background: white;
		padding-top: 30px;
	}
		.chung31{

			height: 70vh;
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
					
					<li>Thay đổi mật khẩu</li>
				</ul>
			</div>
			<div class="chung31b">
				<form action="" autocomplete="off" method="POST">

					
				

					<label for="email">Tài khoản*</label><br>
					<input type="text" placeholder="Nhập email" name="email" id="ho"><br>

					<label for="password_cu">Mật khẩu cũ*</label><br>
					<input type="password" placeholder="Nhập mật khẩu cũ" name="password_cu" id="ho"><br>

					<label for="password_moi">Mật khẩu mới*</label><br>
					<input type="text" placeholder="Nhập mật khẩu mới" name="password_moi" id="ho"><br>

					
					<input type="submit" name="doimatkhau" value="Đổi mật khẩu">
					
					

				</form>

				</div>
			</div>
		
	</div>

