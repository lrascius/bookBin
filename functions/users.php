<?php
function logged_in()
{
	return (isset($_SESSION['username'])) ? true : false;	
}

function user_exists($dbConnection, $username)
{
	$query = "SELECT COUNT(id) AS num FROM users WHERE username = '$username'";
	$result = mysqli_query($dbConnection, $query);
	if($result->fetch_object()->num == 1)
		return TRUE;
	else 
		return FALSE;
}		


function register_user($dbConnection, $registerData)
{
	array_walk($registerData, 'arraySanitize');
	$registerData['password'] = SHA1($registerData['password']);
	$data = '`' . implode('`, `', $registerData) . '`';
	echo $data;

}

?>
