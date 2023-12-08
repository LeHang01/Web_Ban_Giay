<?php
if(isset($_GET['trang'])){
	$page = $_GET['trang'];

}else{
	$page=1;
}
if($page == '' || $page ==1){
	$begin = 0;
}else{
	$begin = ($page*8)-8;
}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,8";
  $query_pro = mysqli_query($mysqli, $sql_pro);
  
?>

							
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
	<style type="text/css">

		ul.list_trang{
			padding: 0;
			margin: 0;
			list-style: none;
		}
		ul.list_trang li{
			float: left;
			padding: 5px 13px;
			margin: 5px;
			background: burlywood;
			display: block;
		}
		ul.list_trang li a{
			color: #000;
			text-align: center;
			text-decoration: none;
		}
	</style>

	
		<p>Trang:</p>
		<?php
			$sql_trang=mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
			$row_count = mysqli_num_rows($sql_trang);
			 $trang = ceil($row_count/8);
		?>
		<ul class="list_trang">
			<?php
				for($i=1;$i<=$trang;$i++){


			?>
			<li <?php if($i==$page){
				echo 'style="background:brown"';}else{ echo ''; } ?> ><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
			<?php
				}
			?>
		</ul>
							
								
				</div>
			</div>
		</div>
