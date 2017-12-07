<?php 
	require '../../config/config.php';
	require '../service/article.php';
	
		
	$article_id = strip_tags($_REQUEST['article_id']); 
	$post_type = strip_tags($_REQUEST['post_type']); 

    $reviews_fetch_query = mysqli_query($con, "SELECT * FROM article_reviews WHERE article_id='$article_id' AND post_type = '$post_type'");
	
	$output = array();

	while($review = mysqli_fetch_array($reviews_fetch_query)){
		array_push($output, ($review));
	}

	echo json_encode($output);
?>