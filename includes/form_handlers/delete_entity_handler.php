<?php
	require '../../config/config.php';


	$id = strip_tags($_REQUEST['id']);
	$post_type = strip_tags($_REQUEST['post_type']);


    if($post_type == "article"){
      mysqli_query($con, " DELETE FROM article WHERE article_id = '$id' ");
    }
    else if($post_type == "advertisement"){
      mysqli_query($con, " DELETE FROM ads WHERE ad_id = '$id' ");
    }
    else if($post_type == "users"){
      mysqli_query($con, " DELETE FROM user WHERE user_id = '$id' ");
    }
    else if($post_type == "query"){
      mysqli_query($con, " DELETE FROM query WHERE query_id = '$id' ");
    }


	echo "success";
?>
