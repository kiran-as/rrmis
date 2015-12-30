<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Airo Hosting - A Professional Hosting Theme</title>
	
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
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/blue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/darkgray.css" />-->
    
<!-- just remove the below comments witch bg patterns you want to use -->   
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
	
    <!-- faqs -->
    <link rel="stylesheet" href="js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- jquery jcarousel -->
    <link rel="stylesheet" type="text/css" href="js/jcarousel/skin.css" />
    
    <!-- fancyBox -->
    <link rel="stylesheet" type="text/css" href="js/portfolio/source/jquery.fancybox.css" media="screen" />
    
</head>

<body>

<?php include('header.php');?>
 
<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">
    
		<h2>Clients</h2>
        
		<div class="one_fourth">
        	<div class="portfolio_image">
            <a class="fancybox" href="new images/client1.jpg" data-fancybox-group="gallery" title="Publishing packages"><img src="new images/client1.jpg" alt="" style="height:120px;";/></a>
            <div class="title">SAI CHHATRA</div>
            </div>
        </div><!-- end section -->
        
        <div class="one_fourth">
        	<div class="portfolio_image">
            <a class="fancybox" href="new images/client2.png" data-fancybox-group="gallery" title="Loptop packages"><img src="new images/client2.png" alt="" style="height:120px;"/></a>
            <div class="title">MATRIX</div>
            </div>
        </div><!-- end section -->
        
        <div class="one_fourth">
        	<div class="portfolio_image">
            <a class="fancybox" href="new images/client3.png" data-fancybox-group="gallery" title="Desktop packages"><img src="new images/client3.png" alt="" style="height:120px;"/></a>
            <div class="title">SAI SANGAM</div>
            </div>
        </div><!-- end section -->
        
        <div class="one_fourth last">
        	<div class="portfolio_image">
            <a class="fancybox" href="new images/client4.jpg" data-fancybox-group="gallery" title="Prity alteration"><img src="new images/client4.jpg" alt="" style="height:120px;"/></a>
            <div class="title">SUN N SAND</div>
            </div> 
        </div><!-- end section -->
        
        
    
	</div>

</div>

<div class="clearfix mar_top4"></div>

<!-- Footer
======================================= -->
<?php include('footer.php');?>
    
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

<!-- fancyBox -->
<script type="text/javascript" src="js/portfolio/lib/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/portfolio/source/jquery.fancybox.js"></script>
<script type="text/javascript" src="js/portfolio/source/helpers/jquery.fancybox-media.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        /* Simple image gallery. Uses default settings */
        $('.fancybox').fancybox();

        /* media effects*/  
        $(document).ready(function() {
            $('.fancybox-media').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',
                helpers : {
                    media : {}
                }
            });
        });

    });
</script>

</body>
</html>
