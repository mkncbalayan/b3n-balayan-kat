<?php

function getTitle() {
	echo 'Index | Welcome to Beer Web App';
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
		
		<h1>Index</h1>

	</main> <!-- END wrapper -->

	<footer>
		
		<?php

		include 'partials/footer.php';

		?>

	</footer>


<?php

include 'partials/foot.php';

?>