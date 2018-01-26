<?php
require_once 'action/koneksi.php';
if (isset($_POST['Input'])){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$jenkel = $_POST['jenkel'];	
	$email = $_POST['email'];
	$dewasa = $_POST['dewasa'];
	$anak = $_POST['anak'];
	$asal = $_POST['asal'];
	$tujuan = $_POST['tujuan'];
	$seat = $_POST['seat'];				
	$connect->query("INSERT INTO costumer (nama, alamat, telp, jenkel, email, dewasa, anak, asal, tujuan, seat) VALUES ('$nama','$alamat','$telp','$jenkel','$email','$dewasa','$anak','$asal','$tujuan','$seat')");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Traveler</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
		<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
		<meta name="author" content="FreeHTML5.co" />

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />


		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/tambahan.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<nav class="gtco-nav" role="navigation" style="background-color: #000">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Traveler <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="booking.php">Booking</a></li>
						<li class="has-dropdown">
							<a href="#">Travel</a>
							<ul class="dropdown">
								<li><a href="#">Europe</a></li>
								<li><a href="#">Asia</a></li>
								<li><a href="#">America</a></li>
								<li><a href="#">Canada</a></li>
							</ul>
						</li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>

	<div class="breadcrum">
		<div class="container">
			<div class="row">
				<h3>Booking Tiket</h3>
			</div>
		</div>
	</div>

	<div class="forms-main">
		<div class="container">
			<div class="row">
				<h2 class="inner-tittle">Form Data Pesawat</h2>
				<div class="graph-form">
					<div class="form-body">
						<form class="form-horizontal" role="form" method="POST"> 
							<div class="form-group"> 
								<label>Nama</label> 
								<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama"> 
							</div> 
							<div class="form-group"> 
								<label>Alamat</label> 
								<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat"> 
							</div> 
							<div class="form-group"> 
								<label>Telphone</label> 
								<input type="text" class="form-control" id="telp" placeholder="Telphone" name="telp"> 
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label><br>
								<input type="radio" name="jenkel" value="laki-laki" checked="">Laki-laki
								<input type="radio" name="jenkel" value="perempuan" checked="">Perempuan
							</div>
							<div class="form-group"> 
								<label>Email</label> 
								<input type="email" class="form-control" id="email" placeholder="email" name="email"> 
							</div>
							<div class="form-group">
								<label class="control-label">Dewasa</label><br>
								<select class="form-control" name="dewasa">
									<option>Penumpang Dewasa</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label">Anak</label><br>
								<select class="form-control" name="anak">
									<option>Penumpang anak-anak</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="form-group"> 
								<label>Asal</label> 
								<input type="text" class="form-control" id="asal" placeholder="Bandara Kebrangkatan" name="asal"> 
							</div>
							<div class="form-group"> 
								<label>Tujuan</label> 
								<input type="text" class="form-control" id="tujuan" placeholder="Bandara Tujuan" name="tujuan"> 
							</div>
							<div class="form-group"> 
								<label>Seat</label> 
								<input type="text" class="form-control" id="seat" placeholder="Jumlah Seat" name="seat"> 
							</div>
							<div class="submit">
								<input type="submit" value="Input" name="Input">
							</div> 
						</form> 
					</div>

				</div>
			</div>
		</div>
	</div>

</body>
</html>