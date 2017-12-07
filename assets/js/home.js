
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
		            		 postsHtml += "<div class = 'box'>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Ad Type </span><span class= 'glyphicon  glyphicon-wrench'></span> " + itemData[i].ad_type + "</p>";
				             postsHtml += "<p class = 'post_tags'><span class = 'labels'> Ad Title </span><span class= 'glyphicon  glyphicon-tag'></span> " + itemData[i].ad_header + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'> Content  </span> <span class= 'glyphicon  glyphicon-file'></span> " + itemData[i].content + "</p>";
				             postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Posted By </span>  <span class= 'glyphicon  glyphicon-user'></span>  " + itemData[i].posted_user + "</p>"
				          	 postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Contact Email </span>  <span class= 'glyphicon  glyphicon-envelope'></span>  " + itemData[i].contact_email + "</p>";
				          	 postsHtml += "<p class = 'post_tags'> <span class = 'labels'>Contact Phone </span>  <span class= 'glyphicon  glyphicon-phone'></span>  " + itemData[i].contact_phone + "</p>";
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
			
	console.log("hi");

	});