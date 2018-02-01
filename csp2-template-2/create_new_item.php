<?php

session_start();

function getTitle() {
	echo 'Create New Item';
}

include 'partials/head.php';

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

//retrieve categories from items (array)
$categories = array_column($items, 'category'); //extract values from key (column)
$categories = array_unique($categories); // extract unique values from value array
sort($categories);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>
		
		<form id="registerForm" method="POST" action="assets/createnewitem.php" class="form-group">
			<label for="productName">Product Name</label>
			<input type="text" name="product_name" id="productName" placeholder="Enter product name" class="form-control" required>

			<label for="image">Image</label>
			<input type="file" class="form-control" name="image" required>

			<label for="price">Price</label>
			<input type="text" name="price" id="price" placeholder="PHP 0.00" class="form-control" required>

			<label for="description">Description</label>
			<textarea name="description" id="description" placeholder="Type product description here..." class="form-control" required></textarea>

			<label for="category">Category</label>
			<select name="category" class="form-control" required>
				<?php

				foreach ($categories as $category) {
					echo '<option>'.$category.'</option>';
				}

				?>
			</select>

			<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
		</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>