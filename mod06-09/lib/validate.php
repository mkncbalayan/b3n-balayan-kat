<?php

// $userName = htmlspecialchars($_GET['username']);
// $passWord = htmlspecialchars($_GET['password']);
// $firstName = htmlspecialchars($_GET['firstname']);

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
$firstName = htmlspecialchars($_POST['firstname']);


echo "
	<h3>Username: $userName</h3>
	<h3>Password: $passWord</h3>
	<h3>$firstName Welcome to the PHP world!</h3>
";