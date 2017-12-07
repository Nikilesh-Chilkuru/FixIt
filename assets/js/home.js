
		 $(document).ready(function(){

		 	var reviewHtml = "<form action='includes/form_handlers/article_review_handler.php' method='POST'><input type='text' class='verify_input' placeholder='Write a Review...' value = '' required>"+
		            	"<button type='submit' class='btn btn-success verify_btn' style='display:inline-block'>Submit</button><br>"+
		            	"<button type='button' class='btn btn-danger upvotes-btn' style='display:inline-block; margin-right:20px;'>Upvote</button>"+
		            
		            	"<button type='button' class='btn btn-primary load_reviews' style='display:inline-block'>Show Reviews</button>"+
		            	"</form><div class = 'put_reviews'></div>";

		            	console.log(reviewHtml);
 

			load_articles_update();

			function load_articles_update(){

				console.log("function called")
				$.ajax({
					url: "includes/form_handlers/load_posts_update_handler.php",
		            type: "GET",
		            
		            success : function(data) {
		            	var itemData = $.parseJSON(data);
		            	var postsHtml = "";
		            	//console.log(itemData);
		            	for(var i=0; i < itemData.length; i++) {
		            		 postsHtml += "<div class = 'box' value = '"+ itemData[i].article_id+"'>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Service Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].service_type + "</p>";
				             postsHtml += "<p class = 'post_tags'><span class = 'labels'> Service Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].service_title + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>";
				          	 postsHtml += "<div class = 'review'>";
				          	 postsHtml  += reviewHtml;
				          	 postsHtml += "</div>";
				          	 postsHtml += "</div>"; 
					        //console.log(itemData[i].service_type);
					    }
		               $('.posts_area').empty().append(postsHtml);
		               }
				
				});
				 
			}

			function load_ads_update(){

				console.log("function called")
				$.ajax({
					url: "includes/form_handlers/load_ads_update_handler.php",
		            type: "GET",
		            
		            success : function(data) {
		            	var itemData = $.parseJSON(data);
		            	var postsHtml = "";
		            	console.log(itemData);

		            	
 									
 								
		            	for(var i=0; i < itemData.length; i++) {
		            		 postsHtml += "<div class = 'box' value = '"+ itemData[i].ad_id+"'>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Ad Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].ad_type + "</p>";
				             postsHtml += "<p class = 'post_tags'><span class = 'labels'> Ad Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].ad_header + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>"
				          	 postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Contact Email </span>  <span class= 'glyphicon  glyphicon-envelope'></span>  " + itemData[i].contact_email + "</p>";
				          	 postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Contact Phone </span>  <span class= 'glyphicon  glyphicon-phone'></span>  " + itemData[i].contact_phone + "</p>";
				          	 postsHtml += "<div class = 'review'>";
				          	 postsHtml += reviewHtml;
				          	 postsHtml += "</div>";
				          	 postsHtml += "</div>"; 
					        //console.log(itemData[i].service_type);
					    }
		               $('.posts_area').empty().append(postsHtml);
		               }
				
				});
				 
			}

				    			

          // setInterval('load_posts_update()', 1000); // refresh div after 1 secs

			// 

		$("select").change(function(){
	        $(this).find("option:selected").each(function(){
	            var optionValue = $(this).attr("value");
	            if(optionValue == "article"){
					console.log("article selected");
	                load_articles_update();
	            } else if(optionValue == "advertisement"){
					console.log("Ad selected");
	            	load_ads_update();
	            }
	        });
	    }).change();



	 //for adding toggle to comment button next to the like button 
	// $('div.posts_area').on('click','.commentdis>button',function(){
	// 	var $targetElement = $(this).parent().parent().parent().next();
	// 	$targetElement.toggle('slow');
	// });

	//To post a review
	$('div.posts_area').on('click', '.review .verify_btn', function(){	
		var $this = $(this);
		var article_id = $this.parent().parent().parent().attr('value');
		var review = $this.prev().val();

		console.log(article_id);
		console.log(review);	
		// if <p> exists before <form></form> delete it
		//$this.parent().prevAll('p').remove();

		var option = $("#select_postType option:selected").val();
		
		//console.log("abc"+option);
		if(option == "Show"){
			option = "article";
		}

	            
	            
		$.ajax({
				url: "includes/form_handlers/article_review_handler.php",
				type: "POST",
				data: "post_type="+option+
				      "&article_id="+article_id+
					  "&review="+review,
				cache: false,

				success: function(returnedData) {
					// var error = "Please enter the content!";
					// if(returnedData.indexOf(error) >=0){
					// 	$this.parent().before(returnedData);
					// }else{
					// 	$this.prev().find('input').val("");
					// 	$this.parent().parent().next().empty();
					// 	$this.parent().parent().next().append(returnedData);
					// }
					console.log(returnedData);
					location.reload();

				}
		});
		return false;
	});

			
	// To display reviews

	$('div.posts_area').on('click', '.review .load_reviews', function(){
		var $this = $(this);
		console.log("show review buttons clicked");
		var article_id = $this.parent().parent().parent().attr('value');
		
		console.log(article_id);
		var reviewsHtml = "";

		var value = article_id;
		console.log(value);

		var option = $("#select_postType option:selected").val();
		
		//console.log("abc"+option);
		if(option == "Show"){
			option = "article";
		}
		// if <p> exists before <form></form> delete it
		//$this.parent().prevAll('p').remove();
		$.ajax({
				url: "includes/form_handlers/load_reviews.php",
				type: "POST",
				data: "post_type="+option+
				      "&article_id="+article_id,
				cache: false,

				success: function(returnedData) {
					var itemData = $.parseJSON(returnedData);
		            var reviewsHtml = "";
		            // console.log(itemData);

		            for(var i=0; i < itemData.length; i++) {
		            		 reviewsHtml += "<div class = 'box'>";
				             reviewsHtml += "<p class = 'post_tags'> <span class = 'labels'>Review </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].review + "</p>";
				             reviewsHtml += "<p class = 'post_tags'><span class = 'labels'> Posted By </span><span class= 'glyphicon  glyphicon-user'></span> " + itemData[i].review_posted_username + "</p>";
				             reviewsHtml += "</div>"; 
					        //console.log(itemData[i].service_type);
					    }
					$('div.posts_area').find('div[value='+article_id+']').find('.put_reviews').empty().append(reviewsHtml);
					
				}
		});
		return false;
	});

		
	



});