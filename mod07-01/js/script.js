function changeMeToNumber() {
	var x = 101;
	document.getElementById("firstVar").innerHTML = x;
}

function getNewName() {
	var name = "Juan dela Cruz";
	document.getElementById("secondVar").innerHTML = name;
}

function welcome() {
	var message = "Welcome to JavaScript programming!!!";
	document.getElementById("thirdVar").innerHTML = message;
}


/*

Expressions

*/


var var1 = parseInt(document.getElementById("var1").value);
var var2 = parseInt(document.getElementById("var2").value);
var result = 0

document.getElementById("var1").value = int(var1);
document.getElementById("var2").value = int(var2);
document.getElementById("result").innerHTML = result;

function addThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 + var2;
	document.getElementById("result").innerHTML = result;
}


function subtractThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result	= var1 - var2;
	document.getElementById("result").innerHTML = result;
}


function multiplyThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 * var2;
	document.getElementById("result").innerHTML = result;
}

function divideThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result	= var1 / var2;
	document.getElementById("result").innerHTML = result;
}

function modulateThem() {
	var1 = parseInt(document.getElementById("var1").value);
	var2 = parseInt(document.getElementById("var2").value);
	result = var1 % var2;
	document.getElementById("result").innerHTML = result;
}