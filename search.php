<?php
require "action/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Best Travel</title>
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Govihar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link type="text/css" rel="stylesheet" href="css/JFFormStyle-1.css" />
	<!-- js -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!-- //js -->
	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- //fonts -->	
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!--pop-up-->
	<script src="js/menu_jquery.js"></script>
	<!--//pop-up-->	
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="container">
			<div class="header-grids">
				<div class="logo">
					<h1><a  href="index.php"><span>Best Travel</a></h1>
					</div>
					<!--navbar-header-->
					<div class="header-dropdown">
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="nav-top">
					<div class="top-nav">
						<span class="menu"><img src="images/menu.png" alt="" /></span>
						<ul class="nav1">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="hotels.php">Hotels</a></li>
							<li><a href="flights-hotels.php">Flight+Hotel</a></li>
							<li><a href="trains.php">Trains</a></li>
							<li><a href="deals.php">Deals</a></li>
						</ul>
						<div class="clearfix"> </div>
						<!-- script-for-menu -->
						<script> 
							$( "span.menu" ).click(function() {
								$( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								});
							});

						</script>
						<!-- /script-for-menu -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--//header-->
		<!-- banner -->
		<div class="banner">
			<!-- container -->
			<div class="container">
				<div class="col-md-12 banner-right">
					<div class="sap_tabs">	
						<div class="booking-info">
							<h2>Hasil Pencarian</h2>
						</div>
						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							<table class="table" style="color: white;">
								<thead>
									<tr>
										<th>No</th>
										<th>Asal</th>
										<th>Tujuan</th>
										<th>Tanggal</th>
										<th>Maskapai</th>
										<th>Harga</th>
										<th>Pesan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									require "action/koneksi.php";
									if(isset($_GET['asal'])){
										$asal = $_GET['asal'];
										$tujuan = $_GET['tujuan'];
										$tgl = $_GET['tgl'];
										$data = mysqli_query($cn, "SELECT * FROM rute where asal like '".$asal."' AND tujuan like '".$tujuan."' AND tgl like '".$tgl."' order by harga");  
										$id = 1;
										while($d = mysqli_fetch_array($data)){
											echo'
											<tr>
											<td>'.$id.'</td>
											<td> '.$d['asal'].'</td>
											<td> '.$d['tujuan'].'</td>
											<td> '.$d['tgl'].'</td>
											<td> '.$d['pesawat'].'</td>
											<td>Rp. '.$d['harga'].'</td>
											<td><a href="pesan.php?id_rute='.$d['id_rute'].'" style="color:white;">Pesan</a></td>
											</tr>';
											$id++;
										} 
									}
									?>
								</tbody>
							</table>
						</div>
						<div class="reservation">
							<ul>	
								<li class="span1_of_3">
									<div class="date_btn"><a href="index.php" style="color: white;">Back to Home</a>
									</div>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>	
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //container -->
		</div>
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<!-- container -->
			<div class="container">
				<div class="banner-bottom-info">
					<h3>Today's Top Deals</h3>
				</div>
				<div class="banner-bottom-grids">
					<div class="col-md-4 banner-bottom-grid">
						<div class="destinations">
							<ul>
								<li class="button"><a href="#">Goa Popular Hotels</a>
									<li class="dropdown active">
										<a href="products.php">
											<div class="destinations-grid">
												<img src="images/a1.jpg" alt="" />
											</div>
											<div class="destinations-grid-info">
												<div class="destinations-hotel">Lorem ipsum dolor sit amet , Goa</div>
												<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
												<div class="destinations-price">$100</div>
												<div class="clearfix"> </div>
											</div>
										</a>
									</li>
								</li>
								<li class="button"><a href="#">Bangalore Popular Hotels</a>
									<li class="dropdown">
										<a href="products.php">
											<div class="destinations-grid">
												<img src="images/a4.jpg" alt="" />
											</div>
											<div class="destinations-grid-info">
												<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangalore</div>
												<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
												<div class="destinations-price">$100</div>
												<div class="clearfix"> </div>
											</div>
										</a>
									</li>
								</li>							
								<li class="button"><a href="#">Bangkok Popular Hotels</a>
									<li class="dropdown">
										<a href="products">
											<div class="destinations-grid">
												<img src="images/a3.jpg" alt="" />
											</div>
											<div class="destinations-grid-info">
												<div class="destinations-hotel">Lorem ipsum dolor sit amet , Bangkok</div>
												<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
												<div class="destinations-price">$240</div>
												<div class="clearfix"> </div>
											</div>
										</a>
									</li>
								</li>
								<li class="button"><a href="#">Malaysia Popular Hotels</a>
									<li class="dropdown">
										<a href="products.php">
											<div class="destinations-grid">
												<img src="images/a1.jpg" alt="" />
											</div>
											<div class="destinations-grid-info">
												<div class="destinations-hotel">Lorem ipsum dolor sit amet , Malaysia</div>
												<div class="destinations-star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span><span class="glyphicon glyphicon-star" aria-hidden="true"></span></div>
												<div class="destinations-price">$320</div>
												<div class="clearfix"> </div>
											</div>
										</a>
									</li>
								</li>							 
							</ul>
						</div>
						<div class="choose">
							<div class="choose-info">
								<h4>Why Choose Us</h4>
							</div>
							<div class="choose-grids">
								<div class="choose-grids-info">
									<div class="choose-left">
										<h5>09</h5>
										<span>Million</span>
									</div>
									<div class="choose-right">
										<a href="products.php">Aliquam faucibus vehicula vulputate</a>
										<p>Maecenas euismod tortor a tristique convallis diam eros aliquam.</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="choose-grids-info">
									<div class="choose-left">
										<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
									</div>
									<div class="choose-right">
										<a href="products.php">Sed tincidunt consectetur augue</a>
										<p>Nulla bibendum libero in nunc eleifend tincidunt. Aliquam quis molestie lectus</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="choose-grids-info">
									<div class="choose-left">
										<h6>$</h6>
									</div>
									<div class="choose-right">
										<a href="products.php">Nullam et arcu interdum, accumsan justo</a>
										<p>Maecenas dapibus eu purus vel imperdiet. Maecenas cursus, arcu sed tempus </p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 banner-bottom-grid">
						<div class="banner-bottom-middle">
							<a href="products.php">
								<img src="images/a2.jpg" alt="" />
								<div class="destinations-grid-info tours">
									<h5>Book your next Malaysia holiday!</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
								</div>
							</a>
						</div>
						<div class="top-destinations-grids">
							<div class="top-destinations-info">
								<h4>Top Destinations</h4>
							</div>
							<div class="top-destinations-bottom">
								<div class="td-grids">
									<div class="col-xs-3 td-left">
										<img src="images/t1.jpg" alt="" />
									</div>
									<div class="col-xs-7 td-middle">
										<a href="products.php">Donec libero id lacinia</a>
										<p>Dapibus eu purus vel libero in nunc</p>
										<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</div>
									<div class="col-xs-2 td-right">
										<p>$190</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="td-grids">
									<div class="col-xs-3 td-left">
										<img src="images/t2.jpg" alt="" />
									</div>
									<div class="col-xs-7 td-middle">
										<a href="products.php">Donec libero id lacinia</a>
										<p>Dapibus eu purus vel libero in nunc</p>
										<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</div>
									<div class="col-xs-2 td-right">
										<p>$213</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="td-grids">
									<div class="col-xs-3 td-left">
										<img src="images/t3.jpg" alt="" />
									</div>
									<div class="col-xs-7 td-middle">
										<a href="products.php">Donec libero id lacinia</a>
										<p>Dapibus eu purus vel libero in nunc</p>
										<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</div>
									<div class="col-xs-2 td-right">
										<p>$176</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="td-grids">
									<div class="col-xs-3 td-left">
										<img src="images/t4.jpg" alt="" />
									</div>
									<div class="col-xs-7 td-middle">
										<a href="products.php">Donec libero id lacinia</a>
										<p>Dapibus eu purus vel libero in nunc</p>
										<span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
									</div>
									<div class="col-xs-2 td-right">
										<p>$490</p>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 banner-bottom-grid">
						<div class="banner-bottom-right">
							<a href="products.php">
								<img src="images/a3.jpg" alt="" />
								<div class="destinations-grid-info tours">
									<h5>New Hotel Experiences at Your Favourite Destinations</h5>
									<p>Integer eget aliquam nibh. Donec blandit volutpat libero id lacinia</p>
									<p class="b-period">Book Period: Now - 7 September 2015 | Travel Period: Now - 31 October 2015 </p>
								</div>
							</a>
						</div>
						<div class="news-grids">
							<div class="news-grids-info">
								<h4>Latest News</h4>
							</div>
							<div class="news-grids-bottom">
								<!-- date -->
								<div id="design" class="date">
									<div id="cycler">   
										<div class="date-text">
											<a href="single.php">August 15,2015</a>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
										</div>
										<div class="date-text">
											<a href="single.php">July 08,2015</a>
											<p>Nullam non turpis sit amet metus tristique egestas et et orci.</p>
										</div>
										<div class="date-text">
											<a href="single.php">February 15,2015</a>
											<p>Duis venenatis ac ipsum vel ultricies in placerat quam</p>
										</div>
										<div class="date-text">
											<a href="single.php">January 15,2015</a>
											<p>Pellentesque ullamcorper fringilla ipsum, ornare dapibus velit volutpat sit amet.</p>
										</div>
										<div class="date-text">
											<a href="single.php">September 24,2014</a>
											<p>In lobortis ipsum mi, ac imperdiet elit pellentesque at.</p>
										</div>
									</div>
									<script>
										function cycle($item, $cycler){
											setTimeout(cycle, 2000, $item.next(), $cycler);

											$item.slideUp(1000,function(){
												$item.appendTo($cycler).show();        
											});

										}
										cycle($('#cycler div:first'),  $('#cycler'));
									</script>
								</div>
								<!-- //date -->
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-bottom -->
		<!-- popular-grids -->
		<div class="popular-grids">
			<!-- container -->
			<div class="container">
				<div class="popular-info">
					<h3>Popular Places</h3>
				</div>
				<!-- slider -->
				<div class="slider">
					<div class="arrival-grids">			 
						<ul id="flexiselDemo1">
							<li>
								<a href="products.php"><img src="images/a3.jpg" alt=""/>
								</a>
							</li>
							<li>
								<a href="products.php"><img src="images/a2.jpg" alt=""/>
								</a>
							</li>
							<li>
								<a href="products.php"><img src="images/a4.jpg" alt=""/>
								</a>
							</li>
							<li>
								<a href="products.php"><img src="images/a1.jpg" alt=""/>
								</a>
							</li>
						</ul>
						<script type="text/javascript">
							$(window).load(function() {			
								$("#flexiselDemo1").flexisel({
									visibleItems: 4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover:true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
							});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
					</div>
				</div>
				<!-- //slider -->
			</div>
			<!-- //container -->
		</div>
		<!-- popular-grids -->
		<!-- footer -->
		<div class="footer">
			<!-- container -->
			<div class="container">
				<div class="footer-top-grids">
					<div class="footer-grids">
						<div class="col-md-3 footer-grid">
							<h4>Our Products</h4>
							<ul>
								<li><a href="index.php">Flight Schedule</a></li>
								<li><a href="flights-hotels.php">City Airline Routes</a></li>
								<li><a href="index.php">International Flights</a></li>
								<li><a href="hotels.php">International Hotels</a></li>
								<li><a href="index.php">Domestic Airlines</a></li>
								<li><a href="hotels.php">Hotel Booking</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Company</h4>
							<ul>
								<li><a href="about.php">About Us</a></li>
								<li><a href="faqs.php">FAQs</a></li>
								<li><a href="terms.php">Terms &amp; Conditions</a></li>
								<li><a href="privacy.php">Privacy </a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="booking.php">Feedback</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>Travel Resources</h4>
							<ul>
								<li><a href="index.php">International Airports</a></li>
								<li><a href="index.php">Domestic Flights Booking</a></li>
								<li><a href="booking.php">Customer Support</a></li>
								<li><a href="booking.php">Cancel Bookings</a></li>
								<li><a href="booking.php">Print E-tickets</a></li>
								<li><a href="booking.php">Customer Forums</a></li>
								<li><a href="booking.php">Make a Payment</a></li>
								<li><a href="booking.php">Complete Booking</a></li>
								<li><a href="booking.php">Assurance Claim</a></li>
								<li><a href="booking.php">Retail Offices</a></li>
							</ul>
						</div>
						<div class="col-md-3 footer-grid">
							<h4>More Links</h4>
							<ul class="chf_footer_list">
								<li><a href="#">Flights Discount Coupons</a></li>
								<li><a href="#">Domestic Airlines</a></li>
								<li><a href="#">Indigo Airlines</a></li>
								<li><a href="#">Air Asia</a></li>
								<li><a href="#">Jet Airways</a></li>
								<li><a href="#">SpiceJet</a></li>
								<li><a href="#">GoAir</a></li>
								<li><a href="#">Air India</a></li>
								<li><a href="#">Domestic Flight Routes</a></li>
								<li><a href="#">Indian City Flight</a></li>
								<li><a href="#">Flight Sitemap</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<!-- news-letter -->
					<div class="news-letter">
						<div class="news-letter-grids">
							<div class="col-md-4 news-letter-grid">
								<p>Toll Free No : <span>1234-5678-901</span></p>
							</div>
							<div class="col-md-4 news-letter-grid">
								<p class="mail">Email : <a href="mailto:info@example.com">mail@example.com</a></p>
							</div>
							<div class="col-md-4 news-letter-grid">
								<form role="form" method="POST">
									<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<input type="submit" value="Subscribe">
								</form>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!-- //news-letter -->
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //footer -->
		<div class="footer-bottom-grids">
			<!-- container -->
			<div class="container">
				<div class="footer-bottom-top-grids">
					<div class="col-md-4 footer-bottom-left">
						<h4>Download our mobile Apps</h4>
						<div class="d-apps">
							<ul>
								<li><a href="#"><img src="images/app1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/app2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/app3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>We Accept</h4>
						<div class="a-cards">
							<ul>
								<li><a href="#"><img src="images/c1.png" alt="" /></a></li>
								<li><a href="#"><img src="images/c2.png" alt="" /></a></a></li>
								<li><a href="#"><img src="images/c3.png" alt="" /></a></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 footer-bottom-left">
						<h4>Follow Us</h4>
						<div class="social">
							<ul>
								<li><a href="#" class="facebook"> </a></li>
								<li><a href="#" class="facebook twitter"> </a></li>
								<li><a href="#" class="facebook chrome"> </a></li>
								<li><a href="#" class="facebook dribbble"> </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script defer src="js/jquery.flexslider.js"></script>
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script src="js/jquery-ui.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript">
			$(function(){
				SyntaxHighlighter.all();
			});
			$(window).load(function(){
				$('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
						$('body').removeClass('loading');
					}
				});
			});
		</script>		
	</body>
	</html>