<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Premium Room of Sai Sangam</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="favicon.ico">
<?php include('header.php');?>

<!-- Parallax Effect -->
<script type="text/javascript">$(document).ready(function(){$('#parallax-pagetitle').parallax("50%", -0.55);});</script>

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          
            <h1>Premium Suit Room</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container mt50">
  <div class="row"> 
    <!-- Slider -->
    <section class="standard-slider room-slider">
      <div class="col-sm-12 col-md-8">
        <div id="owl-standard" class="owl-carousel">
          <div class="item"> <a href="images/rooms/slider/room1_large.png" data-rel="prettyPhoto[gallery1]"><img src="images/rooms/slider/room2_large.png" alt="Image 2" class="img-responsive"></a> </div>
          <div class="item"> <a href="images/rooms/slider/room1_large.png" data-rel="prettyPhoto[gallery1]"><img src="images/rooms/slider/room2_large.png" alt="Image 2" class="img-responsive"></a> </div>
        </div>
      </div>
    </section>
    
    <!-- Reservation form -->
    <section id="reservation-form" class="mt50 clearfix">
      <div class="col-sm-12 col-md-4">
        <form class="reservation-vertical clearfix" role="form" method="post" action="php/reservation.php" name="reservationform" id="reservationform">
          <h2 class="lined-heading"><span>Reservation</span></h2>
          <div class="price">
            <h4>Premium Suit Room</h4>
            </div>
          <div id="message"></div>
          <!-- Error message display -->
          <div class="form-group">
            <label for="email" accesskey="E">E-mail</label>
            <input name="email" type="text" id="email" value="" class="form-control" placeholder="Please enter your E-mail"/>
          </div>
          <div class="form-group">
            <select class="hidden" name="room" id="room">
              <option selected="selected">Double Room</option>
            </select>
          </div>
          <div class="form-group">
            <label for="checkin">Check-in</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkin" type="text" id="checkin" value="" class="form-control" placeholder="Check-in"/>
          </div>
          <div class="form-group">
            <label for="checkout">Check-out</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkout" type="text" id="checkout" value="" class="form-control" placeholder="Check-out"/>
          </div>
          <div class="form-group">
            <div class="guests-select">
              <label>Guests</label>
              <i class="fa fa-user infield"></i>
              <div class="total form-control" id="test">1</div>
              <div class="guests">
                <div class="form-group adults">
                  <label for="adults">Adults</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="adults" id="adults" class="form-control">
                    <option value="1">1 adult</option>
                    <option value="2">2 adults</option>
                    <option value="3">3 adults</option>
                  </select>
                </div>
                <div class="form-group children">
                  <label for="children">Children</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="children" id="children" class="form-control">
                    <option value="0">0 children</option>
                    <option value="1">1 child</option>
                    <option value="2">2 children</option>
                    <option value="3">3 children</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default button-save btn-block">Save</button>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Book Now</button>
        </form>
      </div>
    </section>
    
    <!-- Room Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 mt50">
            <h2 class="lined-heading"><span>Room Details</span></h2>
                        <p class="mt50">Spacious, bright and outward facing rooms measuring 175sqft and totally refurbished, With a living room & a balcony .The room comes with 1 double bed & 1 single bed with kur-lon mattress (manufactured and designed exclusively  for Hotel Sai Sangam), a modern, fully equipped bathroom finished in top quality bronze & White coloured ceramics and an independent entrance.</p>

            <h3 class="mt50">Equipment</h3>

            <table class="table table-striped mt30">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Functional Furniture</td>
                  <td><i class="fa fa-check-circle"></i> Double bed </td>
                  <td><i class="fa fa-check-circle"></i> 32 inch plasma-screen</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Thermostat</td>
                  <td><i class="fa fa-check-circle"></i> Coffee table</td>
                  <td><i class="fa fa-check-circle"></i> Double wardrobe </td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Fully equipped bathroom</td>
                  <td><i class="fa fa-check-circle"></i> High speed Wi-Fi</td>
                  <td><i class="fa fa-check-circle"></i> Bathroom amenities</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Fireproof door</td>
                  <td><i class="fa fa-check-circle"></i> Minibar</td>
                  <td><i class="fa fa-check-circle"></i> Air Conditionin</td>
                </tr>
              </tbody>
            </table>
          </div>
          
        </div>
      </div>
    </section>
  </div>
</div>
<?php include('rooms.php');?>

<?php include('footer.php');?>

<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>