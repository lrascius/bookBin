<?php
	session_start();
	//error_reporting(0);
	
	require('config/connection.php');
	require('functions/general.php');
	require('functions/users.php');

	/* Houses all the errors */
	$errors = array();
?>