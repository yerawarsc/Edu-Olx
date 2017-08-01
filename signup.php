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
    <title>Signup</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
<style>	.back{
	background-image: url("img/adimg/1459958074.jpg");
	background-size: cover;
	height: 750px;
}</style>
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
					 <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
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
			
<div class="back"><br><br>
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">

  <center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:red;background-color:light-blue;"><h1>Register</h1></div></center>
  <form action="signup.php" method="post" role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="eid"  >
    </div><hr>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" >
    </div><hr>
	<div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" class="form-control" id="fname" name="fname" >
    </div><hr>
	<div class="form-group">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="lname" name="lname" >
    </div><hr>
	<div class="form-group">
      <label for="pwd">contact no:</label>
      <input type="text" class="form-control" id="mob" name="mob" >
    </div><hr>
  
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
</div></div></div></div></div></nav>
<footer class="container-fluid bg-4 text-center">
  <p>copyright 2016 @<a href=""></a>Edu-OLX</p> 
</footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php
	if(!loggedin())
	{
	if(isset($_POST['eid'])&&isset($_POST['pwd'])&&isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['mob'])	) 
	{
		$eid = $_POST['eid']; $pwd=$_POST['pwd']; $fname=$_POST['fname']; $lname=$_POST['lname']; $mob = $_POST['mob'];
	
		if( !empty($eid) && !empty($pwd) && !empty($fname) && !empty($lname) && !empty($mob) )
		{
			$query1= "SELECT eid FROM users WHERE eid like ' $eid ';";
			$res=mysqli_query($con,$query1);
			
			if(mysqli_num_rows($res)>0)
			{
?>
					<script type="text/javascript">
						alert("Already registered.");
					</script>
<?php
			}
			else
			{
			$pwdhash = md5($pwd);
			$vcode=rand(20000,5000000);
			$query = "INSERT INTO `users`( `eid`, `pwd`, `fname`, `lname`, `mob`,`vcode`) VALUES ( ' ". $eid." ', '$pwdhash', ' ".$fname." ', ' " .$lname."','".$mob."','".$vcode."')	";
			
			if( $query_run = mysqli_query($con,$query) )
			{
					$subject="link for email verification";
					$message = 'http://eduolx.890m.com/ev.php?eid='.$eid.'&vcode='.$vcode;
				        mail($eid,$subject,$message,$headers);
					?>
					<script type="text/javascript">
						alert("Check your email for verification code..");
						
					</script>
					<?php
				        header( "refresh:0.3; url=home.php" );
			}
			else
			{
?>
			<script type="text/javascript">
				alert("Sorry an error Ocurred . Try again later");
			</script>
<?php			
			
			}
			}
		}
		else
		{
?>
			<script type="text/javascript">
				alert("Please fill in all fields");
			</script>
<?php			
		}
	}

	}
else
{
?>
			<script type="text/javascript">
				alert("You are already rigistered...!!!");
			</script>
			
<?php	

}
?>	