<?php

	session_cache_limiter('private, must-revalidate');
	session_cache_expire(60);
	?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Search Ad</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<style>.back{
	background-image: url("img/adimg/1459958074.jpg");
	background-size: cover;
	height: 580px;
     }
</style>
  </head>

  <body>
  
   <?php
	//include("searchad.htm");
	require 'img.inc.php';
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
					
					<li class="active"><a href="searchad.php"><span class="glyphicon glyphicon-search"></span> Search Ad</a></li>
				   
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
			
<div class="back"><br><br>
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">
  <center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:red;background-color:light-blue;"><h1>Search Ad</h1></div></center>  
  <form action="searchad.php" method="post" role="form"><label>Select Category:</label>
	 <select class="form-control" id="category" name="category">
	 <option>Select Category</option>
	  <option value="1st Year Books">1st Year IT Books</option>
          <option value="1st Year Books">1st Year CSE Books</option>
          <option value="1st Year Books">1st Year Civil Books</option> 
          <option value="1st Year Books">1st Year Mechanical Books</option>
          <option value="1st Year Books">1st Year Electronics Books</option>
          <option value="1st Year Books">1st Year Electrical Books</option>
	  
          <option value="2nd Year Books">2nd Year IT Books</option>
          <option value="2nd Year Books">2nd Year CSE Books</option>
          <option value="2nd Year Books">2nd Year Civil Books</option>
          <option value="2nd Year Books">2nd Year Mechanical Books</option>
          <option value="2nd Year Books">2nd Year Electronics Books</option>
          <option value="2nd Year Books">2nd Year Electrical Books</option>
	  
          <option value="3rd Year Books">3rd Year IT Books</option>
          <option value="3rd Year Books">3rd Year CSE Books</option>
          <option value="3rd Year Books">3rd Year Civil Books</option>
          <option value="3rd Year Books">3rd Year Mechanical Books</option>
          <option value="3rd Year Books">3rd Year Electronics Books</option>
          <option value="3rd Year Books">3rd Year Electrical Books</option>
	  
          <option value="4th Year Books">4th Year IT Books</option>
	  <option value="4th Year Books">4th Year CSE Books</option>
	  <option value="4th Year Books">4th Year Civil Books</option>
	  <option value="4th Year Books">4th Year Mechanical Books</option>
	  <option value="4th Year Books">4th Year Electronics Books</option>
	  <option value="4th Year Books">4th Year Electrical Books</option>
	  
          <option value="Electronic Gadgets">Electronic Gadgets</option>
	  <option value="Laptops">Laptops</option>
	  <option value="Smart Phones">Smart Phones</option>
	  <option value="Calculators">Calculators</option>
	  <option value="Other">Other</option> 
	</select><hr>
    <div class="form-group">
      <label for="title">Ad Title:</label>
      <input type="text" class="form-control" id="title" name="title"  >
    </div><hr>
    <div class="form-group">
      <label for="search_phrase">Search for Ads containing this word or phrase:</label>
      <input type="text" class="form-control" id="search" name="search" ><br><br>
	   <button type="submit" class="btn btn-primary">Search</button>
    </div>
	 </form></nav>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
<?php
	if(isset($_POST['category'])&&isset($_POST['search'])&&isset($_POST['title']))
	{
		$scat = $_POST['category'];$search = $_POST['search']; $title= $_POST['title'];
		if(!empty($scat)||!empty($search)||!empty($title))
		{
            $array=explode(" ",$title);
                        
            if(!strcmp($scat,"all categories"))
                $query= "SELECT category, title, owner, email, contact_no, price, ad_details,adid,img FROM ad WHERE title like ' %$array[0]%' OR '%$array[1]% ' OR '%$array[2]%'; ";
            else
				$query= "SELECT category, title, owner, email, contact_no, price, ad_details,adid,img FROM ad WHERE category like ' $scat ' AND  title like ' %$array[0]%' OR '%$array[1]% ' OR '%$array[2]%'; ";
			echo "<br>";
			if( $query_run = mysqli_query($con,$query) )	
			{
			
				$result = $con->query($query);	
				$cnt=0;
				if ($result->num_rows > 0) 
				{
				while($row = $result->fetch_assoc())
				{
				   $cnt=$cnt+1;
					?>
		 
				
			   
				<div class='col-md-4 '  style=' text-align : center;'>
				<a href="showad.php?adid= <?php echo $row["adid"]; ?>">
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
					alert("There were no listings found...");
				</script>
<?php			
		
			}

		}
		else
			echo "error";
		}
}
?>
