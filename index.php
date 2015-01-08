<?php include ('config/setup.php'); ?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>
			<?php echo $page_title.' | '.$site_title; ?>
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>		
		
	</head>
	
	<body>
		<div id="wrap">		
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<ul class="nav navbar-nav"> 
						<li class="active">
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="#">FAQ</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>	
					</ul>
				</div>
			</nav> <!-- END nav Main Navigation -->
	
			<div class="container">
				
				<h1> Content Area </h1>	
							
			</div>
		</div> <!-- END Wrap -->
		
		<footer id="footer">
			<div class="container">
				<p> Footer </p>
			</div>
		</footer> <!-- END Footer -->

	</body>

</html>