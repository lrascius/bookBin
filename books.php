<?php
include('config/setup.php');
include('template/overall/header.php');
?>
<?php 
if(isset($_GET['book']))
{
	$bookID = $_GET['book'];
	$query = "SELECT * FROM book WHERE book_id = '$bookID'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	echo '<div class="container"';
	echo '<h1 class="page-header">' . $data['title'] . '<small>' . $data['author'] . '</small></h1>'; 
	echo '<h1 class="page-header">' . $data['title'] . '<small> - ' . $data['author'] . '</small></h1>'; 
	echo '<img src="'. $data['image'] .'" class="img-responsive" id="image">';
	echo $data['description']; 
	echo '</div>';
}
?>
<?php include('template/sidebar.php'); ?>
<?php //include('template/carousel.php'); ?>
<?php (include 'template/overall/footer.php'); ?>