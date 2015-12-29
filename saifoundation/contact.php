<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Smartway - HTML Template">
		<meta name="author" content="Coffeecream Themes, info@coffeecream.eu">
		<title>Smartway - HTML Template</title>
		<link rel="shortcut icon" href="images/favicon.png">

		<!-- Main Stylesheet -->
		<link href="css/style.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body >

		<?php include('include/header.php');?>

		<!-- ========== HEADER END ========== -->

		<!-- ========== TITLE START ========== -->

		<div class="title">
			<div class="title-image"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Contact
					</div>
				</div>
			</div>
		</div>

		<!-- ========== TITLE END ========== -->

		<!-- ========== MAP START ========== -->

		<!-- Google Map Script -->
		<script type="text/javascript" src="https://www.google.co.in/maps/place/Gurusthan+Sri+Saibaba/@19.7657571,74.4773104,17z/data=!4m2!3m1!1s0x3bdc5b9584aa39af:0x24321636a5914f3b&amp;sensor=false"></script>
		<script type="text/javascript">

			function initialize() {

				// Create an array of styles.
				var styles = [
					{
						"featureType": "water",
						"stylers": [
							{ "hue": "#89909a" },
							{ "lightness": 60 }
						]
					},{
						featureType: "road",
						elementType: "geometry",
						stylers: [
							{ lightness: 50 },
							{ visibility: "simplified" }
						]
					},{
						featureType: "road",
						elementType: "labels",
						stylers: [
							{ visibility: "off" }
						]
					}
				];

				// Create a new StyledMapType object, passing it the array of styles,
				// as well as the name to be displayed on the map type control.
				var styledMap = new google.maps.StyledMapType(styles,
				{name: "Styled Map"});


							var mapOptions = {
								scrollwheel: false,
								zoom: 12,
								center: new google.maps.LatLng(34.087522, -118.380155),
				mapTypeControlOptions: {
				  mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
				}
				}
				var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

				//Associate the styled map with the MapTypeId and set it to display.
				map.mapTypes.set('map_style', styledMap);
				map.setMapTypeId('map_style');

				setMarkers(map, places);
			}

			var places = [
				['<b>Smartway Learning Centre</b><br>8699 Santa Monica Blvd<br>Los Angeles<br>CA 90069-4109', 34.087522, -118.380155, 1]
			];

			function setMarkers(map, locations) {
				// Add markers to the map
				var image = {
					url: 'images/marker.png',
					// This marker is 40 pixels wide by 42 pixels tall.
					size: new google.maps.Size(40, 42),
					// The origin for this image is 0,0.
					origin: new google.maps.Point(0,0),
					// The anchor for this image is the base of the pin at 20,42.
					anchor: new google.maps.Point(15, 42)
				};

					var infowindow = new google.maps.InfoWindow();

					var marker, i;
					var markers = new Array();

					for (var i = 0; i < locations.length; i++) {
						var place = locations[i];
						var myLatLng = new google.maps.LatLng(place[1], place[2], place[3]);
						var marker = new google.maps.Marker({
							position: myLatLng,
							map: map,
							icon: image,
							title: place[0],
							zIndex: place[3],
							animation: google.maps.Animation.DROP
						});

						markers.push(marker);

						google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
								infowindow.setContent(locations[i][0]);
								infowindow.open(map, marker);
							}
						})(marker, i));
					}
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>

		

		<!-- ========== MAP END ========== -->

		<!-- ========== CONTENT START ========== -->

		<section id="content">
			<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="row">
							<div class="col-xs-12">
								<h1>Contact Details</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-map-marker fa-5x primary-color"></i>
							</div>
							<div class="col-lg-10 col-xs-9">
								<h3 class="no-margin">Address</h3>
								Shri Sai Parivar foundation (Regd)<br/>
Sainath Niwas,Kankuri Road<br/>
Shirdi<br/>
Tal-Rahata<br/>
Dist-Ahmednagar<br/>
Maharshtra-423109<br/>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-phone fa-5x primary-color"></i>
							</div>
							<div class="col-lg-10 col-xs-9">
								<h3 class="no-margin">Phone &amp; Fax</h3>
								Phone: <a href="tel:8856063333">8856-063-333</a><br>
								Phone: <a href="tel:9850212233">9850-212-233</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<hr>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-2 col-xs-3">
								<i class="fa fa-envelope fa-4x primary-color"></i>
							</div>
							
						</div>
					</div>
					<div class="col-sm-7">
						<p>&nbsp;</p>
						<img src="http://placehold.it/700x454.jpg" alt="" class="img-responsive" />
					</div>
				</div>
			</div>
		</section>

		<!-- ========== CONTENT END ========== -->

		<!-- ========== CONTACT FORM START ========== -->

		<section id="contact" class="alt-background">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2>Contact Form</h2>
					</div>
				</div>
				<form role="form" name="contact-form" id="contact-form" action="process-contact.php">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group" id="contact-name-group">
								<label for="contact-input-name">Name</label>
								<input type="text" class="form-control" id="contact-input-name" placeholder="Enter your name">
							</div>
							<div class="form-group" id="contact-email-group">
								<label for="contact-input-email">Email</label>
								<input type="email" class="form-control" id="contact-input-email" placeholder="Enter your email">
							</div>
							<div class="form-group" id="contact-subject-group">
								<label for="contact-input-subject">Subject</label>
								<input type="text" class="form-control" id="contact-input-subject" placeholder="Enter your subject">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group" id="contact-message-group">
								<label for="contact-input-message">Message</label>
								<textarea class="form-control" id="contact-input-message" rows="8"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<!-- ========== CONTACT FORM END ========== -->

		<!-- ========== LINKS START ========== -->

		<div id="links">
			<div class="container">
				<div class="row">

					<!-- ==== QUICK LINKS START == -->
					<div class="col-sm-3">
						<h3>Quick Links</h3>
						<nav>
							<ul>
								<li><a href="#"><i class="fa fa-angle-right"></i>All Courses</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Summer Sessions</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Professional Courses</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Our Teachers</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Privacy Policy</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i>Terms &amp; Conditions</a></li>
							</ul>
						</nav>
					</div>
					<!-- ==== QUICK LINKS END == -->

					<!-- ==== LATEST COURSES START == -->
					<div class="col-sm-3">
						<h3>Latest Courses</h3>
						<ul>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Web Design Basics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Web Development Basics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Photography Advanced Technics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== LATEST COURSES END == -->

					<!-- ==== POPULAR COURSES START == -->
					<div class="col-sm-3">
						<h3>Popular Courses</h3>
						<ul>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Web Design Basics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Web Development Basics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
							<li>
								<img src="http://placehold.it/50x50.jpg" alt="" class="pull-left" />
								<h5><a href="courses-details-right-sidebar.html">Photography Advanced Technics</a></h5>
								<p class="author"><a href="teachers-profile.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== POPULAR COURSES END == -->

					<!-- ==== LATEST COMMENTS START == -->
					<div class="col-sm-3">
						<h3>Latest Comments</h3>
						<ul>
							<li>
								<p><a href="blog-article-right-sidebar.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ut rutrum eros, a rutrum urna.</a></p>
								<p class="author"><a href="blog-article-right-sidebar.html">by John Doe</a></p>
							</li>
							<li>
								<p><a href="blog-article-right-sidebar.html">Donec lorem mi, eleifend sit amet varius vitae, ullamcorper et urna. Aliquam tincidunt tempus purus vitae laoreet.</a></p>
								<p class="author"><a href="blog-article-right-sidebar.html">by John Doe</a></p>
							</li>
						</ul>
					</div>
					<!-- ==== LATEST COMMENTS END == -->

				</div>
			</div>
		</div>

		<!-- ========== LINKS END ========== -->

		<!-- ========== PREFOOTER START ========== -->

		<div id="prefooter">
			<div class="container">
				<div class="row">

					<!-- ==== ABOUT START == -->
					<div class="col-sm-6">
						<h3>About Us</h3>
						<div class="row">
							<div class="col-sm-5">
								<p><img src="http://placehold.it/270x180.jpg" alt="" class="img-responsive" /></p>
							</div>
							<div class="col-sm-7">
								<p>Morbi nec quam sed elit pharetra faucibus. Cras vel massa viverra ligula suscipit interdum eget nec est. Cras nibh mi, faucibus at ligula eu, eleifend tincidunt justo. Nunc porttitor massa at nisi condimentum fringilla. Nullam finibus, nibh eu hendrerit suscipit, tellus mi commodo lectus, sit amet dictum sem lorem sed neque.<br>
								<a href="#">Read More <i class="fa fa-angle-right"></i></a></p>
							</div>
						</div>
					</div>
					<!-- ==== ABOUT END == -->

					<!-- ==== APPLY FOR TEACHER START == -->
					<div class="col-sm-3">
						<h3>Apply for a Teacher</h3>
						<form role="form" name="teacher-form" id="teacher-form" action="process-teacher.php">
							<div class="form-group" id="teacher-name-group">
								<div class="input-group">
									<input type="text" class="form-control" id="teacher-input-name" placeholder="Name">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
								</div>
							</div>
							<div class="form-group" id="teacher-email-group">
								<div class="input-group">
									<input type="email" class="form-control" id="teacher-input-email" placeholder="Email">
									<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
								</div>
							</div>
							<div class="form-group" id="teacher-phone-group">
								<div class="input-group">
									<input type="text" class="form-control" id="teacher-input-phone" placeholder="Phone">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<!-- ==== APPLY FOR TEACHER END == -->

					<!-- ==== CONTACT START == -->
					<div class="col-sm-3">
						<h3>Contact</h3>
						<p>Smartway Learning Centre<br>
						8699 Santa Monica Blvd<br>
						Los Angeles, CA 90069-4109</p>

						<p>Phone: <a href="tel:1800123456">1800-123-456</a><br>
						Fax: <a href="tel:1800123456">1800-123-456</a><br>
						Email: <a href="mailto:info@smartway.com">info@smartway.com</a></p>

						<p><a href="contact.html">Get Directions <i class="fa fa-angle-right"></i></a></p>
					</div>
					<!-- ==== CONTACT END == -->

				</div>
			</div>
		</div>

		<!-- ========== PREFOOTER END ========== -->

		<!-- ========== FOOTER START ========== -->

		<footer>
			<div class="container">
				<div class="row">

					<!-- ==== CREDITS START == -->
					<div class="col-sm-8">
						&copy; 2014 Smartway Theme by Coffeecream Themes
					</div>
					<!-- ==== CREDITS END == -->

					<!-- ==== SOCIAL ICONS START == -->
					<div class="col-sm-4 text-right">
						<a href="#"><i class="fa fa-facebook fa-lg"></i></a>
						<a href="#"><i class="fa fa-twitter fa-lg"></i></a>
						<a href="#"><i class="fa fa-linkedin fa-lg"></i></a>
						<a href="#"><i class="fa fa-youtube fa-lg"></i></a>
					</div>
					<!-- ==== SOCIAL ICONS END == -->

				</div>
			</div>
		</footer>

		<!-- ========== FOOTER END ========== -->

		<!-- Modernizr Plugin -->
		<script src="js/modernizr.custom.97074.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.11.1.min.js"></script>

		<!-- Bootstrap Plugins -->
		<script src="js/bootstrap.min.js"></script>

		<!-- Retina Plugin -->
		<script src="js/retina-1.1.0.min.js"></script>

		<!-- Superslides Plugin -->
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.animate-enhanced.min.js"></script>
		<script src="js/jquery.superslides.js"></script>

		<!-- Owl Carousel Plugin -->
		<script src="js/owl.carousel.min.js"></script>

		<!-- Parallax ImageScroll Plugin -->
		<script src="js/jquery.parallax-1.1.3.js"></script>

		<!-- Fancybox Plugin -->
		<script src="js/jquery.fancybox.js"></script>

		<!-- ImagesLoaded Plugin -->
		<script src="js/imagesloaded.pkgd.min.js"></script>

		<!-- Masonry Plugin -->
		<script src="js/masonry.pkgd.min.js"></script>

		<!-- Progressbar Plugin -->
		<script src="js/bootstrap-progressbar.js"></script>

		<!-- Scroll Reveal Plugin -->
		<script src="js/scrollReveal.js"></script>

		<!-- Magic Form Processing -->
		<script src="js/magic.js"></script>

		<!-- jQuery Settings -->
		<script src="js/settings.js"></script>

	</body>
</html>