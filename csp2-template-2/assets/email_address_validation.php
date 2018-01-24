<?php

$file = file_get_contents('users.json');
$emails = json_decode($file, true);

$email_address = [];

foreach ($emails as $email) {
	array_push($email_address, $email['email']);
};

if (isset($_POST['email_address'])) {
	$email_address_entered = $_POST['email_address'];

	if (!empty($email_address_entered)) {
		if (in_array($email_address_entered, $email_address)) {
			echo 'Email <span class="red-message">not valid</span>';
		} else {
			echo 'Email <span class="green-message">valid</span>';
		}
	} else {
		echo 'Email';
	}
}

// var_dump($usernames);