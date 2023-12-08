<?php
	if(isset($_SESSION['dangky'])){
		echo 'XIN CHÀO: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
	}

 ?>
	<table style="width: 90%; text-align: center; border-collapse: collapse; margin:auto;" border="1">
		<tr>
			<th>STT</th>
			<th>Sản phẩm</th>
			<th>Tên sản phẩm</th>
			<th>SL</th>
			<th>Gía sản phẩm</th>
			<th>Thành tiền</th>
			<th>Quản lý</th>
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
		<td><?php echo $i; ?></td>
		<td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>"width="150px"></td>
		<td><?php echo $cart_item['tensp']; ?></td>
		<td>
			<a href="pages/main/themgiohang.php?cong=<?php echo$cart_item['id'] ?>">+</a>
			<?php echo $cart_item['soluong']; ?>
			<a href="pages/main/themgiohang.php?tru=<?php echo$cart_item['id']?>">-</a>
		</td>
		<td><?php echo number_format($cart_item['giasp'],0,',','.').'đ'; ?></td>
		<td><?php echo number_format($cart_item['soluong']*$cart_item['giasp'],0,',','.').'đ'; ?></td>
		<td><a href="pages/main/themgiohang.php?xoa=<?php echo$cart_item['id']?>">Xóa</a></td>
	</tr>
	<?php
		}
	?>
	<tr>
		<td colspan="7"> <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?> </p>
			<p style="float: right;"><a href="pages/main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
			<div style="clear: both;"></div>

			<?php
				if(isset($_SESSION['dangky'])){
			?>
			<p><a href="pages/main/thanhtoan.php">ĐẶT HÀNG</a></p>
			<?php
				}else{

			?>
			<p><a href="index.php?quanly=dangky">ĐĂNG KÍ ĐẶT HÀNG</a></p>
			<?php
				}
			?>
		</td>

	</tr>
	<?php
		}else{
	?>
	<tr>
		<td colspan="7"><p>GIỎ HÀNG TRỐNG</p></td>
	</tr>
	<?php
		}
	?>

</table>


