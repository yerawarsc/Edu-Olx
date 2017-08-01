<?php
	require 'connect.inc.php';
	require 'core.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edu-OLX</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
   <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

 <style>
.jumbotron {
    background-color: #f4511e; /* Orange */
    color: #ffffff;
}
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Edu-OLX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
		<?php if(loggedin())
		{?>
        <li><a href="placead.php">placead</a></li>
		<?php
		}?>
        <li><a href="browsead.php">Browse Ads</a></li>
		
        <li><a href="searchad.php">Search Ad</a></li>
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php if(!loggedin())
		{?>
        <li><a href="login.php"><span class="glyphicon glyphicon-lock"></span> Login</a></li>
		 <li><a href="signup.php"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
		<?php
		}
		else
		{?>
		 <li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
		<?php
		}?>
      </ul>
    </div>
  </div>
</nav>
  
</footer>

</body>
</html>
