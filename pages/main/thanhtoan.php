<h3>THANH TOÁN ĐƠN HÀNG</h3>
<?php
	session_start();
	include("../../admincp/config/connect.php");
	$id_khachhang=$_SESSION['id_khachhang'];
	$code_order=rand(0,9999);
	$insert_cart="INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."', '".$code_order."',1)";
		$cate_query = mysqli_query($mysqli,$insert_cart);
		if($cate_query){
			foreach($_SESSION['cart'] as $key => $value){
				$id_sanpham = $value['id'];
				$soluong = $value['soluong'];
				$insert_order_details="INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."', '".$code_order."','".$soluong."')";
					mysqli_query($mysqli,$insert_order_details);
			}
		}
		//unset($_SESSION['cart']);
		header('Location:../../index.php?quanly=camon');
?>


