<!-- Navigation at the top of the page -->
<nav class="navbar navbar-default" role="navigation">
	<!-- Debug button that is set in the database if enabled -->
	<?php //if($debug == 1) { ?>
	<button id="btn-debug" class = btn btn-default> <i class="fa fa-bug"></i> </button>
	<?//php } ?>
	<div class="container">
		<ul class="nav navbar-nav"> 
			<?php 
				navigation_main($dbConnection, $page_id);					
			?>
		</ul>
		<?php
		if(logged_in() == true)
			include('template/dropdownLoggedIn.php');
		else 
			include('template/dropdownLoggedOut.php');
		?>

	</div>
</nav> <!-- END nav Main Navigation -->


<!-- Stop the navigation drop down from closing upon a click -->
<script type="text/javascript">
    $('.dropdown-menu input, .dropdown-menu label').click(function(e) {
        e.stopPropagation();
    });
</script>