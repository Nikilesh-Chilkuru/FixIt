<?php 
	//coding here
	if (isset($_SESSION['user_id'])) {
		$user_id = $_SESSION['user_id'];
		// $check_database_query = mysqli_query($con, "SELECT user_id FROM user_friend WHERE user_id='$id'");
		// $friendNum = mysqli_num_rows($check_database_query);
		
		// $check_database_query = mysqli_query($con, "SELECT id FROM posts WHERE added_by_id='$id' and deleted='no'");
		// $postNum = mysqli_num_rows($check_database_query);

		$check_database_query = mysqli_query($con, "SELECT * FROM user WHERE user_id='$user_id'");
		$user = mysqli_fetch_array($check_database_query);
		
		// //get the friends list of the user 
		// $user_friends = mysqli_query($con, "SELECT friend_id FROM user_friend WHERE user_id='$id'");

		
		// $user_friends_details_query = mysqli_query($con, "SELECT * FROM users WHERE id IN (SELECT friend_id FROM user_friend WHERE user_id='$id' ) ");
		// $user_friends_details = mysqli_fetch_array($user_friends_details_query);


	 } 
	 //else {
	// 	header("Location: register.php");
	// }
?>