<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String functions for PHP</title>
</head>
<body>


<?php 

// for a full reference of PHP functions, head to : http://php.net/ref.strings


$string = 'Hello Edwin, I like the class';

// this is the built in function, strlen() returns the length of the characters within a string
echo strlen($string);

// this is the built in function to turn all the characters within a string to uppercase
echo '<br>' . strtoupper($string);

// this is the built in function to turn all the characters within a string to lowercase
echo '<br>' . strtolower($string);

// an alternative to echo is print, which outputs strings only

print ('HELLO');

// or

print $string;

// or

print 'HELLO';

?>

</body>
</html>