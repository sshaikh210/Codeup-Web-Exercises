(function(){

'use strict';
var numberButtons = document.getElementsByClassName('number');
var operatorButtons = document.getElementsByClassName('operator');
var firstInput = document.getElementById('firstinput');
var secondInput = document.getElementById('secondinput');
var thirdInput = document.getElementById('thirdinput');
var total = document.getElementById('total');
var equal = document.getElementById('equal');

function display () {
	var value = this.getAttribute('data-value');
	if (secondInput.value == '') {
		firstInput.value += (this.getAttribute('data-value'));
		console.log(firstInput.value);
	} else {
		thirdInput.value += (this.getAttribute('data-value'));
	} 
}
document.getElementById('clear').addEventListener('click', clear, false);

function clear() {
	location.reload();
}

function displayOperator() {
	// secondInput.setAttribute('value', this.getAttribute('data-value')); same as below
	secondInput.value=this.getAttribute('data-value');
}

equal.addEventListener('click', displayTotal, false);
function displayTotal(event) {

	var firstValue = parseInt(firstInput.value);
		console.log(firstValue);
	var thirdValue = parseInt(thirdInput.value);
		console.log(thirdValue);
	if (secondInput.value === '/') {
		total.value = (firstValue / thirdValue);
	} else if (secondInput.value === '*') {
		total.value = (firstValue * thirdValue);
	} else if (secondInput.value === '+') {
		total.value = (firstValue + thirdValue);
	}  else if (secondInput.value === '-') {
		total.value = (firstValue - thirdValue);
	}
}

for (var i = 0; i < operatorButtons.length; i++) {
	operatorButtons[i].addEventListener('click', displayOperator, false);
}
for (var i = 0; i < numberButtons.length; i++) {
	numberButtons[i].addEventListener('click', display, false);
}
})();

