<!DOCTYPE html>

<?php>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Cryptex | Register</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link type = "text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
	</head>

	<body>
	
 		require navbar.php
 		
		<!-- <img src="assets/img/Cryptex_logo.png" style="margin-left: 286px; margin-top: -5px; height=50%; widht=50%"> -->
		<div class="span4 offset4 well "  style="margin-top: 25px;">
			<legend>Registration</legend>
			<label>Name</label>
			<input type="text" id="name" class="span4" name="name" placeholder="Name">
			<label>Username</label>
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<label>E-mail</label>
			<input type="email" id="email" class="span4" name="email" placeholder="E-mail">
			<label>Password</label>
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
			<label>Confirmation</label>
			<input type="password" id="cpassword" class="span4" name="cpassword" placeholder="Confirm password">
			
			<button style="margin-top: 10px;" type="submit" name="Register" class="btn btn-info btn-block">Register me</button>
			<hr>
			
			<button style="margin-top: 10px;" type="submit" name="Register" class="btn btn-info btn-block">Login with Facebook</button>
		</div>
	
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	</body>
</html>
<?>
