<?php
	//coding here
	require '../../config/config.php';
	require '../service/article.php';

	
		$getArticles_query = mysqli_query($con, "SELECT * FROM  article");
	    $output = array();

	while($article = mysqli_fetch_array($getArticles_query)){
		array_push($output, ($article));
	}

	echo json_encode($output);

?>
