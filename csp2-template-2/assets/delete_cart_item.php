<?php

session_start();

$item_id = $_POST['item_id'];

array_splice($_SESSION['cart'], array_search($item_id, $_SESSION['cart']), 1);

// $file = file_get_contents('items.json');
// $items = json_decode($file, true);

// var_dump($_SESSION['cart']);

// $_SESSION['item_count'] = array_sum($_SESSION['cart']);
// foreach($_SESSION['cart'] as $key => $quantity) {
// 	// echo $key . ' ' . $quantity . '<br> ';
// 	// echo $items[$key]['name'];
// 	echo ' 
// 			<tr>
// 				<td>'.$items[$key]['name'].'</td>
// 				<td><img src="'.$items[$key]['image'].'"></td>
// 				<td>'.$items[$key]['description'].'</td>
// 				<td>PHP '.$items[$key]['price'].'</td>
// 				<td><input name="itemQuantity'.$items[$key]['id'].'" id="itemQuantity'.$items[$key]['id'].'" type="number" value="'.$quantity.'" class="form-control"></td>
// 				<td><span id="totalitemQuantity'.$items[$key]['id'].'">'.(float)$items[$key]['price']*(float)$quantity.'</span></td>
// 				<td><button id="remove-id-'.$items[$key]['id'].'" onclick="deleteCartItem('.$items[$key]['id'].')">Remove</button></td>
// 			</tr>
// 	';
// }

// foreach($_SESSION['cart'] as $key => $quantity) {
// 	$multiplier = (float)$items[$key]['price']*(float)$quantity;
// 	$total = $total + $multiplier;
// }
// echo '
// 		<tr>
// 			<td colspan="4"></td>
// 			<td>'.$_SESSION['item_count'].'</td>
// 			<td><strong></strong></td>
// 			<td></td>
// 		</tr>
// 	</tbody>
// </table>';

header('location: ../cart.php');
