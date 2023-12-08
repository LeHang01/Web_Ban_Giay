<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham= '$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="CHUNG3">
	<div class="chung31">
		<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?> ">
		<div class="addanh">
		
		<div id="main-img">
			<img border="1px solid black" width="450px" id="img-main" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
			
		</div>
		<div class="picter">
			<p>
				<img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['image_1'] ?>" width="120px" onclick="changeImage('one') " id="one">
				<img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['image_2'] ?>" width="120px" onclick="changeImage('two') " id="two">
				<img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['image_3'] ?>" width="120px" onclick="changeImage('three') " id="three">
				<img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['image_4'] ?>" width="120px" onclick="changeImage('four') " id="four">

			</p>
		</div>
		
		<script type="text/javascript">
			
			function changeImage(id){
				let imgePath = document.getElementById(id).getAttribute('src');

				document.getElementById('img-main').setAttribute('src',imgePath);
			}


			// const btn = document.querySelector("button")

			btn.forEach(function(button,index){
			button.addEventListener("click",function(event){{
				var btnItem = event.targer
				var product=btnItem.parentElement
				console.log(btn)
			}})
				
})
		</script>

	</div>
		
	</div>
	<div class="information">
	<div class="information-con">
		
		<h2> <?php echo $row_chitiet['tensp'] ?></h2>
			<p>Đánh giá sản phẩm này</p>
			<p>Thương Hiệu: <b>H2T VIETNAM</b> </p>
			<p>Mã : <b><?php echo $row_chitiet['masp'] ?></b></p>
			<h4 class="price" style="color: red;">
				<?php echo number_format($row_chitiet['giasp'],0,',','.').'đ' ?>
			</h4>
			 <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ"></p>
		<div id="results"></div>
			<form id="elements" onchange="showValue()">
	          <input type="radio" id="r1" name="element" value="260 - 41.0 EUR">  260 - 41.0 EUR
	          <input type="radio" id="r2" name="element" value="26.5 - 41.0 EUR"> 26.5 - 41.0 EUR
	          <input type="radio" id="r3" name="element" value="270 - 41.0 EUR" checked="checked"> 270 - 41.0 EUR
	        </form>

        <script type="text/javascript">
            const ele = document.forms.elements.elements["element"]
            showValue()
            function showValue(){      
                document.getElementById('results').innerHTML =  `Size: ${ele.value}`
            }
        </script>
       <br>
        <a href="#">Xem hướng dẫn chọn size</a>
			<br>
			<br>
			<table border="1" style="border-collapse: collapse;" width="320px"  >
				<tr style="height: 50px;">
					<td> Xuất xứ</td>
					<td>Việt Nam</td>
				</tr>
				
				<tr style="height: 50px;">
					<td>SKU</td>
					<td>2464daf54</td>
				</tr>
				<tr style="height: 50px;">
					<td>Giới Tính:</td>
					<td>Unisex</td>
				</tr>
				<tr style="height: 50px;">
					<td>Chất Liệu</td>
					<td>Synthetic leather</td>
				</tr>
				<tr style="height: 50px;">
					<td>Made in:</td>
					<td>Viet Nam</td>
				</tr>
				<tr style="height: 50px;">
					<td>Ra mắt:</td>
					<td>2022.26</td>
				</tr>
			</table>
		</form>
	</div>
</div>

	
</div>
<div class="clear"></div>
<div class="tabs">
  <ul id="tabs-nav">
    <li><a href="#tab1">MÔ TẢ SẢN PHẨM</a></li>
    <li><a href="#tab2">H2T SIZE CHART</a></li>
    <li><a href="#tab3">ĐÁNH GIÁ SP</a></li>
    <li><a href="#tab4">CHÍNH SÁCH ĐỎI/TRẢ</a></li>
    <li><a href="#tab5">Hình ảnh</a></li>
  </ul> <!-- END tabs-nav -->
  <div id="tabs-content">
    <div id="tab1" class="tab-content">
      <?php echo $row_chitiet['noidung'] ?>
    </div>
    <div id="tab2" class="tab-content">
      <img style="margin-left:  300px;" border="1px solid black" width="450px" id="img-main" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['size'] ?>">
    </div>
    <div id="tab3" class="tab-content">
      <?php echo $row_chitiet['danhgia'] ?>
    </div>
    <div id="tab4" class="tab-content">
      <?php echo $row_chitiet['doitra'] ?>
    </div>

    <div id="tab5" class="tab-content">
      <img style="margin-left: 56px;" border="1px solid black" width="450px" id="img-main" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
       <img border="1px solid black" width="450px" id="img-main" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['image_1'] ?>">
    </div>

  </div> <!-- END tabs-content -->
</div> <!-- END tabs -->
<br>

<!-- <div class="description">
			<ul>
				<li><a href="#">MÔ TẢ SẢN PHẨM</a></li>
				<li><a href="#">H2T SIZE CHART</a></li>
				<li><a href="#">ĐÁNH GIÁ SP</a></li>
				<li><a href="#">CHÍNH SÁCH ĐỎI/TRẢ</a></li>

			</ul>
		</div><br><br><br> -->
<?php
	}
?>