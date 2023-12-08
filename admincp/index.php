<!-- <?php
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('Location:login.php');
}
?> -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admincp</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
</head>
<body>
	<h1>Admin Website</h1>
	<?php
			include("config/connect.php");
			include("modules/menu.php");
			include("modules/header.php");
			include("modules/main.php");
			include("modules/footer.php");
		?>
</body>
</html>