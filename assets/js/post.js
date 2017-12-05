
	$(document).ready(function(){

		 $(".article_class").show();
	                $(".ad_class").hide();

	    $("select").change(function(){
	        $(this).find("option:selected").each(function(){
	            var optionValue = $(this).attr("value");
	            if(optionValue == "article"){
					console.log("article selected");
	                $(".article_class").show();
	                $(".ad_class").hide();
	            } else if(optionValue == "advertisement"){
					console.log("Ad selected");
	            	$(".ad_class").show();
	            	$(".article_class").hide();
	            }
	        });
	    }).change();
	});

