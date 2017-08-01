<?php

    require 'connect.inc.php';
	require 'core.inc.php';
	$adid=$_GET['adid'];
	if(isset($adid))
	{
		if(!empty($adid))
		{
		     $query="SELECT `time` FROM `ad` WHERE `adid`=$adid";
	         if( $query_run = mysqli_query($con,$query) )	
	        {
				$result = $con->query($query);
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc())
					{			 
						if($row['time']-time()<=500)
						{
						     $t=time();
						     $query1="UPDATE `ad` SET `time`= $t";
							 if(mysqli_query($con,$query1))
							 {
?>
							<script type="text/javascript">
							alert(" Your Ad has been renewed successfully....");	
							</script>
<?php
							header( "refresh:0.3; url=home.php" );		
							}
						
						}
					}
				}
			}
		}
    }
?>
<form action="renewad.php" method="post"></form>