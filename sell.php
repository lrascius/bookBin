<?php
include('config/setup.php');

if(empty($_POST) == FALSE)
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	if (empty($title) == true || empty($author) == true || empty($description) == true || empty($price)) 
	{
		$errors[] = 'You must fill out all the required fields!';
	}
	else 
	{
		$sell_data = array(
			'title' 		=> $_POST['title'],
			'author' 		=> $_POST['author'],
			'description' 	=> $_POST['description'],
			'price' 		=> $_POST['price']
		);
		addBook($dbConnection, $sell_data);	
	}
}

if (empty($errors) === false) 
{
?>
	<h2>We tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
?>

<?php 
include('template/overall/header.php');
include('template/sellForm.php');
include('template/overall/footer.php'); 
?>