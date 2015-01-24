<?php
function loggedinRedirect() 
{
	if (loggedIn() === true) 
	{
		header('Location: index.php');
		exit();
	}
}

// function protect_page() 
// {
	// if (logged_in() === false) 
	// {
		// header('Location: protected.php');
		// exit();
	// }
// }

function arraySanitize(&$item) 
{
	$item = htmlentities(strip_tags(mysql_real_escape_string($item)));
}
// Removes any html tags 
function sanitize($data) 
{
	return htmlentities(strip_tags(mysql_real_escape_string($data)));
}

function outputErrors($errors) 
{
	return '<ul><li>' . implode('</li><li>', $errors) . '</li></ul>';
}
?>