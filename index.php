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
			<?php include('template/navigation.php'); ?>
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-md-2 sidebar">
					<!--<h1><?php echo $page['header']; ?></h1>	-->
					<!--<?php echo $page['body_formatted']; ?> -->
						<ul class="nav nav-sidebar">
							<li class="labels"><label>Favorite</label></li>
				            <li class="active"><a href="#">Best Sellers<span class="sr-only">(current)</span></a></li>
				            <li><a href="#">New Releases</a></li>
				            <li><a href="#">Category2</a></li>
				            <li><a href="#">Category3</a></li>
			          	</ul>
			          	<ul class="nav nav-sidebar">
							<li class="labels"><label>Subject</label></li>
				            <li><a href="#">Category4</a></li>
				            <li><a href="#">Category5</a></li>
				            <li><a href="#">Category6</a></li>
				            <li><a href="#">Category7</a></li>
				            <li><a href="#">Category8</a></li>
			          	</ul>
				        <ul class="nav nav-sidebar">
							<li class="labels"><label>Filter</label></li>
				            <li><a href="#">Category9</a></li>
				            <li><a href="#">Category10</a></li>
				            <li><a href="#">Category11</a></li>
			            </ul>
					</div> <!-- END column sidebar -->
				
		  			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="bookCollumns">
          				<h1 class="page-header">Best Sellers</h1>
			          	<div class="row placeholders">
				            <div class="col-xs-6 col-sm-2 placeholder">
				              	<img src="images/book1.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              	<h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book2.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book3.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book4.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book5.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book6.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            
				            <div class="col-xs-6 col-sm-2 placeholder">
				              	<img src="images/book7.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              	<h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book8.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book9.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book10.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book1.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            <div class="col-xs-6 col-sm-2 placeholder">
				              <img src="images/book2.jpg" class="img-responsive" alt="Generic placeholder thumbnail">
				              <h4>Title</h4>
				              <span class="text-muted">Author</span>
				            </div>
				            
			          </div>
       			 </div>
       			</div>
			</div> <!-- END container -->
			<?php include('template/carousel.php'); ?>
		</div> <!-- END Wrap -->
			<?php include('template/footer.php'); ?>		
	</body>
	<?php if($debug == 1) { ?> <?php include('widgets/debug.php'); } ?>

</html>