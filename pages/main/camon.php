<p>Cảm ơn bạn đã mua hàng, chúng tôi sẽ liên hệ bạn tong thời gian sớm nhất</p>
<h3>ĐƠN HÀNG CỦA BẠN</h3>

<!-- <?php
if(isset($_GET['code'])){
$code_cart= $_GET['code'];

	$sql_dathang = "SELECT *FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='$_GET[code]' ORDER BY tbl_cart_details.id_cart_details DESC";
	$sql_dathang = mysqli_query($mysqli,$sql_dathang);
}
?> -->
	<style type="text/css">
		*{	
			box-sizing: border-box;
		}
		.container{
			width: 200vh;

		}
		.container1{
			float: left;
			height: 100vh;
			display: flex;
			width: 50%;
		}
		.container2{
			float: left;	
			width: 50%;	
		}
		.form-box{
			margin-top: 20px;
			width: 620px;
			height: 720px;
			box-shadow: 0 0 10px 3px gray;
			padding: 30px 20px;
		}
		.header1{
			margin-bottom: 20px;
			text-align: center;
		}
		.header1 h2{
			line-height: 40px;
			//height: 40px;
			margin-bottom: 10px;
			background: lavender;
		}
		.c{
			display: block;
			width: 100%;
			padding: 5px;
			margin-top: 15px;
			margin-bottom: 20px;
		}
	
		#author_id{
			display: block;
			width: 100%;
			padding: 5px;
			margin-top: 15px;			
		}
		#author1{
			display: block;
			width: 48.5%;
			padding: 5px;
			margin-top: 20px;
			margin-bottom: 20px;
			float: left;
		}
		#author2{
			display: block;
			width: 47%;
			padding: 5px;
			margin-top: 20px;
			margin-bottom: 20;
			float: left;
			margin-left: 25px;
		}
		input[type="submit"]{
			background: green;
			border: none;
			border-radius: 3px;
			padding: 5px;
			color: white;
			cursor: pointer;
		}
		input[type="submit"]:hover{
			opacity: 0.8;
		}
		.clear{
			clear: both;
		}
		.x{
			width: 1px;
		}	
		.dh{
			text-align: center;
		}
		.box{
			width: 600px;
			height: 620px;
			background: lavender;
			margin-top: 0;
		}
		.d{
			margin: 50px;
			width: 500px;
			height: 40px;
			color: white;
			background: grey;
			border: none;
		}
		.d:hover{
			background: #333;
		}


</style>
<?php
	$sql_lietke_dh = "SELECT *FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>

<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<div class="container">
	<div class="container1">
		<div class="form-box">
			<div class="header1">
				<h2><b>THÔNG TIN GIAO HÀNG</b></h2>
			</div>
			<?php
		
		$row = mysqli_fetch_array($query_lietke_dh);
			

	?>
			<form>
				<input class="c" type="text" value="Tên khách hàng: <?php echo $row['tenkhachhang'] ?>" id="name" autocomplete="off" required
				>
	
				<input class="c" type="text" value="Số điện thoại: <?php echo $row['dienthoai'] ?>" id="phone" autocomplete="off" required>
				<input class="c" type="email" value="Email: <?php echo $row['email'] ?>" id="email" autocomplete="off" required>
				<input class="c" type="text" value="Địa chỉ: <?php echo $row['diachi'] ?>" id="diachi" autocomplete="off" required>
	
				
				
			<input class="x" type="checkbox" value="1" /> <label> </label>
			<div class="header1">
				<h2><b>PHƯƠNG THỨC GIAO HÀNG</b></h2>
			</div>
			 <input class="a" type="checkbox" value="1" checked/> <label>Tốc độ tiêu chuẩn (từ 2 - 5 ngày làm việc) &nbsp; &nbsp; ❓</label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<b>0 VND</b><br><br>

			<div class="header1">
				<h2><b>PHƯƠNG THỨC THANH TOÁN</b></h2>
			</div>
			<input class="a" type="checkbox" value="1" checked/> <label>Thanh toán trực tiếp khi giao hàng &nbsp; &nbsp;❓ </label><br><br>

			<input class="a" type="checkbox" value="1"/> <label>Thanh toán bằng thẻ quốc tế và nội địa (ATM) &nbsp; &nbsp;❓ &nbsp; &nbsp;<i class='fa fa-cc-visa'></i></label><br><br>

			<input class="a"type="checkbox" value="1"/> <label>Thanh toán bằng ví MoMo &nbsp; &nbsp;❓ <i class="fas fa-shopping-cart"></i></label><br><br>

			</div>
			
				</form>

				
			
		
	</div>
	<div class="container2">
		<div class="box">
			<div class="dh"><br><p><h2><b>&nbsp;&nbsp;ĐƠN HÀNG</b></h2></p></div>
			<hr size="4px">
			<div class="cart-content-left">
				<table style="width: 100%;" border="1" style="border-collapse: collapse;">
	<tr>
		<!-- <th>id</th> -->
		
		<th>Tên sản phẩm</th>
		<th>Số lượng</th>
		<th>Đơn giá</th>
		<th>Tổng tiền</th>
	</tr>

	<?php

   
	if(isset($_SESSION['cart'])){
		$i=0;

		$tongtien=0;


		foreach($_SESSION['cart'] as $cart_item){
			$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
			$tongtien=$tongtien+$thanhtien;
			$i++;
	?> 
	<tr>
		

		<td><?php echo $cart_item['tensp']; ?></td>
		<td>
			
			<?php echo $cart_item['soluong']; ?>
			
		</td>
		<td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
		<td><?php echo number_format($cart_item['soluong']*$cart_item['giasp'],0,',','.').'đ'; ?></td>
		
	</tr>
	<?php
		}
	?>
	<tr>
		<td colspan="7"> <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?> </p>
			
			<div style="clear: both;"></div>

			
		</td>

	</tr>
	<?php
		}
		unset($_SESSION['cart']);
	?>
</table>

			</div>
			<button class="d"> HOÀN TẤT ĐẶT HÀNG</button>
		</div>
	</div>
	

<div class="clear"></div>
