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
    
    /* Varaibles */
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
	
	$imageSource  ;
    
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

	<!-- start checkout-->
	
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
		
		echo "<h2>".$name."</h2>";
		echo "<img src='".$poster."'/>";
		echo $value['ID'];
		
		echo $value['movieName'];
		echo $value['movieDay'];
		echo $value['movieTime'];
		
		echo "<br />";
		
	}
	
	?>
	

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
<form id="cart-form" action="https://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post">
	
	<div class="form-div">
		<div class="container1">
			<div class="image">
				<img id="CHPoster" src="images/despicable.jpg" alt="Despicable Me 2" style="height:300px; width:auto;">
			</div>
		</div>
		<div class="container2">
			<div id="description" style="color:black;">
			<h1>Despicable Me</h1>
			<h3>Animation, Comedy</h3>
			<table class="ticketSelected">

				<tr>
				
					<td><strong>Ticket Type</strong></td>
					<td><strong>Quantity</strong></td>
					<td><strong>Subtotal Price</strong></td>
				</tr>
				<td >Adult</td>
				<td>
					<input type="number" id="SA" class="checkoutSelect" name="SA" min="1" max="40">
						
				</td>
				
				<td><input id="SAtotal" class="PricesAll" type="text" value="" readonly> </td>
				
					
				
				
				
				<tr>
				<td >Concession</td>
				<td>
					<input type="number" id="SP" class="checkoutSelect" name="SP" min="1" max="40" readonly>
						
				</td>
				<td><input id="SPtotal" class="PricesAll" type="text" value="" readonly> </td>
				</tr>
			
			
			
				<tr>
					<td >Child</td>
					<td>
						<input type="number" id="SC" class="checkoutSelect" name="SC" min="1" max="40" readonly>
					
					</td>
					<td>
						<input id="SCtotal" class="PricesAll" type="text" value="" readonly>
					</td>
				</tr>	
			
			
			
				<tr>
					<td >First Class Adult</td>
					<td>
							<input type="number" id="FA" class="checkoutSelect" name="FA" min="1" max="12" readonly>
					</td>
					<td>
						<input id="FAtotal" class="PricesAll" type="text" value="" readonly>
					</td>
				</tr>	
			
			
			
				<tr>
					<td>First Class Child</td>
					<td>
					
							<input type="number" id="FC" class="checkoutSelect" name="FC" min="1" max="12" readonly>
					
					</td>
					<td>
						<input id="FCtotal" class="PricesAll"  type="text" value="" readonly>
					</td>
				</tr>	
			
			
				<tr>
					<td>Beanbag 1</td>
					<td>
						
						<input type="number" id="B1" class="checkoutSelect" name="B1" min="1" max="13" readonly>
					
					</td>
					<td>
						<input id="B1total" class="PricesAll" type="text" value="" readonly>
					</td>
				</tr>	
			
			
			
				<tr>
					<td>Beanbag 2</td>
					<td>
						
						<input type="number" id="B2" class="checkoutSelect" name="B2" min="1" max="13" readonly>
					
					</td>
					<td>
						<input id="B2total" class="PricesAll" type="text" value="" readonly/>
					</td>
				</tr>	
			
			
			
				<tr>
					<td>Beanbag 3</td>
					<td>
						
						<input type="number" id="B3" class="checkoutSelect" name="B3" min="1" max="13" readonly>
					
					</td>
					<td>
						<input id="B3total" class="PricesAll" type="text" value="" readonly/>
					</td>
				</tr>	
			
			
			
			
				<tr>
					<td>Total : </td>
					<td></td>
					<td>
						<input id="Total" type="text" name="price" value="" readonly/>
					</td>
				</tr>
	
	
	
	</table>
			
				
			</div>
		</div>
		<div class="container3" >
			
				<input id="contactSubmit" class="submit-button" type="submit" value="Checkout" style="position:absolute; right:50px; bottom:20px;">			
		</div>
	</div>
</form>
	


	
<!-- end checkout-->	
<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>