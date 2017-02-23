<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array functions in PHP</title>
</head>
<body>

<?php 

// for a full reference of PHP functions, head to : http://php.net/manual/en/ref/array.php

// in the old lessons, we used old PHP array declarations.
// the newer PHP versions are exactly like JS array declarations, like so:
$list = [31,222,311,12312,2222,1231,332];

// this is the PHP function to echo the max value within the array
echo max($list) . '<br>';

// this is the PHP function to echo the min value within the array
echo min($list) . '<br>';


// this is the PHP function to sort an array, from lowest value to highest value, this does not echo / print the values
sort($list) . '<br>';

// this is the PHP function to print out an array, and the key of each value - this is affected by the sort() function above;
print_r($list) . '<br>';

?>

</body>
</html>