<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Math Functions in PHP</title>
</head>
<body>
	
<?php 

// this is the power function of PHP
// the first argument is the value, the second argument is the argument. In this case, it would be 2 to the 7th power, equaling 128
echo pow(2, 7);

// this is the PHP random function
// if left empty it will generate a straight up random number without limits
echo '<br>' . rand();

// with arguments, the rand() function selects a random number between the first and second argument
echo '<br>' . rand(1, 100);

// this is the square root PHP function, square roots the first argument
echo '<br>' . sqrt(100);

// this is the celing PHP function, which rounds up a decimal to an integer 
echo '<br>' . ceil(4.82);

// this is the floor PHP function, which rounds down a decimal to an integer 
echo '<br>' . floor(4.82);

// this is the round PHP function, which rounds a decimal to an integer depending on its value, as normal math does.
// if its 4.4 it rounds down to a 4 if its 4.5 it rounds up to a 5 automatically
echo '<br>' . round(4.4) .' <--- round 4.4 | 4.5 round -----> '. round(4.5);

?>

</body>
</html>