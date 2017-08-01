<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Place ad</title>
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
					<li><a href="home.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<?php if(loggedin())
					{?>
					<li class="active"><a href="placead.php"><span class="glyphicon glyphicon-plus-sign"></span> place ad</a></li>
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

<br><br>
<div class="container">
<div class="container" > 
<div class="row"> 
<div class="col-sm-6 col-md-6 col-md-offset-3"> 
<div class="panel panel-primary">
<div class="panel panel-body">



<?php
	if(loggedin())
	{
	if(isset($_POST['category'])&&isset($_POST['title'])&&isset($_POST['price'])&&isset($_POST['ad_details'])) 
	{
		$category=$_POST['category'];$title=$_POST['title'];$owner=$_SESSION[ ' fname ' ].' '.$_SESSION[ ' lname ' ] ;$email=$_SESSION['eid'];$contact_no=$_SESSION[  ' mob ' ];
		$price=$_POST['price'];
		$ad_details=$_POST['ad_details'];
		$aduid=$_SESSION[ ' id ' ];
		
		if(isset($_FILES['img']))
	        {
			$fname = $_FILES['img']['name'];
			$ext = @strtolower(  end ( explode( '.', $fname) ) );
			$ftmp = $_FILES['img']['tmp_name'];
		}
		
		if(!empty($category)&&!empty($title)&&!empty($owner)&&!empty($email)&&!empty($contact_no)&&!empty($price)&&!empty($ad_details))
		{
					if(!empty($fname))
					{		
						
						$tim = time();
						$iname = $tim.".".$ext;						
						$query1 = "INSERT INTO `ad`(`category`, `title`, `owner`, `email`, `contact_no`, `price`, `ad_details`, `img`,`aduid`,`time`) VALUES ( ' $category ',' $title ',' $owner ',' $email ',' $contact_no ',' $price ',' $ad_details ','$iname' ,'$aduid','$tim')";
						$path="img/adimg/".$iname;
                                                if(move_uploaded_file($ftmp,$path));
                                                
					
					}		
					else		
					{
					
						$tim = time();
						$defimg="ni.jpg";
						$query1 = "INSERT INTO `ad`(`category`, `title`, `owner`, `email`, `contact_no`, `price`, `ad_details`,`img`,`aduid`,`time`) VALUES ( ' $category ',' $title ',' $owner ',' $email ',' $contact_no ',' $price ',' $ad_details ' ,'$defimg','$aduid','$tim')";
					}
			if( $query_run = mysqli_query($con,$query1) )
			{	

				if(!empty($ftname)&&!empty($isize)) move_uploaded_file($ftname,"/img/adimg/".$iname); else mysql_error();
				
?>
					<script type="text/javascript">
						alert("Successfully Ad Placed..");	
					</script>
<?php
                $to=$email;
		$headers="From: eduolx96@gmail.com";
		$body="Thank you for placing your Ad.Your Ad will expire after 30 days from today.After 25 days you'll get a link using which you can renew your ad and extend ad expiry by 30 days.         Thanking you" ;
		$subject="Ad Successfully Placed";
	        mail($to,$subject,$body,$headers);
					
		header( "refresh:1; url=myads.php" );
			}
			else
			{
?>
			<script type="text/javascript">
				alert("Sorry an error Ocurred . Try again later");
			</script>
<?php			
			echo mysqli_error($con);
			
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
?>



<?php
}
else
 header('Location: login.php');?>
 
    
	  <center><div class="col-xs-12" style="font-family:'Lobster' ,cursive;color:red;background-color:light-blue;"><h1>Place Ad</h1></div></center>
        <form action="placead.php" method="post" enctype="multipart/form-data" role="form" >
	<label>Select Category:</label>
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
	</select>
	 <div class="form-group">
	<label for="title">Ad Title:</label>
      <input type="text" class="form-control" id="title" name="title" >
    </div>
	 <h5><b>Select image to upload:</h5>
 <input type="file" name="img" >
    <div class="form-group">
      <label for="price">Item Price:</label>
      <input type="text" class="form-control" id="price" name="price" >
    </div>
	<div class="form-group">
      <label for="ad_details">Ad Details:</label>
      <textarea name="ad_details" rows="5" cols="40" class="form-control" id="ad_details"  ></textarea>
    </div>
  
  
    <button type="submit" class="btn btn-primary">Place Ad</button>
  </form>
</div></div></div></div></div></div></nav>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html><?php
?>

