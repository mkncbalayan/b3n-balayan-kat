<?php

session_start();

// $users = [

// 	['username' => 'admin', 'password' => 'abc123'],
// 	['username' => 'billy', 'password' => 'ABC*()'],
// 	['username' => 'user1', 'password' => 'abc123ABC*()']

// ];

// require 'assets/users.php';

$file = file_get_contents('assets/users.json');
$users = json_decode($file,true);


$isLoginSuccessful = false; //monitor login status


$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);

// echo $username;
// echo $password;


foreach ($users as $user) {
	// echo $user['username'].'<br>';
	// echo $user['password'].'<br>';

	if (($user['username'] == $userName) && ($user['password'] == $passWord)){
		// echo $username . ' was found. <br>';
		// echo 'Password is correct.';
		$isLoginSuccessful = true;
		$_SESSION['role'] = $user['role'];
		break;
	}
}

if($isLoginSuccessful) {//if the value of the variable is boolean, 'if' automatically looks for truth
	// session_start();
	$_SESSION['current_user'] = $userName;
	header('location: home.php');
} else {
	header('location: login.php');
}



if (isset($_SESSION['current_user']) && $isLoginSuccessful) //checks if variable/container has value
	$_SESSION['message'] = 'Login was successful.';
else
	$_SESSION['message'] = 'Login was unsucessful.';
	