<?php 
//require 'config/config.php'; //connect to database 
require 'header.php';
require 'includes/service/user.php';



	/*	
	if(isset($_POST['update_profile'])){
	header("Location: upload.php");
	exit;
	}*/

?>
  


	<div class="container text-center">    
	  	<div class="row">
	    	<div class="col-sm-3 scrolldiv">
	      		<div class="box" >
					
			   		
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
	    	<div class='box friends_list_area'>
	    		<p>About</p>
	    		
	    	</div>
	    </div>
	  </div>
	</div>


	      

	   
	    
	 	 </div>
	</div>

	
	<script>
		$(document).ready(function() {

			$('#loadingIcon').show();
			<?php $_SESSION['Loading'] = 'true' ?>
			//ajax request for loading posts 
			$.ajax({
				url: "includes/form_handlers/post_handler.php",
				type: "POST",
				data: "page=1",
				cache: false,

				success: function(returnedData) {
					$('#loadingIcon').hide();
					//add returned date to the post area
					$('.posts_area').html(returnedData);
					return false;
				}
			});

			//do it if scroll up or down
			$(window).scroll(function() {
				var pageNum = $('.posts_area').find('.nextPage').val();
				var noMorePosts = $('.posts_area').find('.noMorePosts').val();
				//if the height of the browser window + scrolled height == total height that can be scorlled
				if((document.documentElement.scrollHeight == document.documentElement.scrollTop + window.innerHeight) && noMorePosts == 'false') {
					//start ajax request again
					$('#loadingIcon').show();
					$('.posts_area').find('.nextPage').remove(); //Removes current input
					$('.posts_area').find('.noMorePosts').remove(); //Removes hidden input
					//do ajax request
					var ajaxReq = $.ajax({
						url: "includes/form_handlers/post_handler.php",
						type: "POST",
						data: "page="+pageNum,
						cache: false,

						success: function(returnedData) {
							$('#loadingIcon').hide();
							$('.posts_area').append(returnedData);
						}
					});
				}

				return false;

			}); //End (window).scroll(function())

			
		});
	</script>
</body>
</html>