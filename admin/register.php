	<?php
	session_start();
	if($_SESSION['traveler']){

		require_once '../action/koneksi.php';
		if(isset($_POST['Input'])){
			$namalengkap = $_POST['namalengkap'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = mysqli_query($connect, "INSERT INTO user where namalengkap = '$namalengkap', username = '$username', password = '$password'") or die ($db->error);
		} else {
			echo "<script>window.location='../login.php';</script>";
		}
		?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
</head> 
<body>
	<!--/login-->
	
	<div class="error_page">
		<!--/login-top-->
		
		<div class="error-top">
			<h2 class="inner-tittle page">Treveler</h2>
			<div class="login">
				<h3 class="inner-tittle t-inner">Login</h3>
				
				<form class="form-horizontal" role="form" method="POST"> 
					<div class="form-group"> 
						<input type="text" class="form-control" id="namalengkap" placeholder="Nama Lengkap" name="namalengkap"> 
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control" id="username" placeholder="Username" name="username"> 
					</div> 
					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Password" name="password"> 
					</div>
					<div class="submit">
						<input type="submit" value="Input" name="Input">
					</div> 
				</form>
			</div>

			
		</div>
		
		
		<!--//login-top-->
	</div>
	
	<!--//login-->
	<!--footer section start-->
	<div class="footer">
		
		
	</div>
	<!--footer section end-->
	<!--/404-->
	<!--js -->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>