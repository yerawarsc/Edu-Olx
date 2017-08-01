<?php

	require 'connect.inc.php';
	require 'core.inc.php';	
	
	$category;$title;$contact_no;$price;$ad_details;$adid;
	if(isset($_GET['adid'])&&loggedin())
	{
	
		if(!empty($_GET['adid']))
		{
			global $adid;$adid=$_GET['adid'];
		
			$query="SELECT category, title, owner, email, contact_no,adid, price, ad_details FROM `ad` WHERE  `adid` ='".$adid."'  ";
			
			if( $query_run = mysqli_query($con,$query) )	
			{
		
			$result = $con->query($query);	
			if ($result->num_rows > 0) 
			{
					while($row = $result->fetch_assoc())
					{
						global $category;$category=$row['category'];global $title;$title=$row['title'];global $contact_no;$contact_no=$row['contact_no'];global $price;$price=$row['price'];global $ad_details;$ad_details=$row['ad_details'];					
					}
					global $adid;$adid=$_GET['adid'];
				
					
					if(isset($_POST['submit']))
					{
						global $category;global $title;global $contact_no;global $price;global $ad_details;
						
						if(isset($_POST['category'])&&isset($_POST['title'])&&isset($_POST['contact_no'])&&isset($_POST['price'])&&isset($_POST['ad_details']))
						{						
							
							global $category;global $title;global $contact_no;global $price;global $ad_details;
							if(!empty($_POST['category'])&&!empty($_POST['title'])&&!empty($_POST['contact_no'])&&!empty($_POST['price'])&&!empty($_POST['ad_details']))
							{
								global $category;global $title;global $contact_no;global $price;global $ad_details;
								$category=$_POST['category'];$title=$_POST['title'];$price=$_POST['price'];$contact_no=$_POST['contact_no'];$ad_details=$_POST['ad_details'];
								$query = " UPDATE `ad` SET `category` = ' ".$category." ',`title`= ' ".$title." ',`contact_no` = ' ".$contact_no." ',`price` = ' ".$price." ',`ad_details` = ' ".$ad_details." ' WHERE  `adid` = '".$adid."'  ";
								
								if (mysqli_query($con, $query)) 
								{							
?>
								<script type="text/javascript">
									alert("Successfully Ad Edited..");	
								</script>
<?php
								header( "refresh:0.3; url=myads.php" );
								}
								
								
							}
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
		<title>Edit Ad</title>
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
	height: 900px;
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
<div class="back">

<br><br><br><br>
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">

	  <center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:red;background-color:light-blue;"><h1>Edit Ad</h1></div></center>
         <form action="editad.php?adid=<?php global $adid;echo $adid;?>" method="post"><br><br><label>Select Category:</label>
	 <select class="form-control" id="category" name="category">
          <option >Select Category</option>
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
	</select>
	  
		 <div class="form-group">
		<label for="title">Ad Title:</label>
		  <input type="text" class="form-control" id="title" name="title" value="<?php global $title; echo $title;?>">
		</div>
		<div class="form-group">
		  <label for="price">Item Price:</label>
		  <input type="text" class="form-control" id="price" name="price"  value="<?php global $price;echo $price;?>">
		</div><br>
		<div class="form-group">
		  <label for="contact">Contact No:</label>
		  <input type="text" class="form-control" id="contact_no" name="contact_no"  value="<?php global $contact_no;echo $contact_no ;?>">
		</div><br>
		<div class="form-group">
		  <label for="ad_details">Ad Details:</label>
		  <textarea name="ad_details" rows="5" cols="40" class="form-control" id="ad_details" > <?php global $ad_details;echo $ad_details;?></textarea>
		</div>
	  <br><br>
	  
		<button type="submit" class="btn btn-primary" id="submit" name="submit" >Save Changes</button>
		<a href="delad.php?adid=<?php echo $adid;?>" class="btn btn-info btn-md">
								<span class="glyphicon glyphicon"></span> Delete Ad 
	</a>

		  </form>
	</div></div></div></div></div></nav>
	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	  </body>
	</html>

	<?php
		}
}
}

?>


