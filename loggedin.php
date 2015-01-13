<?php include ('config/setup.php'); ?>

<!DOCTYPE html>

<html>
	<head>
	
		<title>
			LOGGED IN
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<?php include ('config/css.php'); ?>
		<?php include ('config/js.php'); ?>		
		
	</head>
	
	<body>
		<div id="wrap">		
			<?php include('template/navigation.php'); ?>
			<div class="container">
				
				<h1><?php echo $page['header']; ?></h1>	
				<?php echo $page['body_formatted']; ?>
										
			</div>
			<?php include('template/carousel.php'); ?>

		</div> <!-- END Wrap -->
			<?php include('template/footer.php'); ?>		
	</body>
	<?php if($debug == 1) { ?> <?php include('widgets/debug.php'); } ?>

</html>