<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays in PHP</title>
</head>
<body>
<?php 


$numberList = array(); // this literally creates an array function


$numberList = array(32,23,44231,22,1332,22313,21505123); // allows for multiple data values to be attached to a single variable

$numberList = array(32,23,'44231',22,1332,"22313",21505123, 322.11,'<h1>Hello</h1>'); // allows for multiple types of data values in the variable.

// each array values, each of them, are called indexes. 
echo $numberList; // this causes an error, when calling an array variable, the variable's index value must be called, otherwise it will cause an error.

echo $numberList[0];// the value within the brackets calls the array indexes. starting at 0. in this case, the value of 0 = 32, of 1 = 23, 3 = '44231', etc

print_r($numberList);// prints all the values, and the corresponding indexes for each array.
?>
</body>
</html>