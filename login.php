<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login</title>
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
	height: 800px;
}</style>
  </head>


<?php

   
	require 'connect.inc.php';
	require 'core.inc.php';
	if(!loggedin())
	{
	if(isset($_POST['eid'])&&isset($_POST['pwd'])) 
	{
	
		
		$eid = $_POST['eid']; $pwd=$_POST['pwd']; 
		
		if( !empty($eid) && !empty($pwd)  )
		{
		
			
			$pwdhash = md5($pwd);
			
			$query = "SELECT * FROM `users` WHERE `eid` = ' ".$eid." ' AND `pwd` =  '$pwdhash' AND `status`=1 ";
			
			
			if( $query_run = mysqli_query($con,$query) )
			{
				
				if(mysqli_num_rows($query_run)>0)
				{			
					
					$result  = mysqli_fetch_assoc($query_run);		
					
					
					$_SESSION[ ' id ' ] = $result [ 'id'];
					$_SESSION['eid'] = $result ['eid'];
					$_SESSION[ ' fname ' ] = $result [ 'fname'];
					$_SESSION[ ' lname ' ] = $result [ 'lname'];
					$_SESSION[ ' mob ' ] = $result [ 'mob'];
                                      	
					echo mysqli_error($con);
					?>
					<script type="text/javascript">
						alert("Successfully Logged In..");	
					</script>
					<?php
				header( "refresh:0.3; url=home.php" );
				}
				else
				{
				
?>
					<script type="text/javascript">
						alert("invalid Login Id or Password");
					</script>
<?php				
				}			
			
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
	 header('Location: home.php');
?>
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
        <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

<br><br><br><br><br><br><br><br> 
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">

 <center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:red;background-color:light-blue;"><h1>Login</h1></div></center> <form action="login.php" method="post" role="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="eid"  placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
    </div>
  
    <button type="submit" class="btn btn-primary">Log In</button>
      <a href="fp.php" class="btn btn-info btn-md">
          <span class=""></span> Forgot Password
	</a>

  </form>
</div></div></div></div></div></div></div></nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  <footer class="container-fluid bg-4 text-center">
  <p>copyright 2016 @<a href=""></a>Edu-OLX</p> 
</footer>
</html>