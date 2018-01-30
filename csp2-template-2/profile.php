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

		foreach($users as $key => $user){
			if ($user['username'] === $_SESSION['current_user']){
				$id = $key;
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
						<tr>
							<td>Profile Picture</td>
							<td>';

				// if ($user['image'] === 'No profile picture yet!'){
				// 	echo 'No profile picture yet!';
				// } else 
				// 	echo '<img src="'.$user['image'].'" alt="'.$user['username'].'profilePic">';


				if ($user['image'] !== ""){
					echo '<img src="'.$user['image'].'" alt="'.$user['username'].'-profilepic">';
				} else 
					echo 'No profile picture yet!';




						echo '</td>
						</tr>
					</table>';
				break;
			// } else {
			// 	continue;
			}
		};

		?>

		<!-- Trigger the modal EDIT -->
		<button id="editProfile" type="button" class="btn btn-info" data-toggle="modal"  data-target="#editProfileModal" data-index="<?php echo $id; ?>">Edit</button>
		
	</main>

	<!-- edit modal -->
	<div id="editProfileModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <form method="POST" action="assets/update_profile.php">
	    	<input hidden name="user_id" value="<?php echo $id; ?>">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Edit Your Details</h4>
		      </div>
		      <div id="editProfileModalBody" class="modal-body">
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-default">Save</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
		      </div>
		    </div>
	    </form>

	  </div>
	</div>





	<!-- main footer -->
	<?php include 'partials/main_footer.php'; ?>

<?php

include 'partials/foot.php';

?>



	<script type="text/javascript">
		$(document).ready(function() {

			$('#editProfile').click(function() {
				var userId = $(this).data('index');

				$.get('assets/edit_profile.php',
					{
						id: userId
					},
					function(data, status) {
						$('#editProfileModalBody').html(data);
				});
			});
		});
	</script>

</body>
</html>