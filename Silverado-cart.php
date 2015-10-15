<?php 
    session_start();
    
    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
    
    $ID = generateRandomString();
    $getID = $_GET['id'];

    /* Get The Movie Content */
	$movieName = htmlspecialchars($_POST["movie"]);
    $movieDay = htmlspecialchars($_POST["day"]);
    $movieTime = htmlspecialchars($_POST["time"]);
    
    /* Convert Everything into Int */
    
    
    $SATotal = intval($_POST["SA"]);
    $SPTotal = intval($_POST["SP"]);
    $SCTotal = intval($_POST["SC"]);
    $FATotal = intval($_POST["FA"]);
    $FCTotal = intval($_POST["FC"]);
    $B1Total = intval($_POST["B1"]);
    $B2Total = intval($_POST["B2"]);
    $B3Total = intval($_POST["B3"]);
    $TotalPrice = doubleval($_POST["price"]);
    
    if (isset($_SESSION['cart'][$getID]))
    {
    	$ID = $getID;
    }
    
	/* Variables */
	$_SESSION['cart'][$ID]['ID'] = $ID;
	$_SESSION['cart'][$ID]['movieName'] = $movieName;
	$_SESSION['cart'][$ID]['movieDay'] = $movieDay;
	$_SESSION['cart'][$ID]['movieTime'] = $movieTime;
	$_SESSION['cart'][$ID]['SA'] = $SATotal;
	$_SESSION['cart'][$ID]['SP'] = $SPTotal;
	$_SESSION['cart'][$ID]['SC'] = $SCTotal;
	$_SESSION['cart'][$ID]['FA'] = $FATotal;
	$_SESSION['cart'][$ID]['FC'] = $FCTotal;
	$_SESSION['cart'][$ID]['B1'] = $B1Total;
	$_SESSION['cart'][$ID]['B2'] = $B2Total;
	$_SESSION['cart'][$ID]['B3'] = $B3Total;
    $_SESSION['cart'][$ID]['Total'] = $TotalPrice;
    
    
    $CheckoutPrice;

	
	$imageSource  ;
	/*
	if(movieName == "CH")
		{
			$imageSource = 
		}elseif (movieName == "AF")
		{
			
		}
		elseif (movieName == "RC")
		{
			
		}
		else
		{
			
		}
		*/
?>

<!DOCTYPE html>

<html>
<head>
	<title>Silverado Cinemas</title>
	
	<link href="styles2.css" type="text/css" rel="stylesheet"> 
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	
	<script src="js/Silverado-checkoutJS.js" type="text/javascript"></script>


</head>

<body>
	<!-- Logo is Here -->
	<?php include('head.php'); ?>
	<!-- End of the Logo -->
	
	<!-- Start of Naviagation Bar -->
	<?php include('nav.php'); ?>
	<!-- End of navigation bar-->




	<!-- start cart-->
	
	
	
<!--
	<form id="movies" action="https://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post">
-->
	<form id="carts" action="" method="POST">
	<h1>Cart Section</h1>
	
	<!-- Display the item -->
	<div>

	<?php 
	foreach($_SESSION['cart'] as $key=>$value)
	{
		$name = "";
		$poster ="";
		switch($value['movieName'])
		{
			case "CH":
				$name = "Inside Out";
				$poster = "https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/CH.jpg";
				break;
			case "AC":
				$name = "Mission Impossible: Rogue Nation";
				$poster = "https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/AC.jpg";
				break;
			case "RC":
				$name = "Train Wreck";
				$poster = "https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/RC.jpg";
				break;
			case "AF":
				$name = "Girlhood";
				$poster = "https://titan.csit.rmit.edu.au/~e54061/wp/movie-service/AF.jpg";
				break;
			
		}
	if(isset($value['movieName'])&& !empty($value['movieName']))
	{
		
		
		echo "<div>" ;
		echo "<h2>".$name."</h2>";
		echo "<img src='".$poster."'/>";
	/*
	//	echo $value['ID'];
	*/
	// SA SP SC FA FC B1 B2 B3
		echo "<br />";
		// Need to show the seat ticket && Cost && Qty && Seats && Subtotal
		// And provide delete from Cart && Edit Seats
		echo $value['movieName'];
		echo $value['movieDay'];
		echo $value['movieTime'];
		// Adult Seat , Concession , Child , First Class Adult , First Class Child , Beanbag1 , Beanbag 2 , Beanbag 3 , Total
		
		if(!empty($value['SA']))
		{
		 echo "<p>Adult Seat Tickets : ".$value['SA']."</p>";
		 echo "<br/>";
		}
		if(!empty($value['SP']))
		{
		 echo "<p>Concession Seat Tickets : ".$value['SP']."</p>";
		 echo "<br/>";
		}
		if(!empty($value['SC']))
		{
		 echo "<p>Child Seat Tickets : ".$value['SC']."</p>";
		 echo "<br/>";
		}
		if(!empty($value['FA']))
		{
		 echo "<p>First Class Adult Seat Tickets : ".$value['FA']."</p>";
		 echo "<br/>";
		}
		if(!empty($value['FC']))
		{
		 echo "<p>First Class Child Seat Tickets : ".$value['FC']."</p>";
		 echo "<br/>";
		}
		if(!empty($value['B1']))
		{
		 echo "<p>Beanbag 1 Seat Tickets : ".$value['B1']."</p>";
		 echo "<br/>";
		}if(!empty($value['B2']))
		{
		 echo "<p>Beanbag 2 Seat Tickets : ".$value['B2']."</p>";
		 echo "<br/>";
		}if(!empty($value['B3']))
		{
		 echo "<p>Beanbag 3 Seat Tickets : ".$value['B3']."</p>";
		 echo "<br/>";
		}
		echo "<p>Cost = ".$value['Total']."$</p>";
		echo "<a href='Silverado-checkout.php?id=".$value['ID']."'>Edit The Seat</a>";
		
	//	echo "<button id='".$value['ID']."' class='cartButton' type='button'>Edit The Seat</button>";
				  
    	$CheckoutPrice += $value['Total'];
    
	
		echo "</div>";
	
	}	
		
	}
	
	?>
	
	
	</div>
	<p> 
	<?php
	    // SA SP SC FA FC B1 B2 B3
	
    

	echo($movieName);
	echo($movieDay);
	echo($movieTime);
	echo($SATotal);
	echo($SPTotal);
	echo($SCTotal);
	echo($FATotal);
	echo($FCTotal);
	echo($B1Total);
	echo($B2Total);
	echo($B3Total);
	
	?>
	
	
	</p>	
	
	<h1>Checkout Section</h1>
	
	<table class="cartTable">
		<h3>Total Price = <?php echo $CheckoutPrice ;  ?>$</h3>
	<form id="clear" action="Silverado-cart.1.php" method="POST">
	<button id="empty" type="buttonClear" value="empty">Checkout Everything !</button>
	</form>



	
	<!-- Vocher Code -->
	<!--  End of Vocher Code -->	
	

	
		<input id="sKill" type="submit" value="Checkout"/>
	
		
		
		
<?php		    
    if(isset($_POST['empty']))
    {
    	unset($_SESSION['cart']);
    	unset($_POST['clear']);
    	echo "<h1>Yes</h1>";
    }
    else
    {
    	echo "<h1>No</h1>";
    }
?>
		</table>
</form>
	


	
<!-- end cart-->	


<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>