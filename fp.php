<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Forgot Password</title>
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
<?php

require 'connect.inc.php';
require 'core.inc.php';
?>
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
                                         <li ><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
				   
				  </ul>
				</div>
			  </div>
			<div class="back">

<br><br><br><br><br><br>
<div class="container">
 

<?php
if(isset($_POST['email']))
{
	$email=$_POST['email'];
	if(!empty($email))
	{
		$query="SELECT eid FROM users WHERE eid like ' $email ';";
		
			if( $query_run = mysqli_query($con,$query) )	
			{
		
					$result = $con->query($query);	
					if ($result->num_rows > 0) 
					{	
							
							$fpcode=rand(20000,5000000);
							$query1 = "UPDATE `users` SET `fpcode`=$fpcode WHERE `eid` = ' ".$email." ' ";
							
							if( $query_run = mysqli_query($con,$query1) )
							{
									$subject="link for email password reset ";
									$body="http://eduolx.890m.com/fpaction.php?eid=$email&fpcode=$fpcode ";$headers="From: rlbagad2@gmail.com";
									if(mail($email,$subject,$body,$headers))
									{
									?>
									<script type="text/javascript">
										alert("Check your email for link..");
									</script>
									<?php
                                    header( "refresh:0.3; url=login.php" );
									}
									else
									  echo "error";
								
							}
			
					}
					else
					{
									?>
									<script type="text/javascript">
										alert("You are not registered..");
									</script>
									<?php
									header( "refresh:0.3; url=signup.php" );
					}
					
		}
	}	
}
?>
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">
<form action="fp.php" method="post">
 <div class="form-group">
      <label for="email">Enter Your E-mail To Get Password Reset Link :</label>
      <input type="email" class="form-control" id="email" name="email"  >
 </div>
 
 <button type="submit" class="btn btn-primary">Submit</button>
</form></nav>
</div></div></div></div>