<?php

session_start();

function getTitle() {
	echo 'Catalog';
}

include 'partials/head.php';

$file = file_get_contents('assets/items.json');
$items = json_decode($file, true);

// var_dump($items);

?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Catalog Page</h1>
		
		<div class="items-wrapper">
			<?php

			foreach ($items as $item) {
				echo '
					<div class="item-container">
						<h3>'.$item['name'].'</h3>
						<img src="'.$item['image'].'" alt="Mock data">
						<p>PHP '.$item['price'].'</p>
						<p>'.$item['description'].'</p>
					</div> <!--item container-->
				';
			}

			?>

		</div>

	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>