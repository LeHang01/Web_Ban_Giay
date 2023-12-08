<?php
	if(isset($_GET['dangxuat'])=='dangxuat'){
		unset($_SESSION['dangnhap']);
		header('location:login.php');
	}
?>

<p><li><a href="index.php?dangxuat=1">Đăng xuất: <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];
	} ?></a></li>
</p>