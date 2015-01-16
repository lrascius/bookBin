<?php
function arraySanitize(&$item)
{
	$item = mysql_real_escape_string($item); 
}   

?>