<div id="wrap">		
	<?php include('template/navigation.php'); ?>
	<div class="container">
		<h2> Register </h2>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong> Information </strong>
					</div><!-- END panel-heading -->
					<div class="panel-body">		
						<form action="login.php" method="post" role="form">
						  <div class="form-group">
						    <label for="firstname">First Name</label>
						    <input type="input" class="form-control" id="firstname" name="firstname" placeholder="First Name">
						  </div>
						  <div class="form-group">
						    <label for="lastname">Last Name</label>
						    <input type="item" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
						  </div>
						  <div class="form-group">
						 	<label for="email">Email address</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="password">Re-Enter Password</label>
						    <input type="password" class="form-control" id="reenter" name="reenter" placeholder="Password">
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!-- END panel-body -->
				</div><!-- END panel -->				
			</div><!-- END col -->							
		</div><!-- END row -->
	</div><!-- END container -->
</div><!-- END Wrap -->