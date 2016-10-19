<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Math PHP exploration</title>
</head>
<body>

<?php 

echo 56 + 45; // can do calculations with spaces between each variable

echo 56+45; // with no spaces

echo 56+ 45; // with single space between variables

echo "<br>"; // space between equations

echo 56 - 45; // substractions

echo "<br>"; // space between equations

echo 56 * 45; // multiplications

echo "<br>"; // space between equations

echo 56 / 45; // division - data becomes a floating number

echo "<br>"; // space between equations

echo 45 + 34 * 45 / 425 - 45; // will do a calculation - without too much order of operation structure. 

echo "<br>"; // space between equations

echo 5 + 5 * 10; // order of operation - makes this operation wonky - as it stands it multiplies 10 x 5 then adds 5 equaling 55. multiplication goes BEFORE addition

echo 5 + 5 / 10 * 5; // order of operation - division also goes before addition , and before multiplication - this equals 15 in php and 20 on a normal calculator. always wrap math operations in parenthesis, to do proper math. VERY important

echo "<br>"; // space between equations

echo (5 + 5) * 10; // order of operation - proper order of operation, using basic algebra . does calculations in brackets first, then the operation on the right

echo "<br>"; // space between equations

// variable calculation

$number1 = 12;
$number2 = 24;

echo $number1 + $number2; // adds the two variables

?>

</body>
</html>