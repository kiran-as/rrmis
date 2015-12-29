<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Starhotel</title>
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
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a></li>
              <li class="active">Contact</li>
            </ol>
            <h1>Contact</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="container">
  <div class="row"> 
    <!-- Contact details -->
    <section class="contact-details">
      <div class="col-md-5">
        <h2 class="lined-heading  mt50"><span>Address</span></h2>
        <!-- Panel -->
        <div class="panel panel-default text-center">
          <div class="panel-heading">
            <div class="panel-title"><strong>Hotel Sai Sangam</strong></div>
          </div>
          <div class="panel-body">
            <address>Hotel Sai Sangam,
            Sonawane Vasti,Opp.Water Park,<br>
            Shirdi,Tal - Rahata,<br>
            Dist - Ahmednagar, Maharashtra<br>
            <abbr title="Phone">P:</abbr> <a href="#"> (02423) 258111 / 255967 </a><br>
            <abbr title="Email">M:</abbr> <a href="#">9011113344 / 9011158111</a><br>
            <abbr title="Website">W:</abbr> <a href="#">www.hotelsaisangamshirdi.com</a><br>
            </address>
          </div>
        </div>
        <!-- GMap -->
		<div class="mt30">
          <div id="">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.5859650402454!2d74.477369!3d19.772738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc5b97c5c6ac3b%3A0xf4e8a3531ef704!2sHotel+Sai+Sangam!5e0!3m2!1sen!2sin!4v1440351349684" width="450" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
		</div>
      </div>
    </section>
    
    <!-- Contact form -->
    <section id="contact-form" class="mt50">
      <div class="col-md-7">
        <h2 class="lined-heading"><span>Send a message</span></h2>
        <form class="clearfix mt50" role="form" method="post" action="php/contact.php" name="contactform" id="contactform">
          <!-- Error message -->
		  <div id="message"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="name" accesskey="U"><span class="required">*</span> Your Name</label>
                <input name="name" type="text" id="name" class="form-control" value=""/>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="email" accesskey="E"><span class="required">*</span> E-mail</label>
                <input name="email" type="text" id="email" value="" class="form-control"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="subject" accesskey="S">Subject</label>
            <select name="subject" id="subject" class="form-control">
              <option value="Booking">Booking</option>
              <option value="a Room">Room</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="comments" accesskey="C"><span class="required">*</span> Your message</label>
            <textarea name="comments" rows="9" id="comments" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label><span class="required">*</span> Spam Filter: &nbsp;&nbsp;&nbsp;1 + 1 =</label>		  
            <input name="verify" type="text" id="verify" value="" class="form-control" placeholder="Please enter the outcome" />
          </div>
          <button type="submit" class="btn  btn-lg btn-primary">Send message</button>
        </form>
      </div>
    </section>
  </div>
</div>


<?php include('footer.php');?>
<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>