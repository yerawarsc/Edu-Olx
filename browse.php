<style type="text/css">html{background-color: transparent;}</style>
<?php
	require 'connect.inc.php';
	require 'core.inc.php';
	if(loggedin())
	{
	if(isset($_POST['category'])&&isset($_POST['title'])&&isset($_POST['price'])&&isset($_POST['ad_details'])) 
	{
		$category=$_POST['category'];$title=$_POST['title'];$owner=$_SESSION[ ' fname ' ] ;$email=$_SESSION['eid'];$contact_no=$_SESSION[  ' mob ' ];
		$price=$_POST['price'];
		$ad_details=$_POST['ad_details'];
		
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
						$type= $_FILES['img']['type'];
						$iname = $tim.".".$ext;	
						$ext2 = strtolower(substr($iname, strpos($iname , ' . ') + 1));
						if($ext2 == 'jpeg' && type=='image/jpeg')
						{
						$query1 = "INSERT INTO `ad`(`category`, `title`, `owner`, `email`, `contact_no`, `price`, `ad_details`, `img`) VALUES ( ' $category ',' $title ',' $owner ',' $email ',' $contact_no ',' $price ',' $ad_details ','$iname' )";
						if(move_uploaded_file($ftmp,"img/adimg/".$iname));
						}
						else
							echo "imp";
					
					}		
					else			
						$query1 = "INSERT INTO `ad`(`category`, `title`, `owner`, `email`, `contact_no`, `price`, `ad_details` ) VALUES ( ' $category ',' $title ',' $owner ',' $email ',' $contact_no ',' $price ',' $ad_details ' )";
			
			if( $query_run = mysqli_query($con,$query1) )
			{	

				if(!empty($ftname)&&!empty($isize)) move_uploaded_file($ftname,"/img/adimg/".$iname); 
				else 
					mysql_error();
				
				
?>
					<script type="text/javascript">
						alert("Succesfully Ad placed.");
					</script>
<?php		
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



<form action="placead.php" method="post" enctype="multipart/form-data">
<label>Category:</label>
 <select name="category">
  <option value="1st yr books">1st yr books</option>
  <option value="2nd yr books">2nd yr books</option>
  <option value="3rd yr books">3rd yr books</option>
  <option value="4th yr books">4th yr books</option>
</select><br><br>
 Select image to upload:
 <input type="file" name="img" ><br><br><br>
<label>Ad Title:</label><input type="text" name="title" required/><br><br>

<label>Item Price:</label><input type="text" name="price" required/><br><br><br>
<label>Ad Description:</label> <textarea name="ad_details" rows="5" cols="40" ></textarea> <br><br>
<input type="submit"  name="submit" value="submit"/>
<?php
}
else
 header('Location: login.php');
?>

