<?php
/* Setup File */

/* Database Connection */
include('../config/connection.php');

/* Constants */
DEFINE('D_TEMPLATE', 'template');

/* Functions */
include('functions/data.php');
include('functions/template.php');

/* Site Setup */
$debug = data_setting($dbConnection, 'debug-status');


$site_title = 'bookBin: Online Bookstore';
$page_title = 'Home Page';

/* Check if page_id exists */
if (isset($_GET['page'])) 
	$page_id = $_GET['page'];	
/* Initialize the page_id to 1 */	
else 
	$page_id = 1;


/* Page information */
$page = data_page($dbConnection,$page_id);
	


?>