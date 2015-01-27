<?php

function bookPlaceholder($dbConnection, $category)
{
	$query = "SELECT title, author, image, book_id FROM book WHERE category = '$category'";
	
	$result = mysqli_query($dbConnection, $query);
    while($row = $result->fetch_assoc()) 
    {
    	$title = $row['title'];
		if(strlen($title) > 10)
			$title = substr($title, 0, -(strlen($title)) + 10) . '...'; 
    	$author = $row['author'];
		if(strlen($author) > 10)
			$author = substr($author, 0, -(strlen($author)) + 10) . '...'; 	
		
		echo '<div class="col-xs-6 col-sm-2 placeholder">';
		echo '<a href="books.php?book=' . $row['book_id'] . '"><img src="'. $row['image'] .'" class="img-responsive" alt="Generic placeholder thumbnail" id="image"></a>';
		echo '<h6>'. $title .'</h6>';
		echo '<span class="text-muted"><h6>' . $author . '</h6></span>';
		echo '</div>';
    }
}

function addBook($dbConnection, $sellData)
{
	array_walk($sellData, 'arraySanitize');
	$fields = '`' . implode('`, `', array_keys($sellData)) . '`';
	$data = '\'' . implode('\', \'', $sellData) . '\'';
	
	$query = "INSERT INTO `book` ($fields) VALUES ($data)";

	mysqli_query($dbConnection, $query);
}
?>