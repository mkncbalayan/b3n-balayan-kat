<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}

function getTitle() {
	echo 'Profile';
}

include 'partials/head.php';


?>

</head>
<body>

	<!-- main header -->
	<?php include 'partials/main_header.php'; ?>

	<!-- wrapper -->
	<main class="wrapper">

		<h1>Profile Page</h1>

		<?php

		$file = file_get_contents('assets/users.json');
		$users = json_decode($file, true);

		foreach($users as $user){
			if ($user['username'] === $_SESSION['current_user']){
				echo '<table>
						<tr>
							<td>Username</td>
							<td>'.$user['username'].'</td>
						</tr>
						<tr>
							<td>Password</td>
							<td>'.$user['password'].'</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>'.$user['email'].'</td>
						</tr>
						<tr>
							<td>Role</td>
							<td>'.$user['role'].'</td>
						</tr>
					</table>';
			} else {
				continue;
			}
		};

		?>

		
	</main>

	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>

</body>
</html>