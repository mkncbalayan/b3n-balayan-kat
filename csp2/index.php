<?php

session_start();

if (isset($_SESSION['current_user'])) {
	header('location: home.php');
}

function getTitle() {
	echo 'Welcome!';
}

include 'partials/head.php';

// create session variable for cart
$_SESSION['cart'] = array();

// create session variable for item counter
$_SESSION['item_count'] = 0;

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<img class="home-banner" src="assets/images/banner.png" alt="cithra banner">

		<h1>Welcome to Cithra!</h1>
		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>