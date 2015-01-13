<!-- Navigation at the top of the page -->
<nav class="navbar navbar-default" role="navigation">
	<!-- Debug button that is set in the database if enabled -->
	<?php if($debug == 1) { ?>
	<button id="btn-debug" class = btn btn-default> <i class="fa fa-bug"></i> </button>
	<?php } ?>
	<div class="container">
		<ul class="nav navbar-nav"> 
			<?php 
				navigation_main($dbConnection, $page_id);					
			?>
			<?php
			if(logged_in() == true)			
				echo "<li><a href='logout.php'> Logout </a> </li>";
			else 
				echo "Not Logged in!"
			?>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<form action="index.php" method="post" role="form">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username">
						</div>
						<div class="input-group">
							<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password">
						</div>
						<button type="submit" class="btn btn-default">
	  						<!--<span class="glyphicon glyphicon-star" aria-hidden="true"></span> --> Submit
						</button>
					</form>
				</ul>
			</li>
		</ul>
	</div>
</nav> <!-- END nav Main Navigation -->


<!-- Stop the navigation drop down from closing upon a click -->
<script type="text/javascript">
    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
</script>