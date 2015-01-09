<?php

function navigation_main($dbConnection, $page_id)
{
	$query = "SELECT * FROM pages";
	$result = mysqli_query($dbConnection, $query);

	while ($nav = mysqli_fetch_assoc($result)) 
	{	
		?>
		<li<?php if($page_id == $nav['id']) echo ' class="active"'; ?>><a href="?page=<?php echo $nav['id']; ?>"> <?php echo $nav['label'] ?></a></li>
		<?php 
	}
}

?>


