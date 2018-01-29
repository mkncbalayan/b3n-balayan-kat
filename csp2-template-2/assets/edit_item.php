<?php

$id = $_GET['id'];

// successful processing

$file = file_get_contents('items.json');
$items = json_decode($file, true);

echo '
<div class="form-group">
	<label>Product Name</label>
	<input name="name" class="form-control" type="text" value="'.$items[$id]['name'].'">

	<labe>Image</label>
	<img src="'.$items[$id]['image'].'">
	<input name="image" class="form-control" type="file" placeholder="'.$items[$id]['image'].'">

	<labe>Price</label>
	<input name="price" class="form-control" type="number" value="'.$items[$id]['price'].'">

	<label>Description</label>
	<textarea name="description" class="form-control">'.$items[$id]['description'].'</textarea>
';

	$categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4', 'Category 5', 'Category 6'];
	echo '
	<label>Category</label>
	<select class="form-control" name="category">';
		foreach ($categories as $category) {
			if ($items[$id]['category'] === $category)
				echo '<option selected>'.$category.'</option>';
			else
				echo '<option>'.$category.'</option>';
		}
	echo'
	</select>
</div>';