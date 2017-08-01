<?php
	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Change Password</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
<style>
.back{
	background-image: url("img/adimg/1459958074.jpg");
	background-size: cover;
	height: 870px;
     }
</style>
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
					<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
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
			<div class="back"><br><br><br><br><br><br><br><br><br><br><br>
                        <div class="container">
                        <div class="container" > 
                        <div class="row"> 
                        <div class="col-sm-6 col-md-6 col-md-offset-3"> 
                        <div class="panel panel-primary">
                        <div class="panel panel-body">


<?php
	if(isset($_GET['eid'])&&isset($_GET['fpcode'])&&isset($_POST['pwd']))
	{
		        $eid=$_GET['eid'];$fpcode=$_GET['fpcode'];$pwd=$_POST['pwd'];
		        if(!empty($pwd)&&!empty($fpcode)&&!empty($eid))
                        {
		        $pwdhash = md5($pwd);
			$query="SELECT  `fpcode` FROM `users` WHERE  `eid` =' ".$eid." '  ";
		
			if( $query_run = mysqli_query($con,$query) )	
			{
		
					$result = $con->query($query);	
					if ($result->num_rows > 0) 
					{
							while($row = $result->fetch_assoc())
							{
									$code=$row['fpcode']	;
									if($code==$fpcode)
									{
										$query1="UPDATE `users` SET `pwd`='$pwdhash' WHERE `eid` = ' ".$eid." ' ";
										if(mysqli_query($con,$query1))
                                                                                {

											?>
					                                                  <script type="text/javascript">
					                                                    alert("Password changed successfully..");
						
					                                                 </script>
					                                               <?php
				                                                          header( "refresh:0.3; url=login.php" );
                                                                                 }
										else
											echo "error";
									}
							}
					}
			}
                        }


	}


?>

<form action="fpaction.php?eid=<?php echo $_GET['eid'];?>&fpcode=<?php echo $_GET['fpcode'];?>" method="post" >
  <div class="form-group">
      <label for="pwd">Type your new Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd"  >
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form></nav>
<footer class="container-fluid bg-4 text-center">
  <p>copyright 2016 @<a href=""></a>Edu-OLX</p> 
</footer>
				