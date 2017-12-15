<?php
	//coding here
	if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
		$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE user_id='$user_id'");
		$user = mysqli_fetch_array($check_database_query);

	 }
	 
?>
