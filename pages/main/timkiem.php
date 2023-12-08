<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensp LIKE '%".$tukhoa."%'";
  $query_pro = mysqli_query($mysqli, $sql_pro);
  
?>

<h3><?php $tukhoa; ?></h3>
<div class="CHUNG3">
			<div class="ND1">
					<p><h1>MLB</h1></p>
				<p>Những phiên bản MLB mới nhất tại Việt Nam</p>
			</div><br><br>

			<div class="ND2">
				<div class ="wrapper">
					<ul class="products">
						<?php
							while($row = mysqli_fetch_array($query_pro)){
						?>
						<li>
							<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
								<h3 style="color: grey;"><?php echo $row['tendanhmuc'] ?></h3>
							<div class="product-item">
								<div class="product-top">
									<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-thumb">
										<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" alt="giày xinh đẹp">
									</a>
									<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="buy-now">Mua Ngay</a>
									<!-- mua ngay -->
								</div>
								<div class="product-info">
										<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-cat">MLB VIETNAM</a>
										<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>" class="product-name"><?php echo $row['tensp'] ?></a>
										<div class="product-price"><?php echo number_format($row['giasp'],0,',','.').'đ' ?></div>
								</div>
							</div>
						</a>
						</li>
						<?php
							}
						?>
						
								</ul>
				</div>
			</div>
		</div>

