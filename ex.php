<?php
if(isset($_GET['ex']))
{
	$val=$_GET['ex'];
	echo $val;
}



?>
<form action= "ex.php" method="get">
<input type="text" name="ex" value=" ">
</form>