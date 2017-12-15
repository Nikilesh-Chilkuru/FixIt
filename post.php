<?php
//require 'config/config.php'; //connect to database
require 'header.php';
require 'includes/form_handlers/home_handler.php';
require 'includes/service/user.php';


?>


<script type="text/javascript" src="assets/js/post.js"></script>


<!--body-->
  <input type="hidden" value="<?php echo $user['username'] ?>">
	<input type="hidden" value="<?php echo $user['user_id'] ?>">

	<div class="container text-center">
	  <div class="row">
	    <div class="col-sm-3 scrolldiv">
	      <div class="box" >
		        	<p> <?php
		        	if(isset($_SESSION['username']))
		        		echo "User <br>".$user['username'] ?></p>
		        </a>
	  	  </div>
	  	</div>

	  	<div class="col-sm-7">
	      <div class="row">
	        <div class="col-sm-12 ">

	          <div class="panel panel-default text-left">
	          	<div class="box" style="margin-bottom: 0px;">

	          		<select class="selectpicker">
            		<option>Post</option>
            		<option value="article">Article</option>
            		<option value="advertisement">Advertisement</option>
        		</select>
	              <div class="panel-body article_class">

	            		<form action="includes/form_handlers/post_handler.php" method="POST">
	            		<h4 style="margin-top: 0px;"> Post An Article</h4>
	            		<input type="text" name="service_type" placeholder="Service Type" value="<?php if(isset($_SESSION['service_type']))echo $_SESSION['service_type']; ?>" required><br>
							    <input type="text" name="service_title" placeholder="Title" value="<?php if(isset($_SESSION['service_title']))echo $_SESSION['service_title']; ?>" required><br>
	            	   <textarea class="form-control" rows="3" name="article_post" placeholder="Content..." value="<?php if(isset($_SESSION['article_post']))echo $_SESSION['article_post']; ?>" style="resize: none" required></textarea>
        	  			<br>
              			<button type="submit" class="btn btn-success btn-f" name="article_button">
                			<span class="glyphicon glyphicon-ok"></span> Submit
              			</button>
	            	</form>
	            	</div>

	            	<div class="panel-body ad_class">

	            		<form action="includes/form_handlers/post_handler.php" method="POST">
	            		<h4 style="margin-top: 0px;"> Post An Advertisement</h4>
	            		<input type="text" name="ad_type" placeholder="Ad Type" value="<?php if(isset($_SESSION['ad_type']))echo $_SESSION['ad_type']; ?>" required><br>
					    <input type="text" name="ad_header" placeholder="Title" value="<?php if(isset($_SESSION['ad_header']))echo $_SESSION['ad_header']; ?>" required><br>
					    <input type="email" name="contact_email" placeholder="Contact Email" value="<?php if(isset($_SESSION['contact_email']))echo $_SESSION['contact_email']; ?>" required><br>
					    <input type="text" name="contact_phone" placeholder="Phone No" value="<?php if(isset($_SESSION['contact_phone']))echo $_SESSION['contact_phone']; ?>" required><br>

	            	   <textarea class="form-control" rows="3" name="ad_post" placeholder="Content..." value="<?php if(isset($_SESSION['ad_post']))echo $_SESSION['ad_post']; ?>" style="resize: none" required></textarea>
        	  			<br>
              			<button type="submit" class="btn btn-success btn-f" name="ad_button">
                			<span class="glyphicon glyphicon-ok"></span> Submit
              			</button>
	            	</form>
	            	</div>


	            </div>
	          </div>



	        </div>



	      </div>
	    </div>

	  </div>
	</div>




</body>
</html>
