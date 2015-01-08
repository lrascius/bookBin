<?php include ('config/setup.php'); ?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>
			<?php echo $page['title'].' | '.$site_title; ?>
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
						<!-- If the page is set make the class active -->
						<li<?php if($page_id == 1) echo ' class="active"'; ?>>
							<a href="?page=1">Home</a></li>
						<!-- If the page is set make the class active -->
						<li<?php if($page_id == 2) echo ' class="active"'; ?>>
							<a href="?page=2">Books</a></li>
						<!-- If the page is set make the class active -->						
						<li>
							<a href="#">Other</a>
						</li>
						<!-- If the page is set make the class active -->
						<li>
							<a href="#">Other2</a>
						</li>	
					</ul>
				</div>
			</nav> <!-- END nav Main Navigation -->
	
			<div class="container">
				
				<h1><?php echo $page['header']; ?></h1>	
				<p><?php echo $page['body']; ?></p>
							
			</div>
		</div> <!-- END Wrap -->
		
		<footer id="footer">
			<div class="container">
				<p> Footer </p>
			</div>
		</footer> <!-- END Footer -->

	</body>

</html>