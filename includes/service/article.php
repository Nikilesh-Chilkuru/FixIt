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
				mysqli_query($this->con,"insert into ads values('','$ad_type','$posted_userId','$posted_user','$ad_header','$date_posted','$content', '$contact_email', '$contact_phone')"); 
			}
		}

		//delete my posts
		public function deleteMyArticle($request){
			$postId = $request['postId'];
			mysqli_query($this->con,"update article set deleted = 'yes' where id = '$postId'");
		}

		public function submitArticleReview($request){
			$article_id = $request['article_id'];
			$review = $request['review'];
			$review = strip_tags($review);
			$review = mysqli_real_escape_string($this->con,$review);
			$check_body_empty = preg_replace('/\s+/', '', $review);

			if ($check_body_empty != "") {
				//insert the post
				$review_posted_userId = $this->id;
				$review_posted_username = $this->user_obj->getUsername();
				//add a post record to table named posts 
				mysqli_query($this->con,"insert into article_reviews values('','$article_id','$review_posted_userId','$review_posted_username','$review')"); 
			}
		}

		// //load only my posts
		// public function loadAllMyPosts($request, $pageSize){
		// 	//get the current page number
		// 	$pageNum = $request['page']; 
		// 	$start = ($pageNum-1)*$pageSize;

		// 	$data = mysqli_query($this->con,"select * from posts where added_by_id='$this->id' and deleted = 'no' order by date DESC limit $start, $pageSize");
		// 	if (mysqli_num_rows($data) >= 1) {
		// 		$outputStr = "";
		// 		//output the data from result set
		// 		while ($row = mysqli_fetch_array($data)) {
		// 			$outputStr .= "
		// 		        <div class='well' value='".$row['id']."'>
		// 		        	<a href='#' class='close'
		// 		        	 	data-dismiss='alert'
		// 		        	 	aria-label='close'><i class='fa fa-window-close'aria-hidden='true'></i></a>
		// 		            <img src='".$this->user_obj->getProfile_pic()."' class='img-circle' height='55' width='55'>
		// 		            <br>
		//         	        ".$this->user_obj->getUsername()."
		// 		          	<p>".$this->getTime($row['date'])."</p>
		// 		          	<br>
		// 		            <p>".$row['text']."</p>
		// 		            <br>
		// 		            <div>
		// 			            <button class='btn btn-default btn-sm'>
		// 			                <i class='fa fa-thumbs-up' aria-hidden='true'></i>
		// 			                Likes (".$row['likes'].")
		// 			            </button>
		//         	";
		// 		    //--------------add likes-----------------
		// 		    $like_obj = new like($this->con);
		// 		    $likeResultSet= $like_obj->selectLikes($row['id']);
		// 		    while ($like = mysqli_fetch_array($likeResultSet))
		// 		    {
		// 		    	$outputStr .="
		// 		    		<a href='#'>
		// 		            	<img src='".$like['profile_pic']."' class='img-circle' height='25' width='25'>
		// 		            	<input type='hidden' value='".$like['username']."'>
		// 		            </a>
		// 		        ";
		// 		    }
		// 		    //---------------------------------------
		// 		    	$outputStr .="
		// 		    			</div>
		// 		    			<div class='comment'>
		// 		    			<form>
		// 		    				<input type='text' class='verify_input' placeholder='comment here...' required>
 
 	// 								<button type='submit' class='btn btn-danger verify_btn' style='display:inline-block'>Reply</button>
 	// 							</form>";
 	// 				//--------------add comments--------------
 	// 				$comment_obj = new comment($this->con,$this->id);
 	// 				$outputStr .= $comment_obj->selectComments($row['id']);

 	// 				//----------------------------------------
		// 		    $outputStr .="
		// 	    			</div>
		// 		        </div>
		// 			";
		// 		}
		// 		$outputStr .= "
		// 			<input type='hidden' class='nextPage' value='".($pageNum + 1)."'>
		// 			<input type='hidden' class='noMorePosts' value='false'>
		// 			";
		// 		return $outputStr;
		// 	}else{
		// 		//no more posts
		// 		$outputStr = "";
		// 		$outputStr .= "
		// 			<input type='hidden' class='noMorePosts' value='true'>
		// 			<hr>
		// 			<p>No More to Show</p>
		// 		";
		// 		return $outputStr;
		// 	}
			
		// }

		

		

		// //get the relative time
		// public function getTime($postDateTime){
		// 	$currentDateTime = date("Y-m-d H:i:s");
		// 	$startTime = new DateTime($postDateTime);
		// 	$endTime = new DateTime($currentDateTime);
		// 	$interval = $startTime->diff($endTime);
		// 	if ($interval->y >= 1) {
		// 		if ($interval->y > 1) {
		// 			return $interval->y." years ago";
		// 		}else{
		// 			return "1 year ago";
		// 		}
		// 	}else if ($interval->m >= 1) {
		// 		if ($interval->m > 1) {
		// 			return $interval->m." months ago";
		// 		}else{
		// 			return "1 month ago";
		// 		}
		// 	}else if ($interval->d >= 1) {
		// 		if ($interval->d > 1) {
		// 			return $interval->d." days ago";
		// 		}else{
		// 			return "1 day ago";
		// 		}
		// 	}else if ($interval->h >= 1) {
		// 		if ($interval->h > 1) {
		// 			return $interval->h." hours ago";
		// 		}else{
		// 			return "1 hour ago";
		// 		}
		// 	}else if ($interval->i >= 1) {
		// 		if ($interval->i > 1) {
		// 			return $interval->i." minutes ago";
		// 		}else{
		// 			return "1 minute ago";
		// 		}
		// 	}else{
		// 		if ($interval->s > 1) {
		// 			return $interval->s." seconds ago";
		// 		}else{
		// 			return "1 second ago";
		// 		}
		// 	}
		// }
	}

?>