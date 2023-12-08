
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>H2T</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/font-awesome.css"/>
</head>
<body>
	<div class="wrapper1">
		<?php
			include("admincp/config/connect.php");
			include("pages/menu.php");
			include("pages/header.php");
			include("pages/main.php");
			include("pages/footer.php");
		?>

		</div>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript">
			// Show the first tab and hide the rest
			$('#tabs-nav li:first-child').addClass('active');
			$('.tab-content').hide();
			$('.tab-content:first').show();

			// Click function
			$('#tabs-nav li').click(function(){
			  $('#tabs-nav li').removeClass('active');
			  $(this).addClass('active');
			  $('.tab-content').hide();
			  
			  var activeTab = $(this).find('a').attr('href');
			  $(activeTab).fadeIn();
			  return false;
			});
		</script>
		
		
		
		
</body>
</html>