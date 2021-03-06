
<?php 
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fixit!</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- css including boostrap -->
    <link href="assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/cover.css">
    <link rel="stylesheet" type="text/css" href="assets/css/register_style.css">

    <!-- JavaScript -->
    <script type="text/javascript" src="assets/js/cover.js"></script>
    <script type="text/javascript" src="assets/js/register.js"></script>

</head>
<body>
	<?php

	if(isset($_POST['register_button'])) {
		echo '
		<script>
		$(document).ready(function() {
			$("#intro_part").hide();
			$(".login_box").show();
			$("#first").hide();
			$("#second").show();
		});
		</script>
		';
	}

	if(isset($_POST['login_button'])) {
		echo '
		<script>
		$(document).ready(function() {
			$("#intro_part").hide();
			$(".login_box").show();
			$("#first").show();
		});
		</script>
		';
	}

	?>


	<div class="site-wrapper">

      	<div class="site-wrapper-inner">

        	<div class="cover-container">

          		<div class="masthead clearfix">
            		<div class="inner">
              			<h3 class="masthead-brand"><strong>FixIt</strong></h3>
              			
            		</div>
          		</div>

          		

          		<div class="login_box">
					<div class="login_header">
	              		<h3>Login or sign up below!</h3>
	            	</div>

					<div id="first">
						<form action="register.php" method="POST">
							<?php if(in_array("Email or Password was incorrect<br>", $error_array)) echo "Email or Password was incorrect<br>"; ?>
							<input type="email" name="log_email" placeholder="Email Address" value="<?php if(isset($_SESSION['log_email']))echo $_SESSION['log_email']; ?>" required><br>
							<input type="password" name="log_password" placeholder="Password"><br>
							<!-- <input type="submit" name="login_button" value="Login"><br> -->
							<button type="submit" class="btn btn btn-danger" name="login_button">Sign in</button><br>
							<a href="#" id="signup" class="signup">Need an account? Register here.</a>

							<br>
						</form>
					</div>
				
					<div id="second">
						<form action="register.php" method="POST">
							<input type="text" name="reg_fname" placeholder="First Name" value="<?php if(isset($_SESSION['reg_fname']))echo $_SESSION['reg_fname']; ?>" required>
							<br>
							<?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>
								
								
							<input type="text" name="reg_lname" placeholder="Last Name" value="<?php if(isset($_SESSION['reg_lname']))echo $_SESSION['reg_lname']; ?>" required>
							<br>
							<?php if(in_array("Your last name must be between 2 and 25 characters<br>", $error_array)) echo "Your last name must be between 2 and 25 characters<br>"; ?>
								
							<span class="add-on"><i class="icon-envelope"></i></span>
							<input type="email" name="reg_email" placeholder="Email" value="<?php if(isset($_SESSION['reg_email']))echo $_SESSION['reg_email']; ?>" required>
							<br>
							<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php if(isset($_SESSION['reg_email2']))echo $_SESSION['reg_email2']; ?>" required>
							<br>
							<?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
								else if(in_array("Invalid email Format<br>", $error_array)) echo "Invalid email Format<br>"; 
								else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>
								

							<input type="password" name="reg_password" placeholder="Password" required>
							<br>
							<input type="password" name="reg_password2" placeholder="Confirm Password" required>
							<br>
							<?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>";	
								else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
								else if(in_array("Your password must be between 5 and 30 characters<br>", $error_array)) echo "Your password must be between 5 and 30 characters<br>"; ?>

							<!-- <input type="submit" name="register_button" value="Register"><br> -->
							<button type="submit" class="btn btn-danger" name="register_button">Sign up</button><br>
							<?php if(in_array("<span style='color:#14C800;'>You're all set! Go ahead and log in!</span><br>", $error_array)) echo "<span style='color:#14C800;'>You're all set! Go ahead and log in!</span><br>"; ?>
							<a href="#" id="signin" class="signin">Already have an account? Log in here.</a>

						</form>
					</div>

				</div>

          		<div class="mastfoot">
            		<div class="inner">
              			<p>Fixit - An aggregator of service providers </p>
              			<p>Created  by : Anvesh, Bhargava, Nikilesh
            		</div>
          		</div>

        	</div>

		</div>

	</div>

</body>
</html>