<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">


	<title>PHP Programming - Loop Activity</title>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">


</head>
<body>

	<?php

	//ACTIVITY 1

	// for ($counter=1; $counter <=10; $counter++) {
	// 	echo $counter;
	// 	if ($counter < 10)
	// 	 	echo '-';
	// 	}
	

	//ACTIVITY 2

	// for($yAxis = 0; $yAxis <= 10; $yAxis++) {
	// 	for($xAxis = 0; $xAxis <= 10; $xAxis++) {
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }

	// echo '<br><br><br><br><br><br>';


	//ACTIVITY 3

	// for ($num1=1; $num1 <=10 ; $num1++) { 
	// 	for ($num2=1; $num2 <=10 ; $num2++) { 
	// 		echo '<span class="box">'.($num1 * $num2).'</span>';
	// 	}
	// echo '<br>';
	// }



	//ACTIVITY 4


	// for ($row=1; $row <= 10 ; $row++) { 
	// 	for ($col=1; $col <= $row ; $col++) { 
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }


	//ACTIVITY 5

	// for ($row=10; $row >= 1; $row--) { 
	// 	for ($col=1; $col <= $row; $col++) { 
	// 		echo '* ';
	// 	}
	// 	echo '<br>';
	// }


	//ACTIVITY 6

	for ($number=1; $number <=50 ; $number++) { 
		
		if (($number % 3 == 0) AND ($number % 5 == 0))
			echo $number.' FizzBuzz <br>';

		if ($number % 3 == 0)
			echo $number.' Fizz <br>';

		if ($number % 5 == 0)
			echo $number.' Buzz <br>';

	}



	?>


</body>
</html>