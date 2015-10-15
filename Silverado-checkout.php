<?php session_start(); 
//http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php

$movie = $_GET['movie'];
if(isset($movie)&&!empty($movie))
{
	echo("Is set ");
}
else
{
	$movie = "";
}

$hasId = false;
$id = $_GET['id'];
if(isset($id)&& !empty($id))
{
 	$hasId = true;
}
/*
$SATotal = 0;
$SPTotal = 0;
$SCTotal = 0;
$FATotal = 0;
$FCTotal = 0;
$B1Total = 0;
$B2Total = 0;
$B3Total = 0;
*/

if ($hasId)
{
	$movieName = $_SESSION['cart'][$id]['movieName'];
	$movieDay = $_SESSION['cart'][$id]['movieDay'];
	$movieTime = $_SESSION['cart'][$id]['movieTime'] ;
	$SATotal = $_SESSION['cart'][$id]['SA'];
	$SPTotal = $_SESSION['cart'][$id]['SP'];
	$SCTotal = $_SESSION['cart'][$id]['SC'];
	$FATotal = $_SESSION['cart'][$id]['FA'];
	$FCTotal = $_SESSION['cart'][$id]['FC'];
	$B1Total = $_SESSION['cart'][$id]['B1'];
	$B2Total = $_SESSION['cart'][$id]['B2'];
	$B3Total = $_SESSION['cart'][$id]['B3'];
	
}
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
	
	
	
	<form id="movies" action="Silverado-cart.php?id=<?php echo $id ?>" method="post">
	
	<div class="movieCheckout">
	
	<h1>Customer Detials Section</h1>
	
	<table id="cartTable">
		<!-- Need to write the code for checking the Email / Phone
				and Voucher Code -->
	<tr>
		<td>
			Name:
		</td>
		<td>
    		<input type="text" name="fullname" pattern="[A-Za-z ']+" required><br>
		</td>
		<td>
		</td>

	<td>
		Email: 
	</td>
	<td>
		<input type="email" name="userEmail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
	</td>
	
	<td>
		Phone : 
	</td>
	<td>
		<input type="tel" name="userPhone" value="(04)" pattern="[(04)]+ [0-9]{9}" required/>
	</td>
	</tr>
	<tr>
		
			<td>
				Voucher Code :
			</td>
			<td>
				<input id="voucher" type="text" name="Voucher">
			</td>
	</tr>
	</table>
	<h1>Movie Section</h1>
	
	<table class="movieTable">
	<tr>
	
	<td>
	Movie Name <? echo($movie) ?>:
	</td>
	<td>
    <select id="movieSelect" class="checkoutSelect" name="movie" required >
    
		<option value="" selected disabled> Please choose the movie</option>
	    <option value="CH"
	    <?php 
	    if($movie=="CH" || $movieName == "CH") 
	    		echo'selected';
	    		?> >Children Movie</option>
	    <option value="AF"<?php if($movie=="AF" || $movieName=="AF") echo'selected' ; ?> >Art Movie</option>
	    <option value="RC"<?php if($movie=="RC" || $movieName=="RC") echo'selected'; ?> >Romantic Movie</option>
	    <option value="AC"<?php if($movie=="AC" || $movieName=="AC") echo'selected';?> >Action Movie</option>
    </select>
	</td>
	</tr>
    
    
	
	<tr>
	
	<td>
	Session Day   :   
    </td>
	<td>
	<select id="sessionDays"  class="checkoutSelect" name="day" required>
		<option value="" selected disabled>Please choose the day</option>
	    <option <?php if($movieDay == "Monday") echo'selected'; ?> class="mon" value="Monday">Monday</option>
		<option <?php if($movieDay == "Tuesday") echo'selected'; ?> class="tue" value="Tuesday">Tuesday</option>
		<option <?php if($movieDay == "Wednesday") echo'selected'; ?> class="wed" value="Wednesday">Wednesday</option>
		<option <?php if($movieDay == "Thursday") echo'selected'; ?> class="thurs" value="Thursday">Thursday</option>
		<option <?php if($movieDay == "Friday") echo'selected'; ?> class="fri" value="Friday">Friday</option>
		<option <?php if($movieDay == "Saturday") echo'selected'; ?> class="sat" value="Saturday">Saturday</option>
		<option <?php if($movieDay == "Sunday") echo'selected'; ?> class="sun" value="Sunday" >Sunday</option>
    </select>
	</td>
	</tr>
	
	
	
    <tr>
	
	<td>Session Time :</td>
	
	<td>
		
	<select id="sessionTime"  class="checkoutSelect" name="time" required>
	<option value="" selected disabled>Please choose the time</option>
	<option <?php if($movieTime == "12pm") echo'selected'; ?> class="12pm" value="12pm">12 pm</option>
	<option <?php if($movieTime == "1pm") echo'selected'; ?> class="1pm" value="1pm"> 1   pm</option>
	<option <?php if($movieTime == "3pm") echo'selected'; ?> class="3pm" value="3pm"> 3   pm</option>
	<option <?php if($movieTime == "6pm") echo'selected'; ?> class="6pm" value="6pm"> 6   pm</option>
	<option  <?php if($movieTime == "9pm") echo'selected'; ?> class="9pm" value="9pm"> 9   pm</option>
	
	
	</select>
	</td>
	</tr>
	
	
	</table>
	
	
	
	<h1>Tickets and Display Price</h1>
	<table class="ticketSelect">
	<tr>
	
		<td><strong>Ticket Type</strong></td>
		<td><strong>Quantity</strong></td>
		<td><strong>Subtotal Price</strong></td>
	</tr>
	<td >Adult</td>
	<td>
		<input value="<?php if($SATotal>0)  echo  $SATotal; ?>" type="number" id="SA" class="checkoutSelect" name="SA" min="1" max="40">
			
	</td>
	
	<td><input id="SAtotal" class="PricesAll" type="text" value="" readonly> </td>
	
		
	
	
	
	<tr>
	<td >Concession</td>
	<td>
		<input value="<?php if($SPTotal>0) echo $SPTotal; ?>"  type="number" id="SP" class="checkoutSelect" name="SP" min="1" max="40">
			
	</td>
	<td><input id="SPtotal" class="PricesAll" type="text" value="" readonly> </td>
	</tr>
	
	
	
		<tr>
			<td >Child</td>
			<td>
				<input value="<?php if($SCTotal>0) echo $SCTotal; ?>" type="number" id="SC" class="checkoutSelect" name="SC" min="1" max="40">
			
			</td>
			<td>
				<input id="SCtotal" class="PricesAll" type="text" value="" readonly>
			</td>
		</tr>	
	
	
	
		<tr>
			<td >First Class Adult</td>
			<td>
					<input value="<?php if($FATotal>0) echo $FATotal; ?>" type="number" id="FA" class="checkoutSelect" name="FA" min="1" max="12">
			</td>
			<td>
				<input id="FAtotal" class="PricesAll" type="text" value="" readonly>
			</td>
		</tr>	
	
	
	
		<tr>
			<td>First Class Child</td>
			<td>
			
					<input value="<?php if($FCTotal>0) echo $FCTotal; ?>" type="number" id="FC" class="checkoutSelect" name="FC" min="1" max="12">
			
			</td>
			<td>
				<input id="FCtotal" class="PricesAll"  type="text" value="" readonly>
			</td>
		</tr>	
	
	
		<tr>
			<td>Beanbag 1</td>
			<td>
				
				<input value="<?php if($B1Total>0) echo $B1Total; ?>" type="number" id="B1" class="checkoutSelect" name="B1" min="1" max="13">
			
			</td>
			<td>
				<input id="B1total" class="PricesAll" type="text" value="" readonly>
			</td>
		</tr>	
	
	
	
		<tr>
			<td>Beanbag 2</td>
			<td>
				
				<input value="<?php if($B2Total>0)  echo $B2Total; ?>" type="number" id="B2" class="checkoutSelect" name="B2" min="1" max="13">
			
			</td>
			<td>
				<input id="B2total" class="PricesAll" type="text" value="" readonly/>
			</td>
		</tr>	
	
	
	
		<tr>
			<td>Beanbag 3</td>
			<td>
				
				<input value="<?php if($B3Total>0) echo $B3Total; ?>" type="number" id="B3" class="checkoutSelect" name="B3" min="1" max="13">
			
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
	
	<!-- Vocher Code -->
	<!--  End of Vocher Code -->	
	<input id="throw" type="submit" value="Submit"/>
	<div style="clear:both;"></div>

	</div>
</form>
	


	
<!-- end checkout-->	
<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>