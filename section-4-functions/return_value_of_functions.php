<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Returning function values</title>
</head>
<body>

<?php 

function addNumbers($num1, $num2){

	$sum = $num1 + $num2;

	return $sum;

}

$firstnumber = 22;
$secondnumber = 34;

$result = addNumbers($firstnumber, $secondnumber);

echo $result;

$result2 = addNumbers(49, 212);

echo '<br>' . $result2;


// functions can be used again and again indefinetly, just like in JS, although with PHP no 'new' definition is needed to call a 
// new function object. each function object.
$result3 = addNumbers($result, $result2);

echo '<br>' . $result3;

?>

</body>
</html>