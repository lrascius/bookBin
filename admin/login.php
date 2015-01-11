<?php
/* Database Connection */
include('../config/connection.php');
?>
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
			<?php //include(D_TEMPLATE.'/navigation.php'); ?>
			
			<h1>Login</h1>
			
		</div> <!-- END Wrap -->
			<?php include(D_TEMPLATE.'/footer.php'); ?>		
	</body>
	<?php /*if($debug == 1) { ?> <?php include('widgets/debug.php'); } */?>
</html>