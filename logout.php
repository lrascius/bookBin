<?php
/* Start Session */
session_start();
/* Delete username key */
unset($_SESSION['username']);

/* Delete every key */
//session_destroy();
/* Redirect to index.php */
header('Location: index.php')

?>