<?php 
	require '../../config/config.php';
	require '../service/article.php';

	if (isset($_POST['article_button'])) {
		//store post
		$user_id = $_SESSION['user_id'];
		$username = $_SESSION['username'];

		$body = $_POST['article_post'];
		$service_type = $_POST['service_type'];
		$service_title = $_POST['service_title'];

		$post_obj = new article($con, $user_id);
		$post_obj->submitArticle($body, $service_type, $service_title);

		$_SESSION['service_type'] = "";
		$_SESSION['service_title'] = "";
		$_SESSION['content'] = "";

		header("Location: ../../post.php");
	}

	if (isset($_POST['ad_button'])) {
		//store post
		$user_id = $_SESSION['user_id'];
		$username = $_SESSION['username'];

		$body = $_POST['ad_post'];
		$ad_type = $_POST['ad_type'];
		$ad_header = $_POST['ad_header'];
		$contact_email = $_POST['contact_email'];
		$contact_phone = $_POST['contact_phone'];

		$post_obj = new article($con, $user_id);
		$post_obj->submitAd($body, $ad_type, $ad_header,$contact_email,$contact_phone);

		$_SESSION['service_type'] = "";
		$_SESSION['service_title'] = "";
		$_SESSION['content'] = "";

		header("Location: ../../post.php");
	}
		
		
 ?>