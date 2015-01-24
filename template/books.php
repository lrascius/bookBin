<div class="container">
	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="bookCollumns">
		<h1 class="page-header"><?php echo $category ?></h1>
	  	<div class="row placeholders">
<?php 
bookPlaceholder($dbConnection, $category);
?>
	  	</div>
	</div>
</div>