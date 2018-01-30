<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}


// $user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


// $image = $_POST['image'];

$file = file_get_contents('users.json');
$users = json_decode($file, true);

foreach($users as $key => $user){
	if ($user['username'] === $_SESSION['current_user']){
		$user_id = $key;
	};
};

if ($_POST['image'] === NULL) {
	$image = $users[$user_id]['image'];
} else {
	$image = 'assets/img/'.$_POST['image'];
}

$users[$user_id]['username'] = $username;
$users[$user_id]['password'] = $password;
$users[$user_id]['email'] = $email;
$users[$user_id]['image'] = $image;

// if ($image == NULL) {
// 	$users[$item_id]['image'] = $users[$item_id]['image'];
// } else
// 	$users[$item_id]['image'] = 'assets/img/user/'.$image;

$jsonFile = fopen('users.json', 'w');
fwrite($jsonFile, json_encode($users, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../profile.php');