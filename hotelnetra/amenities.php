<!DOCTYPE HTML>
<!-- Base Hotel: HTML Template by Klaye Morrison (http://klayemorrison.com) -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Base Hotel - Standard Room</title>
<link rel="stylesheet" href="system/css/global.css">
<link class="colour" rel="stylesheet" href="system/css/colour-blue.css">
<link class="pattern" rel="stylesheet" href="system/css/pattern-china.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<style>
.row{
margin-left: -10px;
margin-right: -10px;
overflow: hidden;
}
.col-sm-2{
width: 16.66666667%;
padding-left: 10px;
padding-right: 10px;
float: left;
}
</style>
</head>
<body class="fullwidth">
<!-- Navigation | START -->
<?php include('header.php');?>
<!-- Navigation | END -->
<div id="container">
  <header>
      <div id="header">
          <div class="h1">
                <h1><span>Amenities</span>
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
          <section class="row">
              <div class="col-sm-2">
                  <img src='img/wifi.png'>
                  <h3>Free Wifi</h3>
                   <img src='img/tv.png'>
                  <h3>LED TV</h3>
                  <img src='img/ac.png'>
                <h3>A/C</h3>
                </div>
             <div class="col-sm-2">
                  <img src='img/parking.png'>
                  <h3>Parking Facilities</h3>
                   <img src='img/receptionist.png'>
                  <h3>Front Desk</h3>
                  <img src='img/iron.png'>
                <h3>Dry Cleaning</h3>
                </div>
                 <div class="col-sm-2">
                  <img src='img/elevator.png'>
                  <h3>Lift / Elevator</h3>
                   <img src='img/room_services.png'>
                  <h3>Room Service</h3>
                  <img src='img/safe_box.png'>
                <h3>Locker Facility</h3>
                </div>
                 <div class="col-sm-2">
                  <img src='img/hanger.png'>
                  <h3>Laundry Service </h3>
                   <img src='img/plug.png'>
                  <h3>Power Backup</h3>
                  <img src='img/medical.png'>
                  <h3>Doctor on Call</h3>
                </div>
                 <div class="col-sm-2">
                 
                   <img src='img/parking2.png'>
                  <h3>Outdoor Parking </h3>
         
                </div>
            </section>
        </div>
        
    </main>
  
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