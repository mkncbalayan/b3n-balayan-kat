<?php

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
// $image = $_POST['image'];
$user_role = $_POST['user_role'];

$file = file_get_contents('users.json');
$users = json_decode($file, true);

$users[$user_id]['username'] = $username;
$users[$user_id]['password'] = $password;
$users[$user_id]['email'] = $email;

if ($_POST['image'] !== "") {
	$image = 'assets/img/'.$_POST['image'];
} else {
	$image = $users[$user_id]['image'];
}

$users[$user_id]['role'] = $user_role;
$users[$user_id]['image'] = $image;

$jsonFile = fopen('users.json', 'w');
fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../user.php?id=$user_id");