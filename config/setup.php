<?php
	session_start();
	//error_reporting(0);
	require('debug/ChromePhp.php');	
	require('config/connection.php');
	require('functions/general.php');
	require('functions/users.php');
	require('functions/books.php');

	/* All errors */
	$errors = array();
?>