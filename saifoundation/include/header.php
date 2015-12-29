<?php 
$indexclass='';
$managementclass='';
$activitiesclass='';
$donation_appealclass='';
$galleryclass='';
$newsclass='';
$contactclass='';
$about_usclass='';
$missionclass='';
$filename = $_SERVER['PHP_SELF'];
if($filename=='/mission.php')
{
	$missionclass='active';
}
else if($filename=='/index.php')
{
	$indexclass='active';
}
else if($filename=='/management.php')
{
	$managementclass='active';
}
else if($filename=='/activities.php')
{
	$activitiesclass='active';
}
else if($filename=='/donation_appeal.php')
{
	$donation_appealclass='active';
}
else if($filename=='/gallery.php')
{
	$galleryclass='active';
}
else if($filename=='/news.php')
{
	$newsclass='active';
}
else if($filename=='/contact.php')
{
	$contactclass='active';
}
else 
{
	$about_usclass ='active';
}

?>

		<header>

			<!-- ==== TOOLS START ==== -->
			<div class="tools">
				<div class="container">
					<ul class="pull-left">
						<li><a href="tel:9850212233"><i class="fa fa-phone"></i><span>8856-063-333</span></a></li>
						<li><a href="tel:9850212233"><i class="fa fa-phone"></i><span>9850-212-233</span></a></li>
					</ul>
					<nav class="pull-right">
						<ul>
							<li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- ==== TOOLS END ==== -->

			<!-- ==== NAVBAR START ==== -->
			<div class="navbar navbar-default navbar-static-top" role="navigation" style="height:100px;">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="navbar-brand"><img src="images/logo.png" alt="Smartway - HTML Template" class="img-responsive logo" /></a>
					</div>
					<nav class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="<?php echo $about_usclass;?>"><a href="about_us.php">About Us</a></li>
							<li class="<?php echo $managementclass;?>"><a href="management.php">Management</a></li>
							<li class="<?php echo $missionclass;?>"><a href='mission.php'>Mission/Vission</a>
							<li class="<?php echo $activitiesclass;?>"><a href="activities.php">Activities</a></li>
							
							<li class="<?php echo $donation_appealclass;?>"><a href="donation_appeal.php">Donation Appeal</a></li>
							
							<li class="<?php echo $galleryclass;?>"><a href="gallery.php">Gallery</a></li>
							<li class="<?php echo $newsclass;?>"><a href="news.php">News</a></li>
							
							<li class="<?php echo $contactclass;?>"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- ==== NAVBAR END ==== -->

		</header>

	