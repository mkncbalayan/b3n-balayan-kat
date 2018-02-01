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
		echo '<table id="table">
			<thead>
				<th>Product Name</th>
				<th>Image</th>
				<th>Description</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
				<th>Remove</th>
			</thead>
			<tbody id="cart_data">';
				// $total = 0;
		if ($_SESSION['cart'] === NULL) {
			echo '';
		} else {
			$_SESSION['item_count'] = array_sum($_SESSION['cart']);
			foreach($_SESSION['cart'] as $key => $quantity) {
				// echo $key . ' ' . $quantity . '<br> ';
				// echo $items[$key]['name'];
				echo ' 
						<tr>
								<form method="POST" action="assets/delete_cart_item.php">
									<td>'.$items[$key]['name'].'</td>
									<td><img src="'.$items[$key]['image'].'"></td>
									<td>'.$items[$key]['description'].'</td>
									<td>PHP '.$items[$key]['price'].'</td>
									<td><input name="itemQuantity'.$items[$key]['id'].'" id="itemQuantity'.$items[$key]['id'].'" type="number" value="'.$quantity.'" class="form-control" min="0"></td>
									<td><span id="totalitemQuantity'.$items[$key]['id'].'">'.(float)$items[$key]['price']*(float)$quantity.'</span></td>
									<td><button type="submit" id="remove-id-'.$items[$key]['id'].'">Remove</button></td>
							</form>
						</tr>
				';
					// }

					// foreach($_SESSION['cart'] as $key => $quantity) {
					// 	$multiplier = (float)$items[$key]['price']*(float)$quantity;
					// 	$total = $total + $multiplier;
					}
				}
				echo '
						<tr>
							<td colspan="4"></td>
							<td>'.$_SESSION['item_count'].'</td>
							<td><strong></strong></td>
							<td></td>
						</tr>
					</tbody>
				</table>';
				?>

		</table>

<!-- <button id="update-'.$items[$key]['id'].'">Update</button> -->

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

<script type="text/javascript">

$('[id*="itemQuantity"]').on('change', function() {
	var newQuantity = $(this).val();
	var itemId = $(this).attr('id');
	$.post('assets/edit_cart.php', ///file that will process
		{item_id: itemId,
		 item_quantity: newQuantity}, //data
		function(data, status){
			// console.log(data);
			$('#total'+itemId).html(data);
			$('#total'+itemId).attr("value",data);

		});
	$('span').each(function(){
		var grandTotal = 0;
		grandTotal += ($(this).val())
	});
		return grandTotal;

		$('strong').html(grandTotal);
	

});



</script>




</body>
</html>