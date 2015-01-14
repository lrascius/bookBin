<?php
session_start();
/* Turn off error reporting */
//error_reporting(0);

/* Setup File */
/* Including the Database connection */
include('connection.php');
include('functions/general.php');
include('functions/users.php');

if($_POST)
{
	$query = "SELECT * FROM users WHERE username = '$_POST[username]' AND password = SHA1('$_POST[password]')";
	$result = mysqli_query($dbConnection, $query);
	
	if(mysqli_num_rows($result) == 1)
	{
		$_SESSION['username'] = $_POST['username'];
		header("Location: index.php");
	}
	else 
	{
		include("alerts/failedLogin.php");
	}
		
}


/* Including Functions */
include('functions/data.php');
include('functions/template.php');

/* Site Setup: Checks whether to enable the debug mode */
$debug = data_setting($dbConnection, 'debug-status');


$site_title = 'bookBin: Online Bookstore';
$page_title = 'Home Page';

/* Check if page_id exists */
if (isset($_GET['page'])) 
	$page_id = $_GET['page'];	
/* Initialize the page_id to 1 */	
else 
	$page_id = 1;

/* Load page information such as heading and body */
$page = data_page($dbConnection,$page_id);
	
?>