<?php

session_start();

$users = [

	['username' => 'admin', 'password' => 'abc123'],
	['username' => 'billy', 'password' => 'ABC*()'],
	['username' => 'user1', 'password' => 'abc123ABC*()']

];

$isLoginSuccessful = false; //monitor login status


$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

// echo $username;
// echo $password;


foreach ($users as $user) {
	// echo $user['username'].'<br>';
	// echo $user['password'].'<br>';

	if (($user['username'] == $username) && ($user['password'] == $password)){
		// echo $username . ' was found. <br>';
		// echo 'Password is correct.';
		$isLoginSuccessful = true;
		break;
	}
}

if($isLoginSuccessful) {//if the value of the variable is boolean, 'if' automatically looks for truth
	// session_start();
	$_SESSION['current_user'] = $username;
	header('location: home.php');
} else {
	header('location: login.php');
}



if (isset($_SESSION['current_user']) && $isLoginSuccessful) //checks if variable/container has value
	$_SESSION['message'] = 'Login was successful.';
else
	$_SESSION['message'] = 'Login was unsucessful.';
	