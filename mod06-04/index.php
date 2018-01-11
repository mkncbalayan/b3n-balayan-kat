<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">


	<title>PHP Programming - Expressions, Control Statements, and Loops</title>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>

	<?php

	// LOGICAL OPERATORS

	// $a = 1;
	// $b = 0;

	// var_dump ($a AND $b); //NULL
	
	// echo ($a OR $b); //1
	
	// echo ($a XOR $b); //1

	// echo (!$a); //NULL



	// var_dump (($a<1) && ($b<1));

	//TRUTH TABLE

	//AND
	// $a = 1;
	// $b = 0;

	// var_dump ($a AND $b); //1 0
	// echo "<br>";
	// var_dump ($b AND $a); // 0 1
	// echo "<br>";
	// var_dump ($a AND $a); // 1 1
	// echo "<br>";
	// var_dump ($b AND $b); // 0 0
	// echo "<br>";
	// echo "<br>";


	// //OR
	// var_dump ($a OR $b);
	// echo "<br>";
	// var_dump ($b OR $a);
	// echo "<br>";
	// var_dump ($a OR $a);
	// echo "<br>";
	// var_dump ($b OR $b);
	// echo "<br>";
	// echo "<br>";

	// //XOR
	// var_dump ($a XOR $b);
	// echo "<br>";
	// var_dump ($b XOR $a);
	// echo "<br>";
	// var_dump ($a XOR $a);
	// echo "<br>";
	// var_dump ($b XOR $b);
	// echo "<br>";
	// echo "<br>";

	// //NOT
	// var_dump (!$a);
	// echo "<br>";
	// var_dump(!$b);
	// echo "<br>";
	// echo "<br>";

	//BMI CALCULATOR

	// $mass = 130; //kg
	// $height = 1.9; //m

	// $bmi = $mass/($height*$height);

	// echo 'Your BMI is '.$bmi."<br>";

	// // if ($bmi < 16)
	// // 	echo "Result: Severe thinness";
	// else if ($bmi >= 16 AND $bmi<=17)
	// 	echo "Result: Moderate thinness";
	// else if ($bmi > 17 AND $bmi<=18.5)
	// 	echo "Result: Mild thinness";
	// else if ($bmi > 18.5 AND $bmi<=25)
	// 	echo "Result: Normal";
	// else if ($bmi > 25 AND $bmi<=30)
	// 	echo "Result: Overweight";
	// else if ($bmi > 30 AND $bmi<=35)
	// 	echo "Result: Obese Class 1";
	// else if ($bmi > 35 AND $bmi<=40)
	// 	echo "Result: Obese Class 2";
	// else
	// 	echo "Result: Obese Class 3";


	// switch ($bmi) {
	// 	case $bmi < 16:
	// 		echo "Result: Severe thinness";
	// 		break;
	// 	case $bmi >= 16 AND $bmi<=17:
	// 		echo "Result: Moderate thinness";
	// 		break;
	// 	case $bmi >17 AND $bmi<=18.5:
	// 		echo "Result: Mild thinness";
	// 		break;
	// 	case $bmi >18.5 AND $bmi<=25:
	// 		echo "Result: Normal";
	// 		break;
	// 	case $bmi >25 AND $bmi<=30:
	// 		echo "Result: Overweight";
	// 		break;
	// 	case $bmi >30 AND $bmi<=35:
	// 		echo "Result: Obese Class 1";
	// 		break;
	// 	case $bmi >35 AND $bmi<=40:
	// 		echo "Result: Obese Class 2";
	// 		break;
	// 	case $bmi > 40:
	// 		echo "Result: Obese Class 3";
	// 		break;
	// 	default:
	// 		break;
	// 	}



	// LOOPS

	// WHILE LOOP

	// $number = 0;

	// while ($number <=10) {
	// 	echo $number. ' ';
	// 	$number = $number + 2; //do not use shorthand
	// }


	// DO...WHILE LOOP

	// $count = 13;

	// do {
	// 	echo $count.' ';
	// 	$count+=1;
	// } while ($count <= 12);


	// FOR LOOP

	// $name = 'Juan Dela Cruz';

	// for ($counter=1; $counter <= 10 ; $counter++) { 
	// 	echo $name.'<br>';
	// }


















	?>


</body>
</html>