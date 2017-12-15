<?php

if(isset($_POST['login_button'])) {

	$email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); // sanitize email

	$_SESSION['log_email'] = $email; // store email into session var
	$password = md5($_POST['log_password']); //get encrypted password

	$_SESSION['log_password'] = $password;

	if($email === 'admin@gmail.com'){

		$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'");
		$check_login_query = mysqli_num_rows($check_database_query); // get the resulting subtable

		if($check_login_query == 1) {
			$row = mysqli_fetch_array($check_database_query);
			$username = $row['username'];
			$user_id = $row['user_id'];


			$_SESSION['username'] = $username;
			$_SESSION['user_id'] = $user_id;
		    header("Location: admin.php");
	    }
	}
	else{



		$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE email='$email' AND password='$password'");
		$check_login_query = mysqli_num_rows($check_database_query); // get the resulting subtable

		if($check_login_query == 1) {
			$row = mysqli_fetch_array($check_database_query);
			$username = $row['username'];
			$user_id = $row['user_id'];


				$_SESSION['username'] = $username;
				$_SESSION['user_id'] = $user_id;
				header("Location: home.php");
				exit();
		}

		else {
			// put the error in the varibale $error_array
			array_push($error_array, "Email or Password was incorrect<br>");
		}
	}
}

?>
