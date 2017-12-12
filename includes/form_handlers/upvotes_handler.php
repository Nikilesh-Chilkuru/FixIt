<?php
	require '../../config/config.php';
	require '../service/article.php';


	$article_id = strip_tags($_REQUEST['article_id']);
	$post_type = strip_tags($_REQUEST['post_type']);

    if($post_type == "article"){
      $get_article = mysqli_query($con, "SELECT * FROM article WHERE article_id='$article_id' ");
      $article_array = mysqli_fetch_array($get_article);
      $posted_userId = $article_array['posted_userId'];
      mysqli_query($con, "UPDATE article SET reputation = reputation+1 WHERE article_id='$article_id' ");
      mysqli_query($con, "UPDATE user SET reputation = reputation+1 WHERE user_id='$posted_userId' ");

    }
    else if($post_type == "advertisement"){
      $get_ad = mysqli_query($con, "SELECT * FROM ads WHERE ad_id='$ad_id' ");
      $ad_array = mysqli_fetch_array($get_ad);
      $posted_userId = $ad_array['posted_userId'];
      mysqli_query($con, "UPDATE ads SET reputation = reputation+1 WHERE ad_id='$article_id' ");
      mysqli_query($con, "UPDATE user SET reputation = reputation+1 WHERE user_id='$posted_userId' ");
    }


	echo "success";
?>
