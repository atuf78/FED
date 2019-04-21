inputField = document.getElementById('test');
header = document.getElementById('header');
var firstNum;
var secondNum;
var headerSum;
var isAnswered;
function append(userInput){
	if(userInput == '+' || userInput == '-' || userInput == '*' || userInput == '/' || userInput == '='){
		if(userInput == '='){
		userInput = inputField.innerHTML;
		inputField.innerHTML = '';
		headerSum = userInput+' =';
		header.innerHTML = headerSum;
		isAnswered = true;
		userInput = eval(userInput);
		} else {
		userInput = ' '+userInput+' ';
		}
		inputField.innerHTML += userInput;

	} else {
		if(inputField.innerHTML.charAt(0) == '0' || isAnswered == true){
			isAnswered = false;
			inputField.innerHTML = userInput;
		} else inputField.innerHTML += userInput;
	}
}

function ac(){
	inputField.innerHTML = '0';
	header.innerHTML = '';

}
