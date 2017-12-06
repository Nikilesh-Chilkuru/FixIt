<?php 
	require '../../config/config.php';
	require '../service/query.php';

	if (isset($_POST['query_button'])) {
		//store post
		$user_id = $_SESSION['user_id'];
		
		$body = $_POST['query_post'];
		$query = $_POST['query'];
		$contact_email = $_POST['contact_email'];

		$post_obj = new query($con, $user_id);
		$post_obj->submitQuery($body, $query, $contact_email);

		$_SESSION['query'] = "";
		$_SESSION['query_post'] = "";
		$_SESSION['contact_email'] = "";

		header("Location: ../../contact.php");
	}

 ?>