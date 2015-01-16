<?php

function createBook($title, $author, $image)
{
	echo '<div class="col-xs-6 col-sm-2 placeholder">';
	echo '<img src="'. $image .'" class="img-responsive" alt="Generic placeholder thumbnail">';
	echo '<h4>'. $title .'</h4>';
	echo '<span class="text-muted">' . $author . '</span>';
	echo '</div>';
}

?>