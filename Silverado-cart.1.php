<?php 
    session_start();

    
   foreach($_SESSION['cart'] as $key=>$value)
	{
		unset($value['ID']);
	
	if(isset($value['movieName'])&& !empty($value['movieName']))
	{
		
		
		unset($value['ID']);
	//	echo $value['ID'];
		unset($value);	
		

		header("location:Silverado-cart.php");
	}	
		
	}
    

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

	</div>
</form>
	


	
<!-- end cart-->	


<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>