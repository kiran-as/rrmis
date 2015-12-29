<!DOCTYPE HTML>
<!-- Base Hotel: HTML Template by Klaye Morrison (http://klayemorrison.com) -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Base Hotel - About Hotel</title>
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
	<!-- Header | Start -->
	<header>
    	<div id="header">
        	<div class="h1">
                <h1><span>About Shirdi</span>
                <span class="tagline">Luxurious Facilities & Services</span></h1>
            </div>
        </div>
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
        	<!-- Slideshow | START -->
        	<div id="slideshow">
                <div class="slider">
        <img alt="" data-original="system/WEB/sai.jpg" width="1200" height="300" src="system/WEB/sai.jpg" />
                </div>
                <div class="nav">
                    <a class="prev"><i class="fa fa-chevron-left"></i></a>
                    <a class="next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
            <div id="content">
                <h2><strong>Sai Baba of Shirdi</strong></h2>
                <p> is a town and falls under the jurisdiction of municipal council popularly known as Shirdi Nagar Panchayat, located in Rahata Taluka (Sub-division) in Ahmednagar District in the Indian state of Maharashtra. <br/> <br/>Sai Baba of Shirdi (28 September 1835 – 15 October 1918; resided in Shirdi), also known as Shirdi Sai Baba, was an Indian spiritual master who was and is regarded by his devotees as a saint, fakir, and satguru.He was revered by both his Hindu and Muslim devotees, and during, as well as after, his life it remained uncertain if he was a Hindu or a Muslim himself.Sai Baba is worshiped by people around the world. He had no love for perishable things and his sole concern was self-realization. He taught a moral code of love, forgiveness, helping others, charity, contentment, inner peace, and devotion to God and guru <br/><br/>
                He gave no distinction based on religion or caste. Sai Baba's teaching combined elements of Hinduism and Islam: he gave the Hindu name Dwarakamayi to the mosque he lived in.</p>
                <ul class="tags">
                    <li>Shirdi</li>
                    <li>Sai Baba</li>
                               </ul>
               
            </div>
        </div>
        
    </main>
    <!-- Content | END -->
    <!-- Sitewide Extras | START -->
   
    <!-- Sitewide Extras | END -->
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