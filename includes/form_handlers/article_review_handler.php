<?php 
	require '../../config/config.php';
	require '../service/article.php';
	
	if (isset($_SESSION['user_id'])) {
		//remove html tags
		$review = strip_tags($_REQUEST['review']); 
		//remove spaces at the beginning and the end of the comment
		$review = trim($review); 
		if ($review!='') {
			$article_obj = new article($con,$_SESSION['user_id']);

			$article_obj->submitArticleReview($_REQUEST);
		 	echo "success";
		} 
		else {
			echo "<p>Please enter the content!</p>";
		}


	}
	else{
		header("Location: ../../register.php");
	}
	
?>