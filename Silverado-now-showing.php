<?php session_start(); 




?>
<!DOCTYPE html>

<html>
<head>
	<title>Silverado Cinemas</title>
	
	<link href="styles2.css" type="text/css" rel="stylesheet"> 
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
	<script src="js/Silverado-checkoutJS.js" type="text/javascript"></script>

</head>
<body>
	<!-- Logo is Here -->
	<?php include('head.php'); ?>
	<!-- End of the Logo -->
	
	<!-- Start of Naviagation Bar -->
	<?php include('nav.php'); ?>
	<!-- End of navigation bar-->
	
	
<!-- Start The Body Here -->	
<div class="now-showing">
	<!-- 1st movie-->
	<div class="each-movie">
		<div class="container1">
			<div class="image">
				<img id="ACPoster" src="images/edge.jpg" alt="Edge of Tomorrow" style="height:100%; width:100%;">
			</div>
		</div>
		<div class="container2">
			<div id="description">
				<h3 id="ACTitle">EDGE OF TOMORROW</h3>
				<img id="ACRating">
				<h6>Strong Voilence</h6>
				<p id="ACDescription">
			<!--	A military officer is brought into an alien war against an 
				extraterrestrial enemy who can reset the day and know the future.
				When this officer is enabled with the same power, 
				he teams up with a Special Forces warrior to try and 
				end the war.  -->
				</p>
				<p class="hidden">
				Director: Doug Liman
				</br>
				Writers: Christopher McQuarrie
				</br>
				Stars: Tom Cruise, Emily Blunt, Bill Paxton.
				</p></br>
					<iframe  id="ACVideo"  class="hidden" src="" frameborder="0" allowfullscreen></iframe>
			
				
				<ul class="expandButton extras">
					<li><button id="viewMore1"  type="button" style="background-color: #47ABED; color: white; border: 1px #47ABED">View More</button></li>
				<ul>
			</div>
		</div>
		<div class="container3">
			
				<ul class="extras">
					<li>SCREENING Wed-Fri: 9pm, Sat-Sun: 9pm</li>
					<a id="ACButton" href="Silverado-checkout.php?movie=AC<?php echo($movie); ?>" alt="Checkout" style="text-decoration:none; color:white;"><li>BUY E-TIX</li></a>
				</ul>
			
		</div>
		
		
	</div>
	<!--End of 1st movie-->
	<!-- 2nd movie start-->
	<div class="each-movie">
		<div class="container1">
			<div class="image">
				<img id="CHPoster" src="images/despicable.jpg" alt="Despicable Me 2" style="height:100%; width:100%;">
			</div>
		</div>
		<div class="container2">
			<div id="description">
				<h3 id="CHTitle">DESPICABLE ME 2</h3>
				<img id="CHRating">
				<h6>Animation, Comedy</h6>
				<p id="CHDescription">
				When Gru, the world's most super-bad turned super-dad has been recruited by a team
				of officials to stop lethal muscle and a host of Gru's own, He has to fight back 
				with new gadgetry, cars, and more minion madness.				
				</p>
				
				<p class="hidden1">
				</br>
				Directors: Pierre Coffin, Chris Renaud
				</br>
				Writers: Cinco Paul, Ken Daurio
				</br>
				Stars: Steve Carell, Kristen Wiig, Benjamin Bratt
				</p></br>
				<iframe  id="CHVideo"  class="hidden1" src="" frameborder="0" allowfullscreen></iframe>
			
				
				<ul class="expandButton1 extras">
					<li><button id="viewMore2" type="button" style="background-color: #47ABED; color: white; border: 1px #47ABED">View More</button></li>
				<ul></br>
			</div>
		</div>
		<div class="container3">
			
				<ul class="extras">
					<li>SCREENING Mon-Tue: 1pm Wed-Fri: 6pm Sat-Sun: 12pm</li>
					<a href="Silverado-checkout.php?movie=CH<?php echo($movie); ?>" alt="Checkout" style="text-decoration:none; color:white;"><li>BUY E-TIX</li></a>
				</ul>
			
		</div>
		
		
	</div>
	<!--end of 2st movie-->
	<!-- 3rd movie start-->
	<div class="each-movie">
		<div class="container1">
			<div class="image">
				<img id="AFPoster" src="images/django.jpg" alt="Django Unchained" style="height:100%; width:100%;">
			</div>
		</div>
		<div class="container2">
			<div id="description">
				<h3 id="AFTitle">DJANGO UNCHAINED</h3>
				<img id="AFRating" src="" alt="Rating">
				<h6>Art, Adventure</h6>
				<p id="AFDescription">
				Two years before the Civil War, Django 
				a slave, finds himself accompanying an unorthodox
				German bounty hunter King Schultz
				on a mission to capture the vicious Brittle brothers. 
				Their travels take them to the infamous plantation of shady Calvin Candie
				where Django's long-lost wife is still a slave.
				</p>
				
				<p class="hidden2">
				Director: Quentin Tarantino
				</br>
				Writer: Quentin Tarantino
				</br>
				Stars: Jamie Foxx, Christoph Waltz, Leonardo DiCaprio
				</p></br>
				
		   		<iframe  id="AFVideo"  class="hidden2" src="" frameborder="0" autoplay="false" allowfullscreen autoplay:false></iframe>
			
				
				<ul class ="expandButton2 extras">
					<li><button id="viewMore3" type="button" style="background-color: #47ABED; color: white; border: 1px #47ABED" >View More</button></li>
				<ul>
				
				</br>
			</div>
		</div>
		<div class="container3">
			
				<ul class="extras">
					<li>SCREENING Mon-Tue: 6pm Sat-Sun: 3pm</li>
					<a href="Silverado-checkout.php?movie=AF<?php echo($movie); ?>" alt="Checkout" style="text-decoration:none; color:white;"><li>BUY E-TIX</li></a>
				</ul>
			
		</div>
		
		
	</div>
	<!-- end of 3rd movie-->
	<!-- 4th movie start-->
	
	<div class="each-movie">
		<div class="container1">
			<div class="image">
				<img id="RCPoster" src="images/time.jpg" alt="About Time" style="height:100%; width:100%;">
			</div>
		</div>
		<div class="container2">
			<div id="description">
				<h3 id="RCTitle">ABOUT TIME</h3>
				<img id="RCRating">
				<h6>Romance, Drama</h6>
				<p id="RCDescription">
				At the age of 21, Tim discovers he can travel in time and change what happens
				and has happened in his own life. His decision to make his world a better place
				by getting a girlfriend turns out not to be as easy as you might think.
				
				<p class="hidden3">
				Director: Richard Curtis
				</br>
				Writer: Richard Curtis
				</br>
				Stars: Domhnall Gleeson, Rachel McAdams, Bill Nighy
				</p></br>
				<iframe  id="RCVideo"  class="hidden3" src="" frameborder="0" allowfullscreen autoplay="false"></iframe>
			
				
				<ul class="expandButton3 extras">
					<li><button id="ViewMore4" type="button" style="background-color: #47ABED; color: white; border: 1px #47ABED">View More</button></li>
				<ul>
				
				</p></br>
			</div>
		</div>
		<div class="container3">
				<ul class="extras">
					<li>SCREENING Mon-Tue: 9pm Wed-Fri: 1pm, Sat-Sun: 6pm</li>
					<a href="Silverado-checkout.php?movie=RC<?php echo($movie); ?>" alt="Checkout" style="text-decoration:none; color:white;"><li>BUY E-TIX</li></a>
				</ul>
			
		</div>
	</div>	
</div>
	
	<!--End of form-->
	
<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>