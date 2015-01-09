<?php 

function data_page($dbConnection,$page_id)
{
	$query = "SELECT * FROM pages WHERE id = $page_id";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);	
	return $data;
}



?>