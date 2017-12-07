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

		        	<div >
	               		<select class="selectpicker">
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

	    		<div class="posts_area"></div>
		  	    <img id="loadingIcon" src="assets/images/icons/loading.gif">


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

	
	<script>

		 $(document).ready(function(){

			load_posts_update();

			function load_posts_update(){

				console.log("function called")
				$.ajax({
					url: "includes/form_handlers/load_posts_update_handler.php",
		            type: "GET",
		            
		            success : function(data) {
		            	var itemData = $.parseJSON(data);


		            	var postsHtml = "";

		            	//console.log(itemData);
		            	for(var i=0; i < itemData.length; i++) {
		            		 postsHtml += "<div class = 'box'>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Service Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].service_type + "</p>";
				             postsHtml += "<p class = 'post_tags'><span class = 'labels'> Service Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].service_title + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>";
				          	 postsHtml += "</div>"; 
					        //console.log(itemData[i].service_type);
					    }
		               $('.posts_area').empty().append(postsHtml);
		               }
				
				});
				 
			}

          // setInterval('load_posts_update()', 1000); // refresh div after 1 secs

			// 
			
	console.log("hi");

	});
	</script>
</body>
</html>