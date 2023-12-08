<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
  $query_pro = mysqli_query($mysqli, $sql_pro);
  $sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
  $query_cate = mysqli_query($mysqli, $sql_cate);
  $row_title = mysqli_fetch_array($query_cate);
?>

<h3><?php echo $row_title['tendanhmuc'] ?></h3>
<div class ="wrapper">
	<ul class="products">
		<?php
			while($row_pro = mysqli_fetch_array($query_pro)){
		?>
		<li><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
			<div class="product-item">
				<div class="product-top">
					<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="product-thumb">
						<img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" alt="giày xinh đẹp">
					</a>
					<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="buy-now">Mua Ngay</a>
					<!-- mua ngay -->
				</div>
				<div class="product-info">
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="product-cat">MLB VIETNAM</a>
						<a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>" class="product-name"><?php echo $row_pro['tensp']?></a>
						<div class="product-price"><?php echo number_format($row_pro['giasp'],0,',','.').'đ' ?></div>
				</div>
			</div>
		</a>
		</li>
		<?php
			}
		?>
	</ul>
</div>