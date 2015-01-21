<?php
	session_start();
	//error_reporting(0);
	require('debug/ChromePhp.php');	
	require('config/connection.php');
	require('functions/general.php');
	require('functions/users.php');
	require('functions/books.php');

	/* Houses all the errors */
	$errors = array();
?>