<?php 
	//coding here
	require '../../config/config.php';
	require '../service/article.php';


	
	
		$getArticles_query = mysqli_query($con, "SELECT * FROM  article");
		//$articles_data = mysqli_fetch_array($getArticles_query);

		//$result  = mysqli_query($con , "SELECT id,level FROM questions WHERE company_name = 'amazon' ");
	    $output = array();

	while($article = mysqli_fetch_array($getArticles_query)){
		//$data["article_id"] = $article['article_id'];
		//$data["article"] = $article;
		array_push($output, ($article));
	}

	echo json_encode($output);
		// //$article_obj = new Article($con, $id);
		// //echo $message_obj->getMostRecentUser();
		// //$ret_data = $message_obj->getChats();
		// echo $articles_data;
		// //echo "1234";
		
?>