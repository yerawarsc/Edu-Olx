<?php

	require 'connect.inc.php';
	require 'core.inc.php';	

	$category;$title;$contact_no;$price;$ad_details;$adid;
	if(isset($_GET['adid']))
	{
		$id=$_GET['adid'];
		if(!empty($id))
		{
		
			$query="SELECT  `email` FROM `ad` WHERE  `adid` =' ".$id." '  ";
		
			if( $query_run = mysqli_query($con,$query) )	
			{
		
					$result = $con->query($query);	
					if ($result->num_rows > 0) 
					{
							while($row = $result->fetch_assoc())
							{
								$eid=$row['email'];
								echo $eid."=".$_SESSION['eid'];
								if(($eid = $_SESSION['eid']))
								{
									$delquery="DELETE FROM `ad` WHERE `adid` ='".$id."' ";
									if(mysqli_query($con,$delquery))
									{
?>
											<script type="text/javascript">
												alert("Successfully Ad Deleted..");	
											</script>
<?php
										header( "refresh:0.3; url=home.php" );													
									}
								}
								else
									echo "sada";
								
							}
					}
			}
			
		}
	}


?>

<form action="delad.php" method="post">
</form>
