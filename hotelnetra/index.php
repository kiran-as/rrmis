<!DOCTYPE HTML>
<!-- Base Hotel: HTML Template by Klaye Morrison (http://klayemorrison.com) -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Base Hotel - Experience Luxury</title>
<link rel="stylesheet" href="system/css/global.css">
<link class="colour" rel="stylesheet" href="system/css/colour-blue.css">
<link class="pattern" rel="stylesheet" href="system/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body class="fullwidth">
<!-- Navigation | START -->
<?php include('header.php');?>
<!-- Navigation | END -->
<div id="container">
	<!-- Header | START -->
	<header>
    	<!-- Featured Slider | START -->
        <div id="featured">
        	<div class="slider">
            	<div class="item">
                    <div class="details">
                    </div>
                    <img alt="" src="system/WEB/1800x800/1.jpg" width="1800" height="700" />
                </div>
                <div class="item">
                    <div class="details">
                    </div>
                    <img alt="" src="system/WEB/1800x800/2.jpg" width="1800" height="700" />
                </div>
            </div>
            <div class="centre">
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <!-- Featured Slider | END -->
        <!-- Check Rates Banner | START -->
        <div id="check">
        	<div class="centre">
            	<form action="contact.php" method="post">
                	<div class="field calendar"><input name="arrival" type="text" placeholder="Arrival" id="arrival" readonly /><i class="fa fa-calendar-o"></i></div>
                    <div class="field calendar"><input name="departure" type="text" placeholder="Departure" id="departure" readonly /><i class="fa fa-calendar-o"></i></div>
                    <div class="field select">
                        <select name="rooms">
                            <option value="1 Room">1 Room</option>
                            <option value="2 Rooms">2 Rooms</option>
                            <option value="3 Rooms">3 Rooms</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="field select">
                        <select name="adults">
                            <option value="1 Adult">1 Adult</option>
                            <option value="2 Adults">2 Adults</option>
                            <option value="3 Adults">3 Adults</option>
                            <option value="4 Adults">4 Adults</option>
                            <option value="5 Adults">5 Adults</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <div class="field select">
                        <select name="children">
                        	<option value="0 Children">0 Children</option>
                            <option value="1 Child">1 Child</option>
                            <option value="2 Children">2 Children</option>
                            <option value="3 Children">3 Children</option>
                            <option value="4 Children">4 Children</option>
                        </select>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                    <button><span data-hover="Book a Room">Book a Room</span></button>
                </form>
            </div>
        </div>
        <!-- Check Rates Banner | END -->
    </header>
    <!-- Header | END -->
    <!-- Content | START -->
    <main>
    	<div class="centre">
            <h1>Experience Luxury in <strong>Hotel Netra</strong></h1>
<p>They say Speech is Silver and Silence is Golden, but if you ask us, the ambience here is pretty good over here. It’s beautiful. Peaceful. Everything I need. <br/>Stop by Hotel Netra Sai to see for yourself. Call us on +91 7768866005 or give us a ring on 02423 256005 for bookings.<br/>
Our hotel is ideally located at about just 1 minute walk from Shri Saibaba Temple. Amongst all that crowd and noise, our hotels location is the most peaceful part in whole of Shirdi. Most convenient and comfortable for arrival and departure as the hotel faces the main highway directly.  Car parking available. All room packages include unlimited free usage of Wifi.</p>            <!-- USP Boxes | START -->
            <section class="usp">
            	<div class="box">
                	<i class="fa fa-trophy"></i>
                	<h3>Rated #1 on TripAdvisor</h3>

                </div>
                <div class="box">
                	<i class="fa fa-cutlery"></i>
                	<h3>Hotel Netrasai  Rasoi Restaurant</h3>
                	
                </div>
                <div class="box">
                	<i class="fa fa-user"></i>
                	<h3>24 Hour Concierge Service</h3>
                	
                </div>
            </section>
            <!-- USP Boxes | END -->
        </div>
    </main>
    <!-- Content | END -->
    <!-- Gallery Slider | START -->
    <div id="galleryslider">
    	<div class="slidecontainer">
            <div class="slider"></div>
            <div class="centre">
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        <a href="gallery.php" class="button"><span data-hover="Browse Our Gallery">Browse Our Gallery</span></a>
    </div>
    <!-- Gallery Slider | END -->
    <!-- Footer | START -->
    <?php include('footer.php');?>
    <!-- Footer | END -->
</div>
<!-- Promo Popup | START -->
<div id="pop">
	<img alt="" src="http://dummyimage.com/400x150" width="400" height="150" />
    <div class="container">
        <p class="title"><strong>Our latest special offers,</strong><br />
        straight to your inbox</p>
        <p>Stay up to date with the latest specials from Base Hotel. Subscribe and save on your next stay.</p>
        <form>
            <input name="email" type="text" placeholder="Your email address" />
            <button><span data-hover="Subscribe">Subscribe</span></button>
        </form>
        <p class="close closepop"><a>Continue browsing site</a></p>
        <i class="fa fa-close closepop"></i>
    </div>
</div>
<!-- Promo Popup | END -->
<script src="system/js/plugins.js"></script>
<script src="system/js/global.js"></script>
</body>
</html>
