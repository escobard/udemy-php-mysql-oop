<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Constants</title>
</head>
<body>

<?php 

// standard variable, which can be called and redeclared 
$variable = 'value';

// the following built in function 	defines a constant in PHP, much like a const in JS it cannot be changed after being declared
// the first argument is the value of the constant, in this case 'NAME'
// the second argument of the constant is the value in this case 'ERWIN'
define("NAME", "ERWIN");

// the const can now be called by it's name, globally if defined outside a function scope, like this.
// constants are called without the usual $ of variables, this kind of explains how WordPress constants are called within documents
echo 'this is a variable: ' . $variable .  '<br>' . 'this is a constant: ' . NAME;

?>

</body>
</html>