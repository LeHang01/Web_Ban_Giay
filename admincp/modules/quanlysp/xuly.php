<?php
include('../../config/connect.php');
	$tensp= $_POST['tensp'];
	$masp = $_POST['masp'];
	$giasp = $_POST['giasp'];
	$soluong = $_POST['soluong'];

	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;

	$image_1 = $_FILES['image_1']['name'];
	$hinhanh_tmp1 = $_FILES['image_1']['tmp_name'];
	$image_1 = time().'_'.$image_1;

	$image_2 = $_FILES['image_2']['name'];
	$hinhanh_tmp2 = $_FILES['image_2']['tmp_name'];
	$image_2 = time().'_'.$image_2;

	
	$image_3 = $_FILES['image_3']['name'];
	$hinhanh_tmp3 = $_FILES['image_3']['tmp_name'];
	$image_3 = time().'_'.$image_3;

	$image_4 = $_FILES['image_4']['name'];
	$hinhanh_tmp4 = $_FILES['image_4']['tmp_name'];
	$image_4 = time().'_'.$image_4;

	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	$noidung = $_POST['noidung'];
	$tinhtrang = $_POST['tinhtrang'];
	$danhgia = $_POST['danhgia'];
	$doitra = $_POST['doitra'];

	$size = $_FILES['size']['name'];
	$size_tmp = $_FILES['size']['tmp_name'];
	$size = time().'_'.$size;

	
	$danhmuc = $_POST['danhmuc'];

	if(isset($_POST['themsanpham'])){
		$sql_them="INSERT INTO tbl_sanpham(tensp,masp,giasp,soluong,hinhanh,noidung,tinhtrang,id_danhmuc,image_1,image_2,image_3,image_4,danhgia,doitra,size) VALUE('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$noidung."','".$tinhtrang."','".$danhmuc."','".$image_1."','".$image_2."','".$image_3."','".$image_4."','".$danhgia."','".$doitra."','".$size."') ";
		mysqli_query($mysqli,$sql_them);
		move_uploaded_file($size_tmp, 'uploads/'.$size);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		move_uploaded_file($hinhanh_tmp1, 'uploads/'.$image_1);
		move_uploaded_file($hinhanh_tmp2, 'uploads/'.$image_2);
		move_uploaded_file($hinhanh_tmp3, 'uploads/'.$image_3);
		move_uploaded_file($hinhanh_tmp4, 'uploads/'.$image_4);

		header('location:../../index.php?action=quanlysp&query=them');
	}
	elseif(isset($_POST['suasanpham'])){
		if($hinhanh!=''){
		$sql= "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query=mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['size']);
			unlink('uploads/'.$row['hinhanh']);
			unlink('uploads/'.$row['image_1']);
			unlink('uploads/'.$row['image_2']);
			unlink('uploads/'.$row['image_3']);
			unlink('uploads/'.$row['image_4']);

		$sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',image_1='".$image_1."',image_2='".$image_2."',image_3='".$image_3."',image_4='".$image_4."',danhgia='".$danhgia."',doitra='".$doitra."',size='".$size."' WHERE id_sanpham='$_GET[idsanpham]'";
		move_uploaded_file($size_tmp, 'uploads/'.$size);
		move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
		move_uploaded_file($hinhanh_tmp1, 'uploads/'.$image_1);
		move_uploaded_file($hinhanh_tmp2, 'uploads/'.$image_2);
		move_uploaded_file($hinhanh_tmp3, 'uploads/'.$image_3);
		move_uploaded_file($hinhanh_tmp4, 'uploads/'.$image_4);
		
		}
		}else{
			$sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."',danhgia='".$danhgia."',doitra='".$doitra."',size='".$size."' WHERE id_sanpham='$_GET[idsanpham]'";
		}
		mysqli_query($mysqli,$sql_update);
		header('location:../../index.php?action=quanlysp&query=them');
	}

	else{
		$id=$_GET['idsanpham'];
		$sql= "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
		$query=mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['size']);
			unlink('uploads/'.$row['hinhanh']);
			unlink('uploads/'.$row['image_1']);
			unlink('uploads/'.$row['image_2']);
			unlink('uploads/'.$row['image_3']);
			unlink('uploads/'.$row['image_4']);
		}

		$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
		mysqli_query($mysqli,$sql_xoa);
		header('location:../../index.php?action=quanlysp&query=them');
	}
?>