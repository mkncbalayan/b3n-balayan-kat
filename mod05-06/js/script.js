// var sum	= 0;
// var sumodd = 0;
// var sumeven = 0;
// var x = 0; //variable declaration
// while (x <= 50) { //condition
// 	if (x % 2 == 1) {
// 		sumodd+=x;
// 	} else {
// 		sumeven+=x;
// 	}
// 	x++; //variable modification
// }
// console.log(sumeven);
// console.log(sumodd);
// alert('sum even = ' + sumeven + ' sumodd = ' + sumodd);





// for (var x = 0; x<=20; x++) {
// 	if (x % 3 == 0 && x % 5 == 0) {
// 		console.log(x + " is a multiple of 3 and 5");
// 	} else if (x % 3 == 0 && x % 5 !== 0) {
// 		console.log(x + " is a multiple of 3 but not of 5");
// 	} else if (x % 5 == 0 && x % 3 !== 0) {
// 		console.log(x + " is a multiple of 5 but not of 3");
// 	} else {
// 		console.log(x + " is not a multiple of 3 or 5");
// 	}
// }


// for (var x = 1; x <=5; x++) {
// 	document.getElementById("test").innerHTML += ' *';
// }

// for (var x=1; x<=5; x++) {
// 	document.getElementById("test").innerHTML += '* <br>';
// }



// function draw() {
// 	var num	= document.getElementById('number').value;
// 	for (var x=1; x<=num; x++) {
// 		document.getElementById('test').innerHTML += '* <br>';
// 	}
// }


function draw() {
	document.getElementById('test').innerHTML = '';
	var num	= document.getElementById('number').value;
	for (var y=0; y<num; y++){
		for (var x=0; x<num; x++) {
			document.getElementById('test').innerHTML += ' *';
			console.log("x: " + x + "; y: " + y);
		}
		document.getElementById('test').innerHTML += '<br>';
	}
}

