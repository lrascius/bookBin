<?php
if($_POST)
{
	$errors = FALSE;
	$required_fields = array('firstname','lastname','email','username','password','password_again');
	foreach($_POST as $key => $value)
	{
		if(empty($value) && in_array($key, $required_fields) == TRUE)
		{
			$errors = TRUE;
			include('alerts/emptyFields.php');
			break 1;
		}
	}
	if(user_exists($dbConnection, $_POST['username']))
	{
		$errors = TRUE;
		include('alerts/userExists.php');
	}
	if(strlen($_POST['password']) <= 7)
	{
		$errors = TRUE;
		include('alerts/passLength.php');
	}
	if($_POST['password'] != $_POST['password_again'])
	{
		$errors = TRUE;
		include('alerts/passnotEqual.php');
	}
	if(preg_match("/\\s/", $_POST['username']))
	{
		$errors = TRUE;
		include('alerts/userSpace.php');
	}
	if($errors == FALSE)
	{
		$registerData = array('firstname' => $_POST['firstname'],
							  'lastname'  => $_POST['lastname'],
							  'email'     => $_POST['email'],
							  'password'  => $_POST['password']);
	}
	register_user($dbConnection, $registerData);
}

?>
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
						<form action="register.php" method="post" role="form">
						  <div class="form-group">
						    <label for="firstname">First Name</label>
						    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
						  </div>
						  <div class="form-group">
						    <label for="lastname">Last Name</label>
						    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
						  </div>
						  <div class="form-group">
						 	<label for="email">Email address</label>
						    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="username">Username</label>
						    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
						  </div>
						  <div class="form-group">
						    <label for="password">Password</label>
						    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="password">Re-Enter Password</label>
						    <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Password">
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div><!-- END panel-body -->
				</div><!-- END panel -->				
			</div><!-- END col -->							
		</div><!-- END row -->
	</div><!-- END container -->
</div><!-- END Wrap -->