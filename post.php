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

	  	<div class="col-sm-7">
	    
	      <div class="row">
	        <div class="col-sm-12">
	          <div class="panel panel-default text-left">
	          	<div class="box" style="margin-bottom: 0px;">
	            <div class="panel-body">
	            	
	            	<form action="includes/form_handlers/post_handler.php" method="POST">
	            		<input type="text" name="service_type" placeholder="Service Type" value="<?php if(isset($_SESSION['service_type']))echo $_SESSION['service_type']; ?>" required><br>
							<input type="text" name="service_title" placeholder="Title" required><br>

	            	   <textarea class="form-control" rows="3" name="home_post" placeholder="Content..." value="<?php if(isset($_SESSION['home_post']))echo $_SESSION['home_post']; ?>" style="resize: none" required></textarea>
        	  			<br>
              			<button type="submit" class="btn btn-success btn-f">
                			<span class="glyphicon glyphicon-ok"></span> Submit
              			</button>
	            	</form>
	            	</div>
	            </div>
	          </div>
	        </div>
	      </div>
	    
	      <div class="posts_area"></div>
		  <img id="loadingIcon" src="assets/images/icons/loading.gif">
	    </div>

	  </div>
	</div>

	   


</body>
</html>