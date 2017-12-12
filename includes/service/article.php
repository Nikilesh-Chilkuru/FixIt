<?php
	require 'user.php';
	/**
	*
	*/
	class article
	{
		private $con;
		private $id;
		private $user_obj;

		function __construct($con,$id){
			$this->con = $con;
			$this->id = $id;
			$this->user_obj = new user($con, $id);
		}

		//submit my posts
		public function submitArticle($content, $service_type, $service_title){
			$content = strip_tags($content);
			$content = mysqli_real_escape_string($this->con,$content);
			$check_body_empty = preg_replace('/\s+/', '', $content);

			if ($check_body_empty != "") {
				//insert the post
				$date_posted = date("Y-m-d H:i:s");
				$posted_userId = $this->id;
				$posted_user = $this->user_obj->getUsername();
				//add a post record to table named posts
				mysqli_query($this->con,"insert into article values('','$service_type','$service_title','$content','$posted_userId','$posted_user','1','$date_posted')");
			}
		}

		//submit my ades
		public function submitAd($content, $ad_type, $ad_header,$contact_email,$contact_phone){
			$content = strip_tags($content);
			$content = mysqli_real_escape_string($this->con,$content);
			$check_body_empty = preg_replace('/\s+/', '', $content);

			if ($check_body_empty != "") {
				//insert the post
				$date_posted = date("Y-m-d H:i:s");
				$posted_userId = $this->id;
				$posted_user = $this->user_obj->getUsername();
				//add a post record to table named posts
				mysqli_query($this->con,"insert into ads values('','$ad_type','$posted_userId','$posted_user','$ad_header','$date_posted','$content', '$contact_email', '$contact_phone','1')"); 
			}
		}

		//delete my posts
		public function deleteMyArticle($request){
			$postId = $request['postId'];
			mysqli_query($this->con,"update article set deleted = 'yes' where id = '$postId'");
		}

		public function submitArticleReview($request){
			$article_id = $request['article_id'];
			$post_type = $request['post_type'];
			$review = $request['review'];
			$review = strip_tags($review);
			$review = mysqli_real_escape_string($this->con,$review);
			$check_body_empty = preg_replace('/\s+/', '', $review);

			if ($check_body_empty != "") {
				//insert the post
				$review_posted_userId = $this->id;
				$review_posted_username = $this->user_obj->getUsername();
				//add a post record to table named posts
				mysqli_query($this->con,"insert into article_reviews values('','$post_type','$article_id','$review_posted_userId','$review_posted_username','$review')");
				//echo ($article_id . " " . $post_type . " ". $review);
			}
		}




	}

?>
