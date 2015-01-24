<?php

function registerUser($dbConnection, $register_data) 
{
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = SHA1($register_data['password']);
	
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	$query = "INSERT INTO `users` ($fields) VALUES ($data)";
	mysqli_query($dbConnection, $query);
	
	email($register_data['email'], 'Activate your account', "Hello " . $register_data['firstname'] . ",\n\nYou need to activate your account, so use the link below:\n\nhttp://localhost/lr/activate.php?email=" . $register_data['email'] . "&email_code=" . $register_data['email_code'] . "\n\n - phpacademy");
}

function loggedIn() 
{
	return (isset($_SESSION['user_id'])) ? true : false;
}

function userExists($dbConnection, $username) 
{
	$username = sanitize($username);
	$query = "SELECT COUNT(`user_id`) AS num FROM `users` WHERE `username` = '$username'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return ($data['num'] == 1) ? TRUE : FALSE;
}

function emailExists($dbConnection, $email) 
{
	$email = sanitize($email);
	$query = "SELECT COUNT(`user_id`) AS num FROM `users` WHERE `email` = '$email'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return ($data['num'] == 1) ? TRUE : FALSE;
}

function userActive($dbConnection, $username) 
{
	$username = sanitize($username);
	$query = "SELECT COUNT(`user_id`) AS num FROM `users` WHERE `username` = '$username' AND `active` = 1";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return ($data['num'] == 1) ? TRUE : FALSE;
}

function login($dbConnection, $username, $password) 
{
	$user_id = getUserID($dbConnection, $username);
	
	$username = sanitize($username);
	$password = SHA1($password);
	
	$query = "SELECT COUNT(`user_id`) AS num FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return ($data['num'] == 1) ? TRUE : FALSE;
}

function getUserID($dbConnection, $username)
{
	$query = "SELECT (`user_id`) FROM `users` WHERE `username` = '$username'";
	$result = mysqli_query($dbConnection, $query);
	$data = mysqli_fetch_assoc($result);
	return $data['user_id'];
}
?>