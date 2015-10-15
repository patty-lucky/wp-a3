<?php session_start(); ?>
<!doctype html>

<html>
<head>
	<title>Silverado Cinemas</title>
	
<link href="styles2.css" type="text/css" rel="stylesheet"> 
	
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/Silverado-checkoutJS.js" type="text/javascript"></script>

</head>
<body>
	<!-- Logo is Here -->
	<?php include('head.php'); ?>
	<!-- End of the Logo -->
	
	<!-- Start of Naviagation Bar -->
	<?php include('nav.php'); ?>
	<!-- End of navigation bar-->

	<!--Start of form-->
	
	<form id="contact-form" action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
		<div class="form-div" >
			<h1>Contact Form</h1>
			E-mail:</br>
			<input id="emailCheck" type="email" name="email" placeholder="@mail.com" autofocus required>
			</br></br>
			Subject:</br>
			
			<select name="subject">
			<option>General Enquiry</option>
			<option>Group and Corporation</option>
			<option>Suggestions and Complaints</option>
			</select>
			</br></br>
			
			Message:</br>
			<textarea id="messageContactUs" name="message" rows="10" cols="50" required >
			</textarea>
			<br><br></br>
			<input id="contactSubmit" class="submit-button" type="submit" value="Submit form">
			
	
	
	
		</div>
	</form>
	
	<!--End of form-->
	
<!-- Footer start-->
<?php include('footer.php'); ?>
<!--footer end-->

</body>

</html>