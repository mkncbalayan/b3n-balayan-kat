<?php

function getTitle() {
	echo 'Register';
}

include 'partials/head.php';

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Register Page</h1>
		
		<form id="registerForm" method="POST" action="assets/registration.php" class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter new username" class="form-control" required>

			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Enter new password" class="form-control" required>

			<label for="confirmPassword">Confirm Password <!-- <span id="confirmation"></span> --></label>
			<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Enter password again" class="form-control" required>

			<label for="email">Email Address</label>
			<input type="email" name="email" id="email" placeholder="email@domain.com" class="form-control" required>

			<input type="submit" name="submit" id="submit" value="Register" class="btn btn-primary">
		</form>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

	<script type="text/javascript">
		// $('#username').keyup(function () {
		$('#username').on('input', function() {
			var usernameText = $(this).val();
			// console.log(usernameText);
			$.post('assets/username_validation.php', //script that will process
				{username: usernameText}, //data is an object in json format (key: value) doesnt need to match json key
				function (data, status) {
					$('[for="username"]').html(data);
				}); 
		});

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

		

		$('#confirmPassword').on('input', function () {
			var passwordText = $('#password').val();
			var confirmPassword = $('#confirmPassword').val();

			if (passwordText != ' ' && confirmPassword != ' ') {
				if (passwordText == confirmPassword) {
					$('[for="password"]').html('Password <span class="green-message">match</span>');
				} else {
					$('[for="password"]').html('Password <span class="red-message">mismatch</span>');
				}
			} else {
				$('[for="password"]').html('Password');

			}
		});
			

		$('#email').on('input', function() {
			var emailText = $(this).val();
			// console.log(usernameText);
			$.post('assets/email_address_validation.php', //script that will process
				{email_address: emailText}, //data is an object in json format (key: value) doesnt need to match json key
				function (data, status) {
					$('[for="email"]').html(data);
				}); 
		});
		
	</script>

</body>
</html>