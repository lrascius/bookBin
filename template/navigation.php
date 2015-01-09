<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav"> 
			<?php 
				navigation_main($dbConnection, $page_id);					
			?>

			<!-- If it is the current page is set make the class active -->						
			<li><a href="#">Other</a></li>
			<!-- If it is the current page is set make the class active -->
			<li><a href="#">Other2</a></li>	
		</ul>
	</div>
</nav> <!-- END nav Main Navigation -->