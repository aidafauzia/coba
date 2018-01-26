 		<?php
 		session_start();
 		if($_SESSION['traveler']){

 			?>

 			<?php
 			require_once '../../action/koneksi.php';
 			$ambilid = $_GET['id'];
 			$res = $connect ->query("SELECT * from costumer where id='$ambilid'");
 			$data = $res->fetch_array(MYSQLI_ASSOC);

 			if(isset($_POST['edit'])){
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
 				$update = $connect->query("UPDATE costumer SET nama='$nama', alamat='$alamat', telp='$telp', jenkel='$jenkel', email='$email', dewasa='$dewasa', anak='$anak', asal='$asal', tujuan='$tujuan', seat='$seat' WHERE id='$ambilid'");
 				header("location:dafcostumer.php");

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
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Forms :: w3layouts</title>
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
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--menu-right-->

					<!--/profile_details-->

					<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

				<!-- //header-ends -->
				<!--//outer-wp-->
				<div class="outter-wp">
					<!--/sub-heard-part-->

					<!--/sub-heard-part-->	
					<!--/forms-->
					<div class="forms-main">
						<h2 class="inner-tittle">Form Data Pesawat</h2>
						<div class="graph-form">
							<div class="form-body">
								<form class="form-horizontal" role="form" method="POST"> 
									<div class="form-group"> 
										<label>Nama</label> 
										<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?php echo $data['nama'];?>"> 
									</div> 
									<div class="form-group"> 
										<label>Alamat</label> 
										<input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="<?php echo $data['alamat'];?>"> 
									</div> 
									<div class="form-group"> 
										<label>Telphone</label> 
										<input type="text" class="form-control" id="telp" placeholder="Telphone" name="telp" value="<?php echo $data['telp'];?>"> 
									</div>
									<div class="form-group">
										<label>Jenis Kelamin</label><br>
										<input type="radio" name="jenkel" value="laki-laki" checked="">Laki-laki
										<input type="radio" name="jenkel" value="perempuan" checked="">Perempuan
									</div>
									<div class="form-group"> 
										<label>Email</label> 
										<input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $data['email'];?>"> 
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
										<input type="text" class="form-control" id="asal" placeholder="Bandara Kebrangkatan" name="asal" value="<?php echo $data['asal'];?>"> 
									</div>
									<div class="form-group"> 
										<label>Tujuan</label> 
										<input type="text" class="form-control" id="tujuan" placeholder="Bandara Tujuan" name="tujuan" value="<?php echo $data['tujuan'];?>"> 
									</div>
									<div class="form-group"> 
										<label>Seat</label> 
										<input type="text" class="form-control" id="seat" placeholder="Jumlah Seat" name="seat" value="<?php echo $data['seat'];?>"> 
									</div>
									<div class="submit">
										<input type="submit" value="edit" name="edit">
									</div> 
								</form> 
							</div>

						</div>
						<!--/forms-inner-->

						<!--//outer-wp-->
						<!--footer section start-->

						<!--footer section end-->
					</div>
				</div>
				<!--//content-inner-->
				<!--/sidebar-menu-->
				<?php require_once 'page' ?>
				<!--js -->
				<script src="js/jquery.nicescroll.js"></script>
				<script src="js/scripts.js"></script>

				<!-- Bootstrap Core JavaScript -->
				<script src="js/bootstrap.min.js"></script>
			</body>
			</html>
			<?php
		} else {
			echo "<script>window.location='../login.php';</script>";
		}