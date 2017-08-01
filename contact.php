<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	
	if(isset($_POST['contact_name'])&&isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['msg'])&&isset($_GET['eid']))
	{
	
		$eid=$_GET['eid'];$contact_name=$_POST['contact_name'];$email=$_POST['email'];$subject=$_POST['subject'];$msg=$_POST['msg'];
		if(!empty($contact_name)&&!empty($email)&&!empty($subject)&&!empty($msg)&&!empty($eid))
		{
                       
	                $subject=" ";
		        $body="Hi...I am ".$_POST['contact_name'].$_POST['msg'];$headers="From: $email";
			if(mail($eid,$subject,$body,$headers))
			
			{
                                  
?>
					<script type="text/javascript">
						alert(" Mail Sent Successfully..");	
					</script>
<?php
				header( "refresh:0.3; url=home.php" );		
			}
			else
			{
?>
			<script type="text/javascript">
				alert("Sorry ,an error occured.Plz try again after some time...");
			</script>
<?php			
			}	
		
		}
	
	}



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>
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
                                        <li><a href="contactus.php"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
				   
				  </ul>
				</div>
			  </div>
			
<div class="back">

<br><br><br><br>
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">


<center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:blue;background-color:light-blue;"><h1>Contact Form</h1></div></center>
<form action="contact.php?eid=<?php echo $_GET['eid'];?>" method="post">

<div class="form-group">
 <label for="name">Your Name:</label>
 <input type="text" class="form-control" id="name" name="contact_name" >
  </div>
  <div class="form-group">
 <label for="email">Your e-mail address:</label>
 <input type="email" class="form-control" id="email" name="email" >
  </div>
  <div class="form-group">
 <label for="subject">Subject:</label>
 <input type="text" class="form-control" id="subject" name="subject" >
  </div>
  <div class="form-group">
 <label for="subject">Message:</label>
 <textarea class="form-control" id="msg" name="msg" rows="6" cols="50"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Send</button>
 </form>
</div></div></div></div></div></div></nav>
  <footer class="container-fluid bg-4 text-center">
  <p>copyright 2016 @<a href=""></a>Edu-OLX</p> 
</footer>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>