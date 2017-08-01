<?php
require 'class-Clockwork.php';
$API_KEY="34a25215f9a86bcd7e26d815c39c9618faff723c";
$clockwork = new Clockwork( $API_KEY );
$message = array( 'to' => '+919421952558', 'message' => 'This is a test!' );
$result = $clockwork->send( $message );

?>