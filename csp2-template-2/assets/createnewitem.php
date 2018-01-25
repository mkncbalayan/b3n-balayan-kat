<?php

$productName = $_POST['name'];
$imageLink = "assets/img/".$_POST['image'];
$price = $_POST['price'];
$category = $_POST['category'];
$description = $_POST['description'];

// echo $userName . ' ' . $passWord . ' ' . $email;

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$newItem = array('name' => $productName, 'description' => $description, 'image' => $imageLink, 'price' => $price,  'category' => $category);

array_push($items, $newItem);

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header('location: ../catalog.php');