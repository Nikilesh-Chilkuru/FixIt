<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Page !!</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
          <link href="assets/Bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- custom styles for this page -->
    <link href="assets/css/flat-ui.css" rel="stylesheet">
    <link href="assets/css/home_style.css" rel="stylesheet">

 
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.js"></script>



    <!-- Custom Javascript -->
    <script type="text/javascript" src="assets/js/admin.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
	<script src="assets/js/holder.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	<script src="assets/js/flat.js"></script>
    

</head>
<body>

<style>    
        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
        }
        #SignIn_button{
        	font-size : 12px;
        	padding : 5px;
        	margin-top: 11px;
        	margin-right : 20px;
        	border-radius:  3px;
        }
        
        .post_tags{
            text-align: left;
        }

       .labels{
            color:lightseagreen;
            font-size: 1.1em;
        }

        .selectpicker{
        /*background-color: #34495e;*/
            border-radius: 2px;
            margin-left: 15px;
            padding : 5px 5px;
            margin-bottom: 10px;
         }

         .load_reviews{
            margin: 10px 0px;
            /*position: fixed;
            float: left;*/
         }

         .about P{
            color: deepskyblue;
            text-align: -webkit-left;
         }
</style>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->


        
    </div>

    <div class="container text-center">    
	  	<div class="row">
	    	<div class="col-sm-3 scrolldiv">
	      		<div class="box" >
					
			   		<p> User :</p>
			   		<p> Admin </p>

		          <div >
               		<select class="selectpicker" id="select_postType">
            		<option>See</option>
            		<option value="article">Articles</option>
            		<option value="advertisement">Advertisement</option>
            		<option value="users">Users</option>
            		<option value="query">Query</option>
        			</select>
               	  </div>
	  	  		</div>

	  	  		
	      
	    	</div>



	    	<!-- Modal : for posting something-->
	    	<div class="col-sm-7">
	    		
	    	 

               
	    		<div class="posts_area">
	    			
	    		</div>
	    		

	    	</div>




	    	
	  </div>
	</div>

	    
	 	 </div>
	</div>

	

</body>

   

</body>

    <!--   Core JS Files   -->

	

</html>
