<?php


$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['user_role'];

// echo $user_id.$username.$password.$email.$role;

$file = file_get_contents('users.json');
$users = json_decode($file,true);

$users[$user_id]['username'] = $username;
$users[$user_id]['password'] = $password;
$users[$user_id]['email'] = $email;
$users[$user_id]['role'] = $role;

$jsonFile = fopen('users.json', 'w');
fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../user.php?id=$user_id");
