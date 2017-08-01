<!DOCTYPE html>
<html lang="en">
<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	?>
<head>
  <title>About us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c;
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; 
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; 
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }

.item img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
 
  </style>
</head>
<body>

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
					 <li><a href="myprofile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
					
					<?php
					}?>
				         <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact us</a></li>
                                         <li class="active"><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
				  </ul>
				</div>
			  </div>

<div class="container-fluid bg-1 text-center">
  <center>   <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:green;background-color:light-blue;"><h1>Edu-OLX</h1></div></center>

  <img src="i.png" height="80px" width="80px" class="img-circle" alt="icon">
   <center>   <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:orange;background-color:light-blue;"><h3>WCE's 1st Educational Marketplace</h3></div></center>

</div>
</nav>
<div class="container-fluid bg-2 text-center">
    <center>   <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:orange;background-color:light-blue;"><h3>What is Edu-OLX ?</h3></div></center>
 <center> <p>  Edu-OLX is an online platform for students of Walchand College of Engineering, Sangli to Sell and Buy old Educational stuff 
at affordable price and at one place.It is totally free.Here,anyone can sell their old educational stuff and make some money.Posting an Ad is totally
free.
   
   </p></center>
</div>
<br>
<div class="container-fluid bg-3 text-center">
   <center>   <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:blue;background-color:light-blue;"><h1>Our Team</h1></div></center>
 
  <div class="container-fluid bg-1 text-center">  <br><br><br>  <br>
  <img src="rahul.jpg" height="200px" width="200px" class="img-circle" alt="Rahul Bagad">
  <h3>Rahul Bagad</h3>
  <h4><a><span class="glyphicon glyphicon-earphone"></span>  7350617969</a></h4>
  <h4><a href="mailto:rlbagad2@gmail.com"><span class="glyphicon glyphicon-envelope"></span>  rlbagad2@gmail.com</a></h4>

<div class="row ">
<div class="col-xs-3"></div>

<div class="col-xs-2 item">
<a href="https://www.linkedin.com/in/rahul-bagad-b7810bb0?trk=nav_responsive_tab_profile">
<img class="item" src="ln1.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>


<div class="col-xs-2 item">
<a href="https://plus.google.com/u/0/116783118687334446124/posts">
<img class="item" src="g.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>



<div class="col-xs-2 item">
<a href="https://www.facebook.com/rahul.bagad.908">
<img class="item" src="fb.png" height="50px" width="50px" style=" display: inline;"  ></a><br>
</div>

<div class="col-xs-5"></div>
</div>
</div>

 <div class="container-fluid bg-1 text-center"><br><br><br>
  <img src="profile.gif" height="150px" width="150px" class="img-circle" alt="savya dhurve">
  <h3>Savyasachi Dhurve</h3>

  <h4><span class="glyphicon glyphicon-earphone"></span>  9049385853</h4>
  <h4><span class="glyphicon glyphicon-envelope"></span>  savya1612@gmail.com</h4>

<div class="row">
<div class="col-xs-3"></div>

<div class="col-xs-2 item">
<a href="#">
<img class="item" src="ln1.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>


<div class="col-xs-2 item">
<a href="#">
<img class="item" src="g.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>



<div class="col-xs-2 item">
<a href="#">
<img class="item" src="fb.png" height="50px" width="50px" style=" display: inline;"  ></a><br>
</div>

<div class="col-xs-5"></div>
</div>

</div>


 <div class="container-fluid bg-1 text-center"><br><br><br>
  <img src="profile.gif" height="150px" width="150px" class="img-circle" alt="sankalp yerawar">
  <h3>Sankalp Yerawar</h3>

  <h4><span class="glyphicon glyphicon-earphone"></span>  8237669414</h4>
  <h4><span class="glyphicon glyphicon-envelope"></span>  sankalpyerawar@gmail.com</h4>

<div class="row">
<div class="col-xs-3"></div>

<div class="col-xs-2 item">
<a href="#">
<img class="item" src="ln1.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>


<div class="col-xs-2 item">
<a href="#">
<img class="item" src="g.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>



<div class="col-xs-2 item">
<a href="#">
<img class="item" src="fb.png" height="50px" width="50px" style=" display: inline;"  ></a><br>
</div>

<div class="col-xs-5"></div>
</div>

</div>

</body>