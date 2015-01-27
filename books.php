<?php
include('config/setup.php');
include('template/overall/header.php');
?>
<?php include('template/sidebar.php'); ?>
<?php 
if(isset($_GET['book']))
{
	$bookID = $_GET['book'];
	$query = "SELECT * FROM book WHERE book_id = '$bookID'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	echo '<div class="container"';
	echo '<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">'; 
	echo '<h1 class="page-header">' . $data['title'] . '<small> - ' . $data['author'] . '</small></h1>'; 
	echo '<img src="'. $data['image'] .'" class="img-responsive" id="imageInd">';
	echo '<div class="col-xs-6 col-lg-6 id="description">';
	echo '<h2> Description </h2>';
	echo '<p>' . $data['description'] . '</p>'; 
	echo '</div>';
	echo '</div>';
	echo '</div>';
}
?>
<?php //include('template/carousel.php'); ?>
<?php (include 'template/overall/footer.php'); ?>