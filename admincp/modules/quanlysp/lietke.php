<?php
	$sql_lietke_sp = "SELECT *FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p>liệt kê danh mục sản phẩm</p>
<table width="500px" border="1" style="border-collapse: collapse;">
	<tr>
		<th>id</th>
		<th>Tên sản phẩm</th>
		<th>Hình ảnh</th>
		<th>Hình ảnh phụ 1</th>
		<th>Hình ảnh phụ 2</th>
		<th>Hình ảnh phụ 3</th>
		<th>Hình ảnh phụ 4</th>
		<th>Giá sp</th>
		<th>Số lượng</th>
		<th>Danh mục</th>
		<th>Mã sp</th>
		<th>Nội dung</th>
		<th>Đánh giá</th>
		<th>Đổi trả</th>
		<th>Size</th>
		<th>Tình trạng</th>
		<th>Quản lý</th>
	</tr>
	<?php
		$i=0;
		while($row = mysqli_fetch_array($query_lietke_sp)){
			$i++;

	?>

	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $row['tensp'] ?></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['image_1'] ?>" width="150px"></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['image_2'] ?>" width="150px"></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['image_3'] ?>" width="150px"></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['image_4'] ?>" width="150px"></td>
		<td><?php echo $row['giasp'] ?></td>
		<td><?php echo $row['soluong'] ?></td>
		<td><?php echo $row['tendanhmuc'] ?></td>
		<td><?php echo $row['masp'] ?></td>
		<td><?php echo $row['noidung'] ?></td>
		<td><?php echo $row['danhgia'] ?></td>
		<td><?php echo $row['doitra'] ?></td>
		<td><img src="modules/quanlysp/uploads/<?php echo $row['size'] ?>" width="150px"></td>
		<td><?php  if($row['tinhtrang']==1){
			echo "kích hoạt"; ;
		}else{
			echo "ẩn";
		} ?>
			
		</td>

		<td><a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">xóa</a>|<a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">sửa</a></td>

	</tr>
	<?php
		}
	?>
</table>