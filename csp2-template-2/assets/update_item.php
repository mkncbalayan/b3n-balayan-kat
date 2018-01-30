<?php

$item_id = $_POST['item_id'];
$productName = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];
$category = $_POST['category'];

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$items[$item_id]['name'] = $productName;
$items[$item_id]['description'] = $description;

if ($image == NULL) {
	$items[$item_id]['image'] = $items[$item_id]['image'];
} else
	$items[$item_id]['image'] = '../assets/img/'.$image;

$items[$item_id]['price'] = $price;
$items[$item_id]['category'] = $category;

$jsonFile = fopen('items.json', 'w');
fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));
fclose($jsonFile);

header("location: ../item.php?id=$item_id");