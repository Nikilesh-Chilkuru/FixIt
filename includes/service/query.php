<?php 
	require 'user.php';
	/**
	* 
	*/
	class query 
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
		public function submitQuery($content, $query, $contact_email){
			$content = strip_tags($content);
			$content = mysqli_real_escape_string($this->con,$content);
			$check_body_empty = preg_replace('/\s+/', '', $content);

			if ($check_body_empty != "") {
				//insert the post
				$date_posted = date("Y-m-d H:i:s");
				$posted_userId = $this->id;
				$posted_user = $this->user_obj->getUsername();
				//add a post record to table named posts 
				mysqli_query($this->con,"insert into query values('','$posted_userId','$posted_user','$query','$contact_email','$content','$date_posted')"); 
			}
		}

		
	}

?>