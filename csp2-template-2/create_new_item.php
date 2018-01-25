<?php

function getTitle() {
	echo 'Create New Item';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Create New Item Page</h1>
		
		<form id="registerForm" method="POST" action="assets/createnewitem.php" class="form-group">
			<label for="name">Product name</label>
			<input type="text" name="name" id="name" placeholder="Enter new product name" class="form-control" required>

			<label for="image">Image (.jpg, .jpeg, .png)</label>
			<input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" class="form-control" required>

			<label for="price">Price</label>
			<input type="number" name="price" id="price" placeholder="Enter price" class="form-control" step="0.01" min="0" required>

			<label for="category">Category</label>
			<select name="category" id="category" placeholder="Select category" class="form-control" required>
				<option selected disabled></option>
				<option>Category 1</option>
				<option>Category 2</option>
				<option>Category 3</option>
				<option>Category 4</option>
				<option>Category 5</option>
				<option>Category 6</option>
			</select>

			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control" placeholder="Enter product description" required></textarea>

			<input type="submit" name="submit" id="submit" value="Create Item" class="btn btn-primary">
		</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		// $('#username').keyup(function () {
		// $('#username').on('input', function() {
		// 	var usernameText = $(this).val();
		// 	// console.log(usernameText);
		// 	$.post('assets/username_validation.php', //script that will process
		// 		{username: usernameText}, //data is an object in json format (key: value) doesnt need to match json key
		// 		function (data, status) {
		// 			$('[for="username"]').html(data);
		// 		}); 
		// });

		// if ($('#password') !== " ") {
			// $('#confirmPassword').on('input', function () {
			// 	if ($('#confirmPassword').val() != $('#password').val()) {
			// 		$('#confirmation').html('does not match');
			// 		$('#confirmation').attr('class','red-message');
			// 	} else {
			// 		$('#confirmation').html('match');
			// 		$('#confirmation').attr('class','green-message');
			// 	}
		// 	});
		// } else {
		// 	$('#confirmation').html("");
		// }

		

		// $('#confirmPassword').on('input', function () {
		// 	var passwordText = $('#password').val();
		// 	var confirmPassword = $('#confirmPassword').val();

		// 	if (passwordText != ' ' && confirmPassword != ' ') {
		// 		if (passwordText == confirmPassword) {
		// 			$('[for="password"]').html('Password <span class="green-message">match</span>');
		// 		} else {
		// 			$('[for="password"]').html('Password <span class="red-message">mismatch</span>');
		// 		}
		// 	} else {
		// 		$('[for="password"]').html('Password');

		// 	}
		// });
			

		// $('#email').on('input', function() {
		// 	var emailText = $(this).val();
		// 	// console.log(usernameText);
		// 	$.post('assets/email_address_validation.php', //script that will process
		// 		{email_address: emailText}, //data is an object in json format (key: value) doesnt need to match json key
		// 		function (data, status) {
		// 			$('[for="email"]').html(data);
		// 		}); 
		// });
		
	</script>

</body>
</html>