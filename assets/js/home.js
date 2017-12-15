
		 $(document).ready(function(){

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
										 postsHtml +=

										 "<form action='includes/form_handlers/article_review_handler.php' method='POST'><input type='text' class='verify_input' placeholder='Write a Review...' value = '' required>"+
							 		            	"<button type='submit' class='btn btn-success verify_btn' style='display:inline-block'>Submit</button><br>"+
							 		            	"<button type='button' class='btn btn-danger upvotes-btn' style='display:inline-block; margin-right:20px;'>Upvote</button>"+
							 									"<span id = 'number_upvotes' style = 'margin-left : -15px; margin-right : 10px;'>(" + itemData[i].reputation+ ") </span>"+
							 		            	"<button type='button' class='btn btn-primary load_reviews' style='display:inline-block'>Show Reviews</button>"+
							 		            	"</form><div class = 'put_reviews'></div>";
				          	 postsHtml += "</div>";
				          	 postsHtml += "</div>";

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
										 postsHtml +=

										"<form action='includes/form_handlers/article_review_handler.php' method='POST'><input type='text' class='verify_input' placeholder='Write a Review...' value = '' required>"+
															 "<button type='submit' class='btn btn-success verify_btn' style='display:inline-block'>Submit</button><br>"+
															 "<button type='button' class='btn btn-danger upvotes-btn' style='display:inline-block; margin-right:20px;'>Upvote</button>"+
															 "<span id = 'number_upvotes' style = 'margin-left : -15px; margin-right : 10px;'>(" + itemData[i].reputation+ ") </span>"+
															 "<button type='button' class='btn btn-primary load_reviews' style='display:inline-block'>Show Reviews</button>"+
															 "</form><div class = 'put_reviews'></div>";
				          	 postsHtml += "</div>";
				          	 postsHtml += "</div>";
					        //console.log(itemData[i].service_type);
					    }
		               $('.posts_area').empty().append(postsHtml);
		               }

				});

			}




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




	$('div.search_class').on('click', '.searh_span .search_btn', function(){
		var $this = $(this);


		var search_key = $this.parent().prev().val();

		var option = $("#select_postType option:selected").val();

		if(option == "Show" || option == "article" ){
			option = "article";
			search_articles_update(search_key);
		}
		else{
			search_ads_update(search_key);
		}

		console.log(option);


	});


	function search_articles_update(search_key){

				console.log("search_key" + search_key)
				$.ajax({
					url: "includes/form_handlers/load_posts_update_handler.php",
		            type: "GET",

		            success : function(data) {
		            	var itemData = $.parseJSON(data);
		            	var postsHtml = "";
		            	for(var i=0; i < itemData.length; i++) {


		            		if(((itemData[i].service_type).toLowerCase().indexOf(search_key) != -1 )|| ((itemData[i].service_title).toLowerCase().indexOf(search_key) != -1 ) ){
		            		 postsHtml += "<div class = 'box' value = '"+ itemData[i].article_id+"'>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Service Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].service_type + "</p>";
				             postsHtml += "<p class = 'post_tags'><span class = 'labels'> Service Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].service_title + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>";
				          	 postsHtml += "<div class = 'review'>";
										 postsHtml +=

										"<form action='includes/form_handlers/article_review_handler.php' method='POST'><input type='text' class='verify_input' placeholder='Write a Review...' value = '' required>"+
															 "<button type='submit' class='btn btn-success verify_btn' style='display:inline-block'>Submit</button><br>"+
															 "<button type='button' class='btn btn-danger upvotes-btn' style='display:inline-block; margin-right:20px;'>Upvote</button>"+
															 "<span id = 'number_upvotes' style = 'margin-left : -15px; margin-right : 10px;'>(" + itemData[i].reputation+ ") </span>"+
															 "<button type='button' class='btn btn-primary load_reviews' style='display:inline-block'>Show Reviews</button>"+
															 "</form><div class = 'put_reviews'></div>";
				          	 postsHtml += "</div>";
				          	 postsHtml += "</div>";

					      }
					    }
		               $('.posts_area').empty().append(postsHtml);
		               }

				});

	}



	// To search ades
	function search_ads_update(search_key){

			 console.log("search_key" + search_key)
			 $.ajax({
				 url: "includes/form_handlers/load_ads_update_handler.php",
							 type: "GET",

							 success : function(data) {
								 var itemData = $.parseJSON(data);
								 var postsHtml = "";
								 //console.log(itemData);

								 //var search_key = search_key;
								 for(var i=0; i < itemData.length; i++) {

									 if(((itemData[i].ad_type).toLowerCase().indexOf(search_key) != -1 )|| ((itemData[i].ad_header).toLowerCase().indexOf(search_key) != -1 ) ){
										postsHtml += "<div class = 'box' value = '"+ itemData[i].ad_id+"'>";
										postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Service Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].ad_type + "</p>";
										postsHtml += "<p class = 'post_tags'><span class = 'labels'> Service Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].ad_header + "</p>";
										postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
										postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>";
										postsHtml += "<div class = 'review'>";
										postsHtml +=

									 "<form action='includes/form_handlers/article_review_handler.php' method='POST'><input type='text' class='verify_input' placeholder='Write a Review...' value = '' required>"+
															"<button type='submit' class='btn btn-success verify_btn' style='display:inline-block'>Submit</button><br>"+
															"<button type='button' class='btn btn-danger upvotes-btn' style='display:inline-block; margin-right:20px;'>Upvote</button>"+
															"<span id = 'number_upvotes' style = 'margin-left : -15px; margin-right : 10px;'>(" + itemData[i].reputation+ ") </span>"+
															"<button type='button' class='btn btn-primary load_reviews' style='display:inline-block'>Show Reviews</button>"+
															"</form><div class = 'put_reviews'></div>";
										postsHtml += "</div>";
										postsHtml += "</div>";
							 }
						 }
									$('.posts_area').empty().append(postsHtml);
									}

			 });

 }


	//To post a review
	$('div.posts_area').on('click', '.review .verify_btn', function(){
		var $this = $(this);
		var article_id = $this.parent().parent().parent().attr('value');
		var review = $this.prev().val();
		var option = $("#select_postType option:selected").val();

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
					location.reload();

				}
		});
		return false;
	});




	//To Upvote --- when user hits upvote
	$('div.posts_area').on('click', '.review .upvotes-btn', function(){
		var $this = $(this);
		var article_id = $this.parent().parent().parent().attr('value');

		console.log("from upvotes button"+article_id);

		var option = $("#select_postType option:selected").val();

		if(option == "Show"){
			option = "article";
		}



		$.ajax({
				url: "includes/form_handlers/upvotes_handler.php",
				type: "POST",
				data: "post_type="+option+
				      "&article_id="+article_id,
				cache: false,

				success: function(returnedData) {
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

		if(option == "Show"){
			option = "article";
		}
		$.ajax({
				url: "includes/form_handlers/load_reviews.php",
				type: "POST",
				data: "post_type="+option+
				      "&article_id="+article_id,
				cache: false,

				success: function(returnedData) {
					var itemData = $.parseJSON(returnedData);
		            var reviewsHtml = "";

		            for(var i=0; i < itemData.length; i++) {
		            		 reviewsHtml += "<div class = 'box'>";
				             reviewsHtml += "<p class = 'post_tags'> <span class = 'labels'>Review </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].review + "</p>";
				             reviewsHtml += "<p class = 'post_tags'><span class = 'labels'> Posted By </span><span class= 'glyphicon  glyphicon-user'></span> " + itemData[i].review_posted_username + "</p>";
				             reviewsHtml += "</div>";
					    }
					$('div.posts_area').find('div[value='+article_id+']').find('.put_reviews').empty().append(reviewsHtml);

				}
		});
		return false;
	});



});
