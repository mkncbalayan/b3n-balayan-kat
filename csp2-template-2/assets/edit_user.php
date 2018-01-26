<?php

$id = $_GET['id'];

// echo $id;

$file = file_get_contents('users.json');
$users = json_decode($file, true);

// echo $users[$id]['username'].'<br>'.$users[$id]['password'].'<br>'.$users[$id]['email'].'<br>'.$users[$id]['role'];

// if ('user' == $users[$id]['role']) {
// 	$otherRole = 'admin';
// } else {
// 	$otherRole = 'user';
// }

echo '
<div>
	<label>Username</label>
	<input class="form-control" name="username" type="text" value="'.$users[$id]['username'].'">

	<label>Password</label>
	<input class="form-control" name="password" type="password" value="'.$users[$id]['password'].'">

	<label>Confirm Password</label>
	<input class="form-control" name="confirm_password" type="password">

	<label>Email</label>
	<input class="form-control" name="email" type="email" value="'.$users[$id]['email'].'">

	<label>Role</label>
	<select class="form-control" name="user_role">';
	
$roles = ['admin','user'];

foreach ($roles as $role) {
	if ($role === $users[$id]['role']) {
		echo '<option selected>'.$role.'</option>';
	} else {
		echo '<option>'.$role.'</option>';
	}
};

echo '</select>
	</div>';

	
	/*<select class="form-control">
		<option selected>'.$users[$id]['role'].'</option>
		<option>'.$otherRole.'</option>
	</select>*/

