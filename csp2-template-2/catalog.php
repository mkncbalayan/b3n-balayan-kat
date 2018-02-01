<?php

session_start();

function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

// import items.json file
$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

//retrieve categories from items (array)
$categories = array_column($items, 'category'); //extract values from key (column)
$categories = array_unique($categories); // extract unique values from value array
sort($categories);
// var_export($categories);

$result = array();

if (isset($_GET['search']) && $_GET['category'] !== 'All') {
	$cat = $_GET['category']; // filter based on category

	foreach ($items as $item) {
		if ($item['category'] === $cat) {
			array_push($result, $item);

		}
	}

} else { //return all items
	$result = $items;
}



?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main id="catalogWrapper" class="wrapper">

		<h1>Catalog Page</h1>

		<!-- go to add new item page -->
		<a href="create_new_item.php">
			<button class="btn btn-primary">Add New Item</button>
		</a>

		
		
		<form method="GET">
			<select name="category">
				<option>All</option>

				<?php

				foreach ($categories as $category) {
					if ($category === $_GET['category']){
						echo '<option selected>'.$category.'</option>';
					} else {
						echo '<option>'.$category.'</option>';
					}
				}

				?>

			</select>

			<button type="submit" name="search">Search</button>
			
		</form>


		<div class="items-wrapper">

			<?php

			foreach ($result as $key => $item) {
				echo '
					<div class="item-parent-container form-group">
						<a href="item.php?id='.$item['id'].'&result=<?php var_dump($result); ?>">'; //*************

				echo '<div class="item-container">
							<h3>'.$item['name'].'</h3>
							<img src="'.$item['image'].'" alt="Mock data">
							<p>PHP '.$item['price'].'</p>
							<p>'.$item['description'].'</p>
						</div>  <!-- /.item-container -->
						</a>
						<input id="itemQuantity'.$item['id'].'" type="number" value="0" min="0" class="form-control"></input>
						<button class="btn btn-primary form-control" onclick="addToCart('.$item['id'].')">Add to Cart</button>
					</div>
				';
			}

			?>
		</div>  <!-- /.items-wrapper -->
		
	</main>  <!-- /.wrapper -->

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>


	<script type="text/javascript">
		
		function addToCart(itemId){
			// console.log(itemId);
			var id = itemId;

			//retrieve value of item quantity
			var quantity = $('#itemQuantity'+id).val()
			// console.log(quantity);


			//create a post request to update session cart variable
			$.post('assets/add_to_cart.php', ///file that will process
				{item_id: id,
				 item_quantity: quantity}, //data
				function(data, status){
					// console.log(data);

					$('a[href="cart.php"]').html('My Cart ' + data);

				});


		}

	</script>

</body>
</html>