<?php

session_start();

if (!isset($_SESSION['current_user'])) {
	header('location: login.php');
}
// $id = $_GET['id'];

// successful processing

$file = file_get_contents('users.json');
$users = json_decode($file, true);

foreach($users as $key => $user){
	if ($user['username'] === $_SESSION['current_user']){
		$id = $key;
		echo '
		<div class="form-group">
			<label>Username</label>
			<input name="username" class="form-control" type="text" value="'.$users[$id]['username'].'">

			<labe>Password</label>
			<input name="password" class="form-control" type="password" value="'.$users[$id]['password'].'">

			<labe>Confirm Password</label>
			<input name="confirm_password" class="form-control" type="password">

			<label>Email Address</label>
			<input name="email" class="form-control" type="email" value="'.$users[$id]['email'].'">

			<label>Role</label>
			<select class="form-control" name="user_role">
				<option selected disabled>'.$users[$id]['role'].'</option>
			</select>

			<labe>Profile Picture</label>';

			if ($user['image'] !== ""){
				echo '<img src="assets/img/'.$user['image'].'" alt="'.$user['username'].'-profilepic">';
			} else 
				echo 'No profile picture yet!';

			echo '<input name="image" class="form-control" type="file">

		</div>';
		break;
	}
};
