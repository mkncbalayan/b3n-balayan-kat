<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">


	<title>PHP Programming - Expressions</title>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>

	<?php

	// ASSIGNMENT EXPRESSIONS

	// $companyName = " ";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;



	// $counter = 0;

	// echo $counter."<br>";

	// $counter = $counter + 150;

	// $counter += 150; //shorthand

	// echo $counter;


	// ARITHMETIC OPERATOR

	// $counter = 15;

	// echo $counter . "<br>";

	// $counter = $counter + 5;

	// echo $counter . "<br>";

	// $counter = $counter - 3;

	// echo $counter . "<br>";

	// $counter = $counter * 8;

	// echo $counter . "<br>";

	// $counter = $counter / 16;

	// echo $counter . "<br>";

	// $row = 12;

	// $counter = $counter . $row;

	// echo $counter . "<br>";

	// $counter = $counter % 4;

	// echo $counter . "<br>";



	//PEMDAS and BEDMAS



	// IF CONDITIONALS

	// $bankBalance = 99;
	// $deposit = 1000;

	// if ($bankBalance < 100) {
	// 	$bankBalance = $bankBalance + $deposit;
	// 	echo "Your balance has been updated.";
	// }
	// else {
	// 	$bankBalance = $bankBalance + 100;
	// 	echo "Your bank balance is greater than or equal to 100";
	// }

	// echo "<br>".$bankBalance;


	// EQUALITY OPERATORS

	// $userName = "juandelacruz@yahoo.com";
	// $passWord = "";

	// if ($userName == "admin") {
	// 	echo "Username: ADMIN";
	// }
	// else {
	// 	echo "Username: ".$userName;
	// }



	// CONDITIONAL OPERATORS

	$firstNumber = 1;
	$secondNumber = 2;

	if($firstNumber > $secondNumber) {
		echo $firstNumber . " is greater than ". $secondNumber. "<br>";
	}

	if ($firstNumber < $secondNumber) {
		echo $firstNumber . " is less than " . $secondNumber. "<br>";
	}

	if ($firstNumber >= $secondNumber) {
		echo $firstNumber . " is greater than or equal to " . $secondNumber. "<br>";
	}

	if ($firstNumber <= $secondNumber) {
		echo $firstNumber . " is less than or equal to " . $secondNumber. "<br>";
	}


	?>


</body>
</html>