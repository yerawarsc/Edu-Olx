<?php

	$host = "mysql.hostinger.in";
	$user = "u375819418_user";
	$pass ="unicorn12345";
	$db = "u375819418_olx";
	
	$con = mysqli_connect($host,$user,$pass,$db);
	
	if( mysqli_connect_errno())
	{
		echo " Fatal error ocurred please report it to us at rlbagad2@gmail.com . Thank you ";
		die();
	}
?>