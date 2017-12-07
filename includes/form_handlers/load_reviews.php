<?php 
	require '../../config/config.php';
	require '../service/article.php';
	
		
	$article_id = strip_tags($_REQUEST['article_id']); 
    $reviews_fetch_query = mysqli_query($con, "SELECT * FROM article_reviews WHERE article_id='$article_id'");
	
	$output = array();

	while($review = mysqli_fetch_array($reviews_fetch_query)){
		array_push($output, ($review));
	}

	echo json_encode($output);
?>