<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

	// $username = htmlspecialchars($_GET['username']);
	// $password = htmlspecialchars($_GET['password']);
	// $firstName = htmlspecialchars($_GET['firstName']);

	// echo $username.'<br>';
	// echo $password.'<br>';
	// echo $firstName;

	?>

	<form method="GET" action="lib/validate.php">
		<label for="username">Username</label>
		<input type="text" name="username" id="username">

		<label for="password">Password</label>
		<input type="password" name="password" id="password">

		<label for="firstname">Firstname</label>
		<input type="text" name="firstname" id="firstname">

		<input type="submit" name="submit" value="submit">


	</form> <!-- form -->


</body>
</html>
