<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function Parameters</title>
</head>
<body>
<?php 

// declares a function with parameters
function greeting($message){
// echoes function arg
	echo 'This is the message: ' . $message . '<br>';

};

// PHP has a strict order of operations, variables must be declared before being called
$message = "Hello student";

// calls the function, sets the function's argument $message variable value


// calls the function with a variable
// as with JS, the func. argument variables take the same order as 
function calculate($number, $secnumber){

$sum = $number * $secnumber;

echo 'This is the sum: ' . $sum;

};


// this calls both functions, rendering the values to the DOM
greeting($message) . calculate(12, 24);

?>	

</body>
</html>