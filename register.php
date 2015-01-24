<?php
include('config/setup.php');
loggedinRedirect();
include('template/overall/header.php');

if (empty($_POST) === false) 
{
	$requiredFields = array('username', 'password', 'password_again', 'firstname', 'email');
	foreach($_POST as $key=>$value) 
	{
		if (empty($value) && in_array($key, $requiredFields) === true) 
		{
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true) 
	{
		if (userExists($dbConnection, $_POST['username']) === true) 
		{
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is already taken';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) 
		{
			$errors[] = 'Your username must not contain any spaces.';
		}
		if (strlen($_POST['password']) < 6) 
		{
			$errors[] = 'Your password must be at least 6 characters';
		}
		if ($_POST['password'] !== $_POST['password_again']) 
		{
			$errors[] = 'Your passwords do not match';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) 
		{
			$errors[] = 'A valid email address is required';
		}
		if (emailExists($dbConnection, $_POST['email']) === true) 
		{
			$errors[] = 'Sorry, the email \'' . $_POST['email'] . '\' is already in use';
		}
	}
}

?>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) 
{
	echo 'You\'ve been registered successfully! Please check your email to activate your account.';
} 
else 
{
	if (empty($_POST) === false && empty($errors) === true) 
	{
		$registerData = array(
			'username' 		=> $_POST['username'],
			'password' 		=> $_POST['password'],
			'firstname' 	=> $_POST['firstname'],
			'lastname' 		=> $_POST['lastname'],
			'email' 		=> $_POST['email']
		);
		
		register_user($dbConnection, $registerData);
		header('Location: register.php?success');
		exit();
		
	} 
	else if (empty($errors) === false) 
	{
		echo outputErrors($errors);
	}
?>

<?php include('template/registerform.php'); ?>

<?php 
}
include('template/overall/footer.php');
?>
