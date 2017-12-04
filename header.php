<?php
require 'config/config.php';

?>

<!DOCTYPE html>
<html>
<head>
  <title>Welcome <?php if(isset($_SESSION['username'])) echo $_SESSION['username']  ?> !</title>
 
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- css including boostrap -->
    <link href="assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- custom styles for this page -->
    <link href="assets/css/flat-ui.css" rel="stylesheet">
    <link href="assets/css/home_style.css" rel="stylesheet">
    

    <!-- script -->
    
        <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.js"></script>



    <!-- Custom Javascript -->
    <script type="text/javascript" src="assets/js/home.js"></script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets/js/flat.js"></script>




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
    </style>

</head>

<body>

    <nav class="navbar navbar-f navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-reorder"></span>
                </button>
                <a href="#" class="navbar-brand">FixIt</a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.php"><span class=" glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="search.php" ><span class=" glyphicon glyphicon-search"></span>
                    <?php
                    echo "Search<span id='new_message'></span>"; 
                    ?>
                    </a></li>
                    <li><a href="post.php"><span class=" glyphicon glyphicon-send"></span>
                    <?php
                    echo "Post<span id='post'></span>"; 
                    ?>
                    </a></li>
                    <li><a href="contact.php"><span class=" glyphicon glyphicon-envelope"></span>
                    <?php
                    echo "Contact<span id='contact'></span>"; 
                    ?>
                    </a></li>
                    
                </ul>
                
                </form>

                <ul class="nav navbar-nav navbar-right">
                		<?php 
                			  if(!isset($_SESSION['username'])) {
                				echo '<a href="register.php"><button type="submit" class="btn btn-success" id ="SignIn_button" name="SignIn_button">Sign In</button><br></a>';
                			  }
                				else{
                					echo 
                					    $_SESSION['username'] . "
			                         <li><a href='includes/form_handlers/logout_handler.php'>
                         <span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
                        ";}
                        ?>


                    
                </ul>
            </div>
        </div>
    </nav>

<script type="text/javascript">
    // Navbar box shadow on scroll 
    $(function(){
        var navbar = $('.navbar');
        $(window).scroll(function(){
            if($(window).scrollTop() <= 40){
                navbar.css('box-shadow', 'none');
            } else {
              navbar.css('box-shadow', '0px 10px 20px rgba(0, 0, 0, 0.4)'); 
            }
        });  
    });  


    

</script>
