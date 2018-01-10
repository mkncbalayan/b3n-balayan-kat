<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">


	<title>PHP Programming - Syntax, Printing, and Variables</title>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>

	<?php

	// Activity 1

	// $lyrics = array('stars','shine','yellow');

	// echo "\"Look at the $lyrics[0], look how they $lyrics[1] for you, and everything you do.<br>Yeah, they were all $lyrics[2].\"";




	// Activity 2

	// echo "<ul>
	// 		<li>$lyrics[0]</li>
	// 		<li>$lyrics[1]</li>
	// 		<li>$lyrics[2]</li>
	// 	</ul>";

	// Activity 3

	$firstNames = array('Steph', 'Russell', 'LeBron');
	$lastNames = array('Curry','Westbrook','James');
	$teams = array('Warriors','Thunders', 'Cavaliers');
	$jerseyNums = array('30','0','23');


	// echo "Player: $firstNames[0] $lastNames[0] <br>Team: $teams[0] <br>Jersey: $jerseyNums[0]<br><br>
	// 	Player: $firstNames[1] $lastNames[1] <br>Team: $teams[1] <br>Jersey: $jerseyNums[1]<br><br>
	// 	Player: $firstNames[2] $lastNames[2] <br>Team: $teams[2] <br>Jersey: $jerseyNums[2]<br><br>";


	// $nbaPlayers = array(
	// 		array('Steph ','Curry','Warriors',30),
	// 		array('Russel ','Westbrook','Thunders',0),
	// 		array('LeBron ','James','Cavaliers',23),);

	// echo "Player: ".$nbaPlayers[0][0].$nbaPlayers[0][1]."<br>Team: ".$nbaPlayers[0][2]."<br>Jersey: ".$nbaPlayers[0][3]."<br>";
	// echo "Player: ".$nbaPlayers[1][0].$nbaPlayers[1][1]."<br>Team: ".$nbaPlayers[1][2]."<br>Jersey: ".$nbaPlayers[1][3]."<br>";
	// echo "Player: ".$nbaPlayers[2][0].$nbaPlayers[2][1]."<br>Team: ".$nbaPlayers[2][2]."<br>Jersey: ".$nbaPlayers[2][3]."<br>";

	// Activity 4

	echo "<table>
				<thead>
					<th>Player</th>
					<th>Team</th>
					<th>Jersey</th>
				</thead>
				<tr>
					<td>$firstNames[0] $lastNames[0]
					<td>$teams[0]
					<td>$jerseyNums[0]
				</tr>
				<tr>
					<td>$firstNames[1] $lastNames[1]
					<td>$teams[1]
					<td>$jerseyNums[1]
				</tr>
				<tr>
					<td>$firstNames[2] $lastNames[2]
					<td>$teams[2]
					<td>$jerseyNums[2]
				</tr>
			</table>";


	?>


</body>
</html>