<?php 
if($_POST)
{
	if(isset($_FILES['bookImage']) == true)
		echo "wow";
	
}

?>

<div id="wrap">		
	<?php include('template/navigation.php'); ?>
	<div class="container">
		<h2> Sell Book </h2>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong> Information </strong>
					</div><!-- END panel-heading -->
					<div class="panel-body">		
						<form action="sell.php" method="post" role="form">
						  <div class="form-group">
						    <label for="firstname">Title</label>
						    <input type="text" class="form-control" id="title" name="title" placeholder="First Name">
						  </div>
						  <div class="form-group">
						    <label for="author">Author</label>
						    <input type="text" class="form-control" id="author" name="author" placeholder="Author">
						  </div>
						  <div class="form-group">
						 	<label for="description">Description</label>
						    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
						  </div>
						  <div class="form-group">
						    <label for="price">Price</label>
						    <input type="number" class="form-control" id="price" name="price" placeholder="Price">
						  </div>
						  		<label for="image">Image</label>
								<div class="form-group" data-provides="fileinput">
									<input type="file" name="bookImage"> </input>
				  					<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file"></i> 
									</div>
								</div>
						  <div>
						  	<button type="submit" class="btn btn-default">Submit</button>
						  </div>
						</form>
					</div><!-- END panel-body -->
				</div><!-- END panel -->				
			</div><!-- END col -->							
		</div><!-- END row -->
	</div><!-- END container -->
</div><!-- END Wrap -->