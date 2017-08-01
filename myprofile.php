<?php
        require 'connect.inc.php';
	require 'core.inc.php';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Profile</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<style>	.back{
	background-image: url("img/adimg/1459958074.jpg");
	background-size: cover;
	height: 700px;
}</style>
  </head>
  <body>


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
					<li ><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<?php if(loggedin())
					{?>
					<li><a href="placead.php"><span class="glyphicon glyphicon-plus-sign"></span> place ad</a></li>
					<?php
					}?>
					<li><a href="browsead.php"><span class="glyphicon glyphicon-eye-open"></span> Browse Ads</a></li>
					
					<li><a href="searchad.php"><span class="glyphicon glyphicon-search"></span> Search Ad</a></li>
				   
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
					 <li class="active"><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					
					<?php
					}?>
                                        <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact us</a></li>
                                         <li ><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
				   
				  </ul>
				</div>
			  </div>
<div class="back">

<br><br>

<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">




	<?php
	
	
	
	?><center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:green;background-color:light-blue;"><h1>My Profile</h1></div>
	<div class="col-xs-12" style="font-family:'Lobster',cursive;color:black"><h3>Name:<?php
	echo $_SESSION[ ' fname ' ]."  ".$_SESSION[ ' lname ' ];?></h3></div>
	
	<div class="col-xs-12" style="font-family:'Lobster',cursive;color:black"><h3>Mail ID:<?php
	echo $_SESSION['eid']."<br>";?></h3></div>
	<div class="col-xs-12" style="font-family:'Lobster',cursive;color:black"><h3>Contact No:<?php
	echo $_SESSION[  ' mob ' ]."<br>";?></h3></div><?php
	echo "<br>"?>  <a href="myads.php?eid=<?php echo $_SESSION['eid'];?>" class="btn btn-info btn-lg">
								<span class="glyphicon glyphicon-user"></span> My Ads 
	</a></center>
</div></div></div></div></div></div></nav>
