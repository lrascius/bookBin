<!-- Navigation at the top of the page -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<ul class="nav navbar-nav"> 
			<li><a href="index.php">Home</a></li>
			<li><a href="books.php">Books</a></li>
		</ul>
<?php
if(logged_in())
	include('template/dropdownLoggedIn.php');
else
	include('template/dropdownLoggedOut.php');
?> 
	</div>
</nav> <!-- END nav Main Navigation -->
