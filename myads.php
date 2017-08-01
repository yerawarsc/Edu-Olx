<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Browse Ads</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	if(loggedin())
	{
			$query="SELECT * FROM `ad` WHERE `email` = ' ".$_SESSION['eid']." ' ";
			if( $query_run = mysqli_query($con,$query) )	
			{
	
				$result = $con->query($query);	
		
				if ($result->num_rows > 0) 
				{
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
			</nav>
<?php
				while($row = $result->fetch_assoc())
				{ $cnt=$cnt+1;
?>

				
					
		 
				
			   
				<div class='col-md-4'  style=' text-align : center;'>
				<a href="showad.php?adid= <?php echo $row["adid"]; ?>" >
				<img src="img/adimg/<?php echo $row['img']?>" height="300px" width="300px" style="border:3px solid white; display: inline;"  ></a><br>
					<div class="panel-footer"><h4><a href="showad.php?adid= <?php echo $row["adid"]; ?>"><?php echo $row["title"]?></a></h4>
					
					<?php echo "Price : rs." . $row["price"]. "<br>";
					echo "Owner : ".$row["owner"]."<br>";?>
					</center></div></div>
	<?php
	            if($cnt%3==0)
				        echo "<br>";

				}
				}
				else
				{
?>
			<script type="text/javascript">
				alert("No ads found...");
			</script>
<?php			
					
				
				}
			}

	}?>

</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html><?php
?>