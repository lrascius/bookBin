<?php
/* Function that gets the navigation items except the login dropdown
 * The active page is set based on the page_id passed to the function */
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


