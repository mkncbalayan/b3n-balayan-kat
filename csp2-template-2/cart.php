<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}

function getTitle() {
	echo 'My Cart!';
}

include 'partials/head.php';

// //create session variable
// $_SESSION['cart'] = array();

// // create session variable for item counter
// $_SESSION['item_count'] = 0;

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>My Cart Page</h1>
		
		<?php

		$_SESSION['item_count'] = array_sum($_SESSION['cart']);


		// var_export($_SESSION['cart']);
		echo	'<table>
				<thead>
						<th>Product Name</th>
						<th>Image</th>
						<th>Description</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Remove</th>
				</thead>
				<tbody>';

		foreach($_SESSION['cart'] as $key => $quantity) {
			// echo $key . ' ' . $quantity . '<br> ';
			// echo $items[$key]['name'];

			echo ' 
					<tr>
						<td>'.$items[$key]['name'].'</td>
						<td><img src="'.$items[$key]['image'].'"></td>
						<td>'.$items[$key]['description'].'</td>
						<td>PHP '.$items[$key]['price'].'</td>
						<td><input type="number" value="'.$quantity.'"></td>
						<td>'.((float)$items[$key]['price']*(float)$quantity).'</td>
						<td><button>Remove</button></td>
					</tr>
			';
		}

		$total = 0;

		foreach($_SESSION['cart'] as $key => $quantity) {
			$multiplier = (float)$items[$key]['price']*(float)$quantity;
			$total = $total + $multiplier;
		}

		echo '
				<tr>
					<td colspan="4"></td>
					<td>'.$_SESSION['item_count'].'</td>
					<td>'.$total.'</td>
				</tr>
			</tbody>
		</table>';
		?>

		</table>



	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>