<?php

// session_start();

function getTitle() {
	echo 'Log In | Beer Web App';
}

include 'partials/head.php';

?>


</head>
<body>
	<header>

		<?php

		include 'partials/main_navigation.php';

		?>

	</header>

	<main class="wrapper">
		<?php 

		if(isset($_SESSION['current_user']))
			echo "<p>".$_SESSION['message']."</p>";
		else
			echo "<p>No user currently logged in.</p>"

		?>
		


		<h1>Log In</h1>

		<form method="POST" action="authenticate.php">
			
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Username">

			<label for="username">Password</label>
			<input type="password" name="password" id="password" placeholder="Password">

			<input type="submit" name="submit" value="Log In">


		</form>

	</main> <!-- END wrapper -->

	<footer>
		
		<?php

		include 'partials/footer.php';

		?>

	</footer>


<?php

include 'partials/foot.php';

?>