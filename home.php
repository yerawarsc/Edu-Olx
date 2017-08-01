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
<script language="javascript">
        function MouseRollover(MyImage) {
        MyImage.src = "fb.png";
    }
        function MouseOut(MyImage) {
        MyImage.src = "fb1.png";
    }
</script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 0px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #e8f8f5  ;
          
      padding: 15px;
    }
	.back{
	background-image: url("d.jpg");
	height=700px;
	width=1400px;
        margin -top:none;
}
	
.image{
	background-image:url("img/adimg/book.jpg ");
	height=700px;
	width=1400px;
	margin -top:none;
	}
	.jumbotron {
    background-color: #0B2F3A;
    color: #ffffff;
	
}
.item {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.item:hover {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
 

  </style>
</head>
<body>







<body>
  <div class="jumbotron text-center">
    <h1>Edu-OLX</h1>
    <p>WCE's 1st educational marketplace...</p>
  </div>
</body>	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-book"></span>  Edu-OLX</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                  <li ><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
       
      </ul>
    </div>
  </div>
</nav>
<div class="back"><br><br>

   <center>   <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:orange;background-color:light-blue;"><h1>Welcome to Edu-OLX</h1></div></center>
<br><br><br><br><br>
<div class="container-fluid text-center">
  
  
  
  <div class="row">
    <div class="col-sm-4">
       <a href="signup.php">
      <img class="item" src="Register.png"  height="200px" width="200px" style=" display: inline;">
      
      <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:blue;background-color:light-blue;"><h1>Register Here</h1></div>
      </a>
    </div>
    <div class="col-sm-4">
      <a href="browsead.php">
      <img class="item" src="browse.png"  height="200px" width="200px" style=" display: inline;">
      <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:blue;background-color:light-blue;"><h1>Browse Ads</h1></div>
      </a>
     
    </div>
    <div class="col-sm-4">
      <a href="searchad.php">
      <img class="item" src="search.png" class="zoom-img" height="200px" width="200px" style=" display: inline;">
      <div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:blue;background-color:light-blue;"><h1>Search Ads</h1></div>
       </a>
    </div>
    </div>
    <br><br>

</div>




<div class="row">
<div class="col-xs-3"></div>

<center><div class="col-xs-2">
<a href="https://www.facebook.com/Edu-OLX-657275404424652/">
<img class="item" src="fb.png" height="50px" width="50px" style=" display: inline;"  ></a><br>
</div></center>

<center>
<div class="col-xs-2">
<a href="https://plus.google.com/u/0/100959115698563648329/posts">
<img class="item" src="g.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>
</center>


<center>
<div class="col-xs-2">
<a href="https://www.linkedin.com/in/rahul-bagad-b7810bb0?trk=nav_responsive_tab_profile">
<img class="item" src="ln1.png" height="50px" width="50px" style=" display: inline;"  ></a><br>	
</div>
</center>

<div class="col-xs-5"></div>
</div>




        
<footer class="container-fluid bg-4 text-center">
  <p>copyright 2016 @<a href="mailto:eduolx96@gmail.com">Edu-OLX</a></p> 
</footer>
</body>


</html>
