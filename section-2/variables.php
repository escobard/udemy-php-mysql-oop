<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables PHP</title>
</head>
<body>
<?php 

// correct variable formats

$name; //undefined variable

$name = "Edwin"; // variable value - string double quote

$name = 'Edwin'; // variable value - string single quote

$number = 100; // variable integer - no quotes recognizes variable as a number

$number = 100.5; // floating point number - takes more memory, keep in mind

$NUMBER; // different variable, case sensitive.

$Nu_mber; // characters.

$number_list // accepted and well used format.

$numberList // cammel variables like in javascript

// incorrect variable formats

$num-ber= 400; // mistakes for substraction

$0number // bad format, does not accept

echo $name; // echos the name variable's value, so Edwin

// php concatenation - putting datas together

echo $name . $number; // this = Edwin100

echo $name . "" . $number; // this = Edwin 100 - because of the empty string

$name = "<h1> HELLO </h1>" // html tag within a string, assigned to the $name ariable. values can be re-assigned to variable. Variables only take one value at a time. 
?>
</body>
</html>