<?php 
//require 'config/config.php'; //connect to database 
require 'header.php';
require 'includes/form_handlers/home_handler.php';
require 'includes/service/user.php';



?>
  


	<div class="container text-center">    
	  	<div class="row">
	    	<div class="col-sm-3 scrolldiv">
	      		<div class="box" >
					<p> <?php
		        	if(isset($_SESSION['username']))
		        		echo "User <br>".$user['username'] ?></p>
			   		
	  	  		</div>
	      
	    	</div>



	    	<!-- Modal : for posting something-->
	    <div class="col-sm-7">
	      <div class="row">
	        <div class="col-sm-12 ">

	          <div class="panel panel-default text-left">
	          	<div class="box" style="margin-bottom: 0px;">

	              <div class="panel-body article_class">

	            		<form action="includes/form_handlers/contact_handler.php" method="POST">
	            		<h4 style="margin-top: 0px;"> Questions ?</h4>
	            		<input type="text" name="query" placeholder="Title" value="<?php if(isset($_SESSION['query']))echo $_SESSION['query']; ?>" required><br>
							    <input type="email" name="contact_email" placeholder="Contact Email" value="<?php if(isset($_SESSION['contact_email']))echo $_SESSION['contact_email']; ?>" required><br>
	            	   <textarea class="form-control" rows="3" name="query_post" placeholder="Query..." value="<?php if(isset($_SESSION['query_post']))echo $_SESSION['query_post']; ?>" style="resize: none" required></textarea>
        	  			<br>
              			<button type="submit" class="btn btn-success btn-f" name="query_button">
                			<span class="glyphicon glyphicon-ok"></span> Submit
              			</button>
	            	</form>
	            	</div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>




	    	<div class="col-sm-2">
	    	<div class='box'>
	    		<p>About</p>
	    		
	    	</div>
	    </div>
	  </div>
	</div>


	      

	   
	    
	 	 </div>
	</div>

	
	
</body>
</html>