<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php 

// declaring a function

function say_Something (){

	echo 'Hello, testing a function, other functions echoed below' . '<br>';
	echo 'this is the calculate function' . calculate() . '<br>';
	echo "this is the text function" . text() . '<br>';

}

function calculate(){

	echo 4455+1000;
}

function text(){

	echo 'testing text string';

}

// funciton must be called to render in the DOM, exactly like JS
say_Something();

?>

</body>
</html>