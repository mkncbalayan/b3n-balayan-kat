<?php

session_start();

function getTitle() {
	echo 'Home | Welcome to Beer Web App';
}


include 'partials/head.php';

?>




</head>
<body>

	<header>
		
		<?php

		include 'partials/main_navigation.php'

		?>

	</header>

	<main class="wrapper">
		<p><?php echo $_SESSION['message']; ?></p>
		
		<h1>Home</h1>
		<h3>Welcome <?php echo $_SESSION['current_user']; ?></h3>

	</main> <!-- END wrapper -->

	<footer>
		
		<?php

		include 'partials/footer.php'

		?>

	</footer>


<?php

include 'partials/foot.php';

?>