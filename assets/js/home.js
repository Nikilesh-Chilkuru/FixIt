// //for delete or modify posts
// $(document).ready(function() {
// 	//for post deletion
	

// 	//for adding likes
	
// 	//for adding each comment in .comment area
	
// 	//for comment deletion
	
// 	//for search ajax
// 	$("nav #searchInput").keyup(function(){
// 		var searchedUsername = this.value;
// 		searchedUsername = $.trim(searchedUsername);
// 		if (searchedUsername == '') {
// 			$("nav").find('.search_result_ajax').hide('slow','swing');
// 		}else{
// 			$("nav").find('.search_result_ajax').show('slow','swing');
			
// 			$.ajax({
// 				url: "includes/form_handlers/search_handler.php",
// 				type: "POST",
// 				data: "searchRegisteredUserAjax=true"+
// 					  "&searchedUsername="+searchedUsername,
// 				cache: false,

// 				success: function(returnedData) {
// 					$("nav").find('.search_result_ajax').empty();
// 					$("nav").find('.search_result_ajax').append(returnedData);
// 				}
// 			});
// 		}
// 	});


// });

 // $(document).ready(function() {

 // 	var btn = document.getElementById('SignIn_button');
 // 	console.log(btn);
	// 	btn.addEventListener('click', function() {
	// 		console.log("button clicked");
	// 	document.location.href = 'register.php';
	// 	});

 // });


