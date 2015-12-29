<?php 
$name_of_your_site = "yourcompanyname.com"; 
$email_adress_reciever = "gsrthemes9@gmail.com";

if(isset($_POST['Send']))
{
	include('send.php');	
}
?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
   	<title>SAINET - Internet Provider</title>
    
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <!-- Favicon --> 
    <link rel="shortcut icon" href="images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One|Archivo+Narrow|Oswald:400,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
    
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    
    <!-- responsive devices styles -->
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    

    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    
    <!-- faqs -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    
</head>

<body>
<div class="site_wrapper">
	
    <?php include('header.php');?>
<div class="page_title">

	<div class="container">
		<div class="leaft_title"><h1>Contact</h1></div>
        <div class="reght_pagenation"><a href="index.html">Home</a> <i>/</i> Contact</div>
	</div>
    
</div><!-- end page title -->
 
<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
        	
    <div class="one_half">
        

    <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
    <br />
    <p>Please be patient while waiting for response. (24/7 Support!)
    <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>

    <br />
    <h3>Contact Form</h3>

    <form action="" method="post">
    
        <fieldset>
        
        <?php if (!isset($errorC) || $errorC == true){ ?>
        
        <label for="name" class="blocklabel">Your Name*</label>
        <p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="yourname" class="input_bg" type="text" id="name" value='<?php if (isset($the_name)) echo $the_name?>'/></p>
        
        
        <label for="email" class="blocklabel">E-Mail*</label>
        <p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($the_email)) echo $the_email ?>' /></p>
        
        
        <label for="website" class="blocklabel">Website</label>
        <p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($the_website))  echo $the_website?>"/></p>
        
        
        <label for="message" class="blocklabel">Your Message*</label>
        <p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($the_message)) echo $the_message ?></textarea></p>
        
        
        <p>
        <input type="hidden" id="myemail" name="myemail" value="<?php echo $email_adress_reciever; ?>" />
        <input type="hidden" id="myblogname" name="myblogname" value="<?php echo $name_of_your_site; ?>" />
        <div class="clearfix"></div>
        <input name="Send" type="submit" value="SUBMIT" class="comment_submit" id="send"/></p>
        <?php } else { ?> 
        
        <div class="success">
            <div class="message-box-wrap">
               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
        </div>
        
        <?php } ?>
        
        </fieldset>
        
        </form> 
    
    </div>
               
    <div class="one_half last">
    
        <div class="address-info">
            <h3>Address Info</h3>
                <ul>
                <li>
                <strong>SAINET SERVICES</strong><br />
                C/o. Sai Seva Services,Shop No.4, Saisham Complex<br />
                Kankuri Road, SHIRDI - 423 109.<br/>
                Telephone: 758-851-4366<br />
                E-mail: <a href="mailto:Info@sainetshirdi.com">Info@sainetshirdi.com</a><br />
                Website: <a href="index.php">www.sainetshirdi.com</a>
                </li>
            </ul>
        </div>

         <h3>Find the Address</h3>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
        
    </div>
            
</div>

</div>

<div class="clearfix mar_top4"></div>

<?php include('footer.php');?>


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
   
   

</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script>

<!-- main menu -->
<script type="text/javascript" src="js/mainmenu/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/mainmenu/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/mainmenu/selectnav.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="js/jcarousel/jquery.jcarousel.min.js"></script>

<script type="text/javascript" src="js/mainmenu/scripts.js"></script>


<!-- scroll up -->
<script type="text/javascript">
    $(document).ready(function(){
 
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 500);
            return false;
        });
 
    });
</script>


<!-- jquery jcarousel -->
<script type="text/javascript">

	jQuery(document).ready(function() {
			jQuery('#mycarousel').jcarousel();
	});
	
	jQuery(document).ready(function() {
			jQuery('#mycarouseltwo').jcarousel();
	});
	
</script>

<script type="text/javascript" src="js/accordion/custom.js"></script>


</body>
</html>
