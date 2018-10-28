<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Restaurant </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Luscious a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<!--Header-->
	<div class="header" id="home">
		<!--/top-bar-->
		<div class="top-bar">
			<div class="header-top_w3layouts">
				
				
				<div class="search">
					<div class="cd-main-header">
						<ul class="cd-header-buttons">
							<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
						</ul>
						<!-- cd-header-buttons -->
					</div>
					<div id="cd-search" class="cd-search">
						<form action="homepage.php" method="post">
							<input name="Search" type="search" placeholder="Click enter after typing...">
						</form>
					</div>

				</div>
				<div class="clearfix"></div>

			</div>
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
						
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="top_nav">
								<li><a class="scroll" href="#home" class="active">Home</a></li>
								
						</nav>
					</div>
				</nav>

			</div>
		</div>
			<!--//top-bar-->
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					
						<div class="banner-top3">
							<div class="banner-info_agile_w3ls">
								<h3>Find <span> Your</span> Restaurant</h3>
								<p>Small change,Big differences.</p>
								
							</div>

						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>

			<!--banner Slider starts Here-->
		</div>
		<!-- //Modal1 -->
		<!--//Slider-->
	</div>
	<!--//Header-->


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->

	<!-- js for portfolio lightbox -->
	<script src="js/jquery.chocolat.js "></script>
	<link rel="stylesheet " href="css/chocolat.css " type="text/css" media="all" />
	<!--light-box-files -->
	<script type="text/javascript ">
		$(function () {
			$('.portfolio-grids a').Chocolat();
		});
	</script>
	<!-- /js for portfolio lightbox -->
	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!-- //time -->

	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--// script for responsive tabs -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>





<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Restaurant</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trendy Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js1/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts1.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>

<!-- banner -->
<!DOCTYPE html>
<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
    color: orange;
}
</style>
</head>

</html>
	
	
			<!--banner Slider starts Here-->
		

				
				<div class="news">
					<div class="news-grids">
						<div class="col-md-12 news-grid-left">
							<h3>Restuarants  in   Dhaka</h3>
							<ul>
								<?php
									include("database.php");

									if(isset($_POST['Search']))
									{
										$conn = connect();
										$name = $_POST['Search'];
										$query = mysqli_query($conn, "SELECT * FROM `search` WHERE name like '%$name%' ");

										//$res = mysqli_query($conn,$query);
										while ($row = mysqli_fetch_array($query)) {
											//echo($row['name']."<br>");
											$link = $row['link'];
											$name = $row['name'];
											$img =  $row['img'];
											$rating = $row['rating'];
											$rating = (int) $rating;

											echo("<li>");
											echo("<div class='news-grid-left1'>");
											echo("<img src='$img' alt='' class='img-responsive' />");
											echo("</div>");
											echo("<div class='news-grid-right1'>");
											echo("<h4><a href='$link'>$name</a></h4>");
											echo("<p>".$row['address']."</p>");
											echo("<p> Rating $rating.0 </p>");
											for($i=0;$i<$rating;$i++)
											{
												echo("<span class='fa fa-star checked'></span>");
												/*echo("<span class='fa fa-star checked'></span>");
												echo("<span class='fa fa-star checked'></span>");
												echo("<span class='fa fa-star checked'></span>");*/
											}
											for($i=0;$i<(5-$rating);$i++)
											{
												echo("<span class='fa fa-star'></span>");
											}
											echo("</div>");
											echo("<div class='clearfix'> </div>");
											echo("</li>");

										}
									}
									?>
								
								
								<li>
									<div class="news-grid-left1">
										<img src="images1/1.jfif" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="index.php">Mascott Restuarant</a></h4>
										
										<p>Emperial Amin Ahmed Center, House 54, Road 10/A, Dhanmondi, Dhaka 1209</p>

										<p> Rating 4.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/img.png"  style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive"alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="coffee.php">The Coffee Bean & Tea Leaf</a></h4>
										
										<p>House No 11/A, Road 117, Gulshan 2, Dhaka 1212.</p>
										<p> Rating 5.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
									</div>
									<div class="clearfix"> </div>
								</li>

								<li>
									<div class="news-grid-left1">
										<img src="images1/2.jfif" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Sultan's Dine</a></h4>
										
										<p>H.No.146/G(Old), 59(new), Green Akshay Plaza, 1st FloorSatmasjid Road, Dhaka 1209</p>
								
									<p> Rating 5.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/d.jfif" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="fish.php">Fish & Co.</a></h4>
										
										<p>22 Bir Uttam AK Khandakar Rd, Dhaka 1212</p>
									
									<p> Rating 3.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                        </div>
									<div class="clearfix"> </div>
								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/a.jfif" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Santoor Restaurant</a></h4>
										
										<p>11(New), 32(Old) Mirpur Road, House-2, Road-32, Dhanmondi, Dhaka 1209.</p>
								
									<p> Rating 4.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								
								<li>
									<div class="news-grid-left1">
										<img src="images1/c.png" style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html"  >Chillox</a></h4>
										
										<p>1 st Floor, Jeary Cuisine, Road No 3/A, 60 Satmasjid.</p>
								
									<p> Rating 4.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/b.jfif" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Bistro</a></h4>
										
										<p>971, Begum Rokeya Avenue, Dhaka 1216</p>
								
									<p> Rating 2.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/y.jfif" style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Club Geleto</a></h4>
										
										<p>11(New), 32(Old) Mirpur Road, House-2, Road-32, Dhanmondi, Dhaka 1209.</p>
								
									<p> Rating 3.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/t.jfif" style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Takeout 2.0</a></h4>
										
										<p>12/A Dhanmondi, Dhaka 1207.</p>
								
									<p> Rating 5.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/e.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">Chilis Restaurant</a></h4>
										
										<p>11(New), 32(Old) Mirpur Road, House-2, Road-32, Dhanmondi, Dhaka 1209.</p>
								
									<p> Rating 4.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/n.png" style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4><a href="single.html">KFC</a></h4>
										
										<p>Ringroad Shymoli Dhaka-1207</p>
								
									<p> Rating 3.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star "></span>
                                        <span class="fa fa-star"></span>
                                        	</div>
									<div class="clearfix"> </div>

								</li>
								<li>
									<div class="news-grid-left1">
										<img src="images1/download.jfif" style="height: 160px;
                                                                       width: 100%;" alt=" " class="img-responsive" />
									</div>
									<div class="news-grid-right1">
										<h4 ><a href="single.html">Pizza Square </a></h4>
										
										<p>M/1,1st Floor,Nurjahan Road,Mohammadpur,Dhaka. Dhaka, Bangladesh.</p>
										<p> Rating 4.0 </p>
										<span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
									</div>
									<div class="clearfix"> </div> 
								</li>
							</ul>
						</div>
						

<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js1/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
