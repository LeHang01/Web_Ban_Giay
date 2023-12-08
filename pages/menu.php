<?php
  $sql_danhmuc = "SELECT *FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
  $query_danhmuc = mysqli_query($mysqli, $sql_danhmuc);
  
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);

	}
?>

<div class="menu">
				<div class="ALL" style="background:pink;">
<div class="CHUNG1">
	<div class="CON1">
		<a href="" title=""><b><i>SNEAKER</i></b></a>
	</div>
	<div class="CON2">
		<ul>
			<li><a href="index.php">ALL</a></li>
			<?php
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
			?>
			<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?> </a>
				<div class="sub-menu1" style="background: lavender; color: black;">
					<?php
						$id_danhmuc = $row_danhmuc["id_danhmuc"];
						$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$id_danhmuc' ORDER BY id_sanpham DESC";
					  $query_pro = mysqli_query($mysqli, $sql_pro);
					  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$id_danhmuc' LIMIT 1";
					  $query_cate = mysqli_query($mysqli, $sql_cate);
					  $row_title = mysqli_fetch_array($query_cate);
					?>
					<ul>
							<?php
								while($row_pro = mysqli_fetch_array($query_pro)){
							?>				
						<li>
							
							<div class="products-top1">
							<a href="" class="products-tump">
								<div id="main-img">
								<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>">
							
							</div>	
							</a> 

							</div>
							<div class="products-info1">
								<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="product-name"><?php echo $row_pro['tensp']?></a>
							</div>
						
						</li>
						<?php
						}
					?>
					</ul>

			</li>
			<?php
				}
			?>

			<?php
				

		if(isset($_SESSION['dangky'])){
			?>
			<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
			<li><a href="index.php?quanly=thaydoimatkhau">Đổi mật khẩu</a></li>
			<?php
				}else{
			?>
			<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
			<?php
				}
			?>
		</ul>
	</div>
		</div>



			<div class="CON3">
			

   				<div class="header_cart">
					<div class="header_cart-wrap">
						<button id="cart">
		        			<i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px;"></i><a href="index.php?quanly=giohang">
		              			  Giỏ Hàng</a>
		   				</button>
						
					
						<div class="header_cart-list">
							
							
							
							
								

	<?php

   
	if(isset($_SESSION['cart'])){
		$i=0;

		$tongtien=0;
?>
			<h4 class="header_cart-heading">Sản phẩm đã thêm</h4>
	<table style="width: 100%; color: black;" border="1" style="border-collapse: collapse;">
	<tr>
		<th>STT</th>
			<th>Sản phẩm</th>
			<th>Tên sản phẩm</th>
			<th>SL</th>
			<th>Gía sản phẩm</th>
			<th>Thành tiền</th>
			
		
	</tr>	
<?php

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
	</tr>
	<?php
		}
	?>
	
	<tr>
		<td colspan="7"> <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').'đ' ?> </p></td>
	</tr>
	</table>
	<?php
		}else{
	?>


<h1 style="color: black;">Giỏ hàng trống</h1>
		<?php
		}
	?>
						
							
							<button class="header_cart-view-cart btn btn-primary"><a href="index.php?quanly=giohang">Xem giỏ hàng</a></button>
						</div>
					</div>

				</div>

			</div>

	</div>