<?php
    require 'connect.inc.php';
    require 'core.inc.php';
    $t=time();
    $query="SELECT `email`,`adid` FROM `ad` WHERE $t-`time`>2160000 AND $t-`time`<2198400";
	if( $query_run = mysqli_query($con,$query) )	
	{
	     
	    $result = $con->query($query);	
		if ($result->num_rows > 0) 
		{
				while($row = $result->fetch_assoc())
				{
				        $id=$row['adid'];
					$to=$row['email'];
					$headers="From: rlbagad2@gmail.com";
					$body="Your Ad is going to expire in next 5 days. If you want to keep it ,renew your Ad using following link  "."http://eduolx.890m.com/renewad.php?adid=$id";
					$subject="Renew your Ad on Edu-OLX";
				        mail($to,$subject,$body,$headers);
					
				}
		}
		else
		{
		      $query1="DELETE FROM `ad` WHERE $t-`time`>2592000";
			  mysqli_query($con,$query1);
		  }
	}
	

?>
<form action="cron.php" method="post"></form>