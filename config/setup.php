<?php
/* Setup File */

/* Database Connection */
$dbConnection = mysqli_connect('localhost', 'lukas', 'Lietuva1', 'bookBin') OR die('Error: '.mysqli_connect_error());

$site_title = 'bookBin: Online Bookstore';
$page_title = 'Home Page';

/* Check if page_id exists */
if (isset($_GET['page'])) 
	$page_id = $_GET['page'];	
/* Initialize the page_id to 1 */	
else 
	$page_id = 1;


/* Page information */
$query = "SELECT * FROM pages WHERE id = $page_id";
$result = mysqli_query($dbConnection, $query);
$page = mysqli_fetch_assoc($result);
	
?>