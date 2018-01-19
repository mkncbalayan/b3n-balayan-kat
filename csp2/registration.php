<?php

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
// $confirmPassWord = htmlspecialchars($_POST['confirmPassword']);

// echo $userName." ".$passWord." ".$confirmPassWord;


// require 'assets/users.php';

// var_dump($users);
// var_export($users);

// array_push($users, ["username" => "$userName", "password" => $passWord]); //add new item to array

// var_export($users);

//import json file
$file = file_get_contents('assets/users.json');

//convert to associative array to allow PHP access
$users = json_decode($file, true); //'true' makes the file associative (key:value)

array_push($users, array("username" => $userName, "password" => $passWord));
var_export($users);


// opens file to write on it/update it
$file = fopen('assets/users.json', 'w');

// update users.json file
fwrite($file, json_encode($users, JSON_PRETTY_PRINT)); //json_encode translates php to json

// close the file 
fclose($file);

header('location: login.php');

