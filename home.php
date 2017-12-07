<?php 
//require 'config/config.php'; //connect to database
require 'header.php'; 
require 'includes/form_handlers/home_handler.php';
require 'includes/service/user.php';
?>
  
<!--body-->

  	<div class="container text-center">    
	  	<div class="row">
	    	<div class="col-sm-3 scrolldiv">
	      		<div class="box" >
					
			   		<p> <?php
		        	if(isset($_SESSION['username']))
		        		echo "User <br>".$user['username'] ?></p>

		          <div >
               		<select class="selectpicker" id="select_postType">
            		<option>Show</option>
            		<option value="article">Articles</option>
            		<option value="advertisement">Advertisement</option>
        			</select>
               	  </div>
	  	  		</div>

	  	  		
	      
	    	</div>



	    	<!-- Modal : for posting something-->
	    	<div class="col-sm-7">
	    		
	    	   <form action="includes/form_handlers/search_handler.php" class="navbar-form" role="search">
                    <div class="form-group input-group">
                        <input type="search" id="searchInput" class="form-control" placeholder="Search..">

                        <span class="input-group-btn">
                          <button class="btn" type="submit" style="margin-left: -25px;">  <!-- change made -->
                            <span class="icon-search"></span>
                          </button>
                        </span>
                    </div>
                    

                    
               </form>

               
	    		<div class="posts_area">
	    			
	    		</div>
	    		
		  	    <img id="loadingIcon" src="assets/images/icons/loading.gif">


	    	</div>




	    	<div class="col-sm-2">
	    	<div class='box friends_list_area'>
	    		<p>About</p>

	    		<div class = "about">
	    			<p>Fixit is a wiki-based site that teaches people how to fix almost anything. Anyone can create a repair manual for a device, and anyone can also edit the existing set of manuals to improve them. Our site empowers individuals to share their technical knowledge with the rest of the world.</p>

                   <p style="color: red;"> So what are you waiting for?</p>
	    		</div>
	    		
	    	</div>
	    </div>
	  </div>
	</div>


	      

	   
	    
	 	 </div>
	</div>

	

</body>
</html>