<?php 
	/**
	* user object
	*/
	class user 
	{	
		private $con;
		private $user;
		
		function __construct($con,$id){
			$this->con = $con;
			$user_details_query = mysqli_query($con,"select * from user where user_id ='$id'");
			$this->user=mysqli_fetch_array($user_details_query);
		}

		function getUsername(){
			return $this->user['username'];
		}

		function getUserid(){
			return $this->user['user_id'];
		}

		
		// function isFriend($is_friend_id) {
		// 	$user_id = $this->user['id'];
		// 	if(mysqli_query($this->con, "SELECT 'true' WHERE $is_friend_id IN ( SELECT friend_id FROM user_friend WHERE user_id ='$user_id') ") ) 
		// 		return true;
		// 	else 
		// 		return false;
	
		// }

	}
 ?>