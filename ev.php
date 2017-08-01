<?php
	require 'connect.inc.php';
	require 'core.inc.php';	
	if(isset($_GET['eid'])&&isset($_GET['vcode']))
	{
		        $eid=$_GET['eid'];$vcode=$_GET['vcode'];
		
		
			$query="SELECT  `vcode` FROM `users` WHERE  `eid` =' ".$eid." '  ";
		
			if( $query_run = mysqli_query($con,$query) )	
			{
		
					$result = $con->query($query);	
					if ($result->num_rows > 0) 
					{
							while($row = $result->fetch_assoc())
							{
									$code=$row['vcode']	;
									if($code==$vcode)
									{
										$query1="UPDATE `users` SET `status`= 1 WHERE `eid` = ' ".$eid." ' ";
										if(mysqli_query($con,$query1))
                                                                                {

											?>
					                                                  <script type="text/javascript">
						                                          alert("You are successfully regisered.Login & enjoy..");
						
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


?>
<form action="ev.php?eid=<?php echo $_GET['eid'];?>&vcode=<?php echo $_GET['vcode'];?>" method="post" ></form>
			