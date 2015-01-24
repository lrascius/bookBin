<?php
include('config/setup.php');
loggedinRedirect();
// Check if the POST array is not empty
if (empty($_POST) === false) {
// 	The username and password entered 
	$username = $_POST['username'];
	$password = $_POST['password'];
// 	Check if the username or password are empty
	if (empty($username) === true || empty($password) === true) 
	{
		$errors[] = 'You need to enter a username and password';
	}
// Check if the user exists in the database
	else if (userExists($dbConnection, $username) === false) 
	{
		$errors[] = 'We can\'t find that username. Have you registered?';
	} 
// Check if the user has activated its account
	else if (userActive($dbConnection, $username) === false) 
	{
		$errors[] = 'You haven\'t activated your account!';
	} 
	else 
	{
		
		if (strlen($password) > 32) 
		{
			$errors[] = 'Password too long';
		}
		
		$login = login($dbConnection, $username, $password);
		if ($login === false) 
		{
			$errors[] = 'That username/password combination is incorrect';
		} 
		else 
		{
// 			Set the user session
			//$_SESSION['user_id'] = $login;
			$_SESSION['user_id'] = getUserID($dbConnection,$username);
// 			Redirect the user to home
			header('Location: index.php');
			exit();
		}
	}
} 
else 
{
	$errors[] = 'No data received';
}
include('template/overall/header.php');

if (empty($errors) === false) 
{
?>
	<h2>We tried to log you in, but...</h2>
<?php
	echo outputErrors($errors);
}
include('template/overall/footer.php');
?>