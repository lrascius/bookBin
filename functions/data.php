<?php 

/* Function that returns the value of a settings given the settings id */
function data_setting($dbConnection, $id)
{
	$query = "SELECT * FROM settings WHERE id = '$id'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return $data['value'];
	
}

/* Function that returns an array for the data of the page given the page id
 * The function also checks if the html tags are presents for the body and 
 * adds them if they are not */
function data_page($dbConnection,$id)
{
	$query = "SELECT * FROM pages WHERE id = '$id'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	$data['body_nohtml'] = strip_tags($data['body']);
	if($data['body'] == $data['body_nohtml'])
		$data['body_formatted'] = '<p>'.$data['body'].'</p>';	
	else
		$data['body_formatted'] = $data['body'];
	
	return $data;
}



?>