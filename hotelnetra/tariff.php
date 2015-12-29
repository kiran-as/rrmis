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
    <!-- Header | Start -->
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Tariff</span>
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
         
            <!-- List Items (Rooms) | END -->
            <div id="content">
                <h2><strong>Find Your Hotel Netra with our selection of rooms & suites</strong></h2>
                <table>
                    <tr>
                        <th>Room Type</th>
                        <th>Non A/C</th>
                        <th>A/C</th>
                    </tr>
                    <tr>
                        <td><strong>Double Bed</strong></td>
                        <td>1500/-</td>
                        <td>2000/-</td>
                    </tr>
                    <tr>
                        <td><strong>Double Bed Exclusive</strong></td>
                        <td>-</td>
                        <td>2500/-</td>
                    </tr>
                    <tr>
                        <td><strong>Three Bed</strong></td>
                        <td>2000/-</td>
                        <td>2500/-</td>
                        
                    </tr>
                    <tr>
                        <td><strong>Three Bed Exclusive</strong></td>
                        <td>-</td>
                        <td>3000/-</td>
                       
                    </tr>
                    <tr>
                        <td><strong>Four Bed</strong></td>
                        <td>2500/-</td>
                        <td>3000/-</td>
                      
                    </tr>
                    <tr>
                        <td><strong>Four Bed Exclusive</strong></td>
                        <td>-</td>
                        <td>3800/-</td>
                       
                    </tr>
                </table>
                <table style="width:400px;">
                    <tr>
                        <th>Bank Details</th>
                    </tr>
                    <tr>
                        <td> Manoj Narayandas Motwani <br/>
   Bank Name: IDBI<br/>
   A/C no 0682104000040141<br/>
   IFSC Code: IBKL0000682<br/>
   Branch :Shirdi<br/></td>
                    </tr>
                   
                </table>
                <a href="contact.php" class="button"><span data-hover="Book a Room">Book a Room</span></a>
            </div>
          
            <!-- Video | END -->
        </div>
    </main>
    <!-- Content | END -->
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