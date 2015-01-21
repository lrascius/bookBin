<?php

function bookPlaceholder($title, $author, $image)
{
	echo '<div class="col-xs-6 col-sm-2 placeholder">';
	echo '<img src="'. $image .'" class="img-responsive" alt="Generic placeholder thumbnail">';
	echo '<h4>'. $title .'</h4>';
	echo '<span class="text-muted">' . $author . '</span>';
	echo '</div>';
}

function addBook($dbConnection, $sell_data)
{
	array_walk($sell_data, 'array_sanitize');
	$fields = '`' . implode('`, `', array_keys($sell_data)) . '`';
	$data = '\'' . implode('\', \'', $sell_data) . '\'';
	
	$query = "INSERT INTO `book` ($fields) VALUES ($data)";

	mysqli_query($dbConnection, $query);
}
?>