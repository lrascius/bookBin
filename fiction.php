<?php
include('config/setup.php');
include('template/overall/header.php');
?>
<?php include('template/sidebar.php'); ?>
<?php 
$category = 'Fiction';
include('template/books.php'); ?>
<?php include('template/carousel.php'); ?>
<?php (include 'template/overall/footer.php'); ?>