<?php

function logged_in()
{
	return (isset($_SESSION['username'])) ? true : false;	
	echo "herraras";
}

?>