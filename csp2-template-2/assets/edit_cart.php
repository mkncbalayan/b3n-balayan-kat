<?php

$id = $_POST['item_id'];
$newQuantity = $_POST['item_quantity'];

$index = trim($id, "itemQuantity");
// echo $index;

$file = file_get_contents('items.json');
$items = json_decode($file,true);

$itemPrice = $items[$index]['price'];

$totalPriceItem = $itemPrice * $newQuantity;

echo $totalPriceItem;