<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP scope</title>
</head>
<body>

<?php 

// global variable

$x = "outside";

function convert(){

// using the following built in function we can declare a variable to be global, meaning it can be used within the function the global
// parameter is used
global $x;

// local variable - only available inside the function, exactly like JS
	$x = "inside";

}

function secConvert(){

// if global is not defined, $x's value will remain the same as declared in convert, as the $x global variable is not defined wihtin the secConvert function's local scope
// global $x;

// local variable - only available inside the function, exactly like JS
	$x = "inside again";

}

// echos global

echo $x . '<br>';

// then function is called, thefore the value of x is changed since the convert function changes the value of $x
// order of operation is SUPER important in PHP, not like the loosely defined OOP of JS
convert();

echo $x . '<br>';

secConvert();

echo $x . '<br>';

?>

</body>
</html>