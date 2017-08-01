<?php

	session_start();
	
	function loggedin()
	{
		if( isset($_SESSION[ ' id ' ] ) )
		return true;
	
		return false;
	}
?>