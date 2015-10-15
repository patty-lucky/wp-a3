<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
<link type="text/css" href="styles2.css" rel="stylesheet">
	
	<title>Silvardo Cinemas</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script src="js/Silverado-checkoutJS.js" type="text/javascript"></script>
	
</head>


<body>


	<!-- Logo is Here -->
	<?php include('head.php'); ?>
	<!-- End of the Logo -->
	
	<!-- Start of Naviagation Bar -->
	<?php include('nav.php'); ?>
	<!-- End of navigation bar-->



	<!--Start of image slider-->
	
	<div class="cycle-slideshow">
			
			<span class="cycle-pager"></span>

		<img class="poster" src="images/django-unchained.jpg" alt="Django Unchained">
		<img class="poster" src="images/edge-of-tomorrow.jpg" alt="Edge of Tomorrow">
		<img class="poster" src="images/about-time.jpg" alt="About Time">
		<img class="poster" src="images/despicable-me-2.jpg" alt="Despicable Me 2">
	<!--END of image slider-->
	
	</div>
	
	<div class="link-to-now-showing">
		<a class="now-showing-link" href="Silverado-now-showing.php">
				<p class="link">NOW SHOWING</p>
				
		</a>
	</div>
	
	<div class="dolby">
		
		<div class="dolby-description">
			
			<h1 style="font-size:60px;">Introducing Dolby Sound</h1>
		 <h2 style="font-size:30px;">All new Cinemas with X-treme Screen</h2>
	  <h3 style="font-size:20px;">First class and Luxury seating, 3D Projections</h3>
	  <h3 style="font-size:20px;">Opening Soon</h3>
			
		</div>	
		
		<img class="dolby-image" src="images/dolby.jpg" alt="Dolby Sound">
	</div>
	
<!-- to go to website or a different page, <a> tag is anchor,
 image with source(src) attribute -->
<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->
 
</body>

</html>