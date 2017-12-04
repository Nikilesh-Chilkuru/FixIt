<?php 
//require 'config/config.php'; //connect to database
require 'header.php'; 
require 'includes/form_handlers/home_handler.php';
require 'includes/service/user.php';
?>
  
<!--body-->
  	<input type="hidden" value="<?php echo $user['username'] ?>">
	<input type="hidden" value="<?php echo $user['user_id'] ?>">

	<div class="container text-center">    
	  <div class="row">
	    <div class="col-sm-3 scrolldiv">
	      <div class="box" >					
		        	<p> <?php 
		        	if(isset($_SESSION['username']))
		        		echo "User ID:".$user['username'] ?></p>
		        </a>			   	
	  	  </div>
	  	</div>
	  </div>
	</div>

	   


</body>
</html>