<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach loops</title>
</head>
<body>

<?php 

// for each loop is built to search arrays in PHP
// Only works with arrays

$numbers =  array(223,112,3442,231235,3246,922);

// for each loops explained
foreach (
	// the first value would be the array
	$numbers
	// assigns the $number variable to each array value
	as $number) {

	// since each value of the array is assigned the $number variable, the loop executes the same number of times as the number of total variables within the $numbers array.
	// in this case, this loop will run 6 times since there are 6 total values in the $numbers array
	echo $number . "<br>";
}

?>

</body>
</html>