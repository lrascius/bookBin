<?php 
$error = 'Sorry, unable to connect to the database';
/* Database Connection */
$dbConnection = mysqli_connect('localhost', 'lukas', 'Lietuva1', 'bookBin2') OR die($error);
?>