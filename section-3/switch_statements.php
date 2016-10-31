<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch Statements</title>
</head>
<body>
	
<?php 
/*
//basic switch statement
//Useful for testing one condition against multiple values
// if we wanted to test multiple arguments for a single variable
$number = 4;

if($number <10){
	echo "this";
}

elseif($number => 10){
	echo "this";
}

elseif($number > 5){
	echo "this";
}
// but this doesn't work well as it creates too many if statements, taking up too much memory. for one condition with different values, write a switch statement */

$number = '10';
switch ($number) {
	// if $number is a string containing 34, echo first case
	case '34':
		// case statement
		echo "is it 34";
		// a break must be added at the end of each break, otherwise the next case will run
		break;
	// if $number is 24, echo second case
	case '24':
		echo "is it 24";
		break;
	case '14':
		echo "is it 14";
		break;	
	// if none of the cases are true, the default statement will run
	default:
		echo "we could not find anything";
		break;
}
?>

</body>
</html>