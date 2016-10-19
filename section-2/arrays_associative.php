<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Associative Arrays</title>
</head>
<body>

<?php 


$number = array(332,'value2','<h2>WOW</h2>'); // avarage array with values 

echo $number[2] . "<br>"; //echoes the last array value data index, or key to call that data, which echoes WOW, and a line break after the concatenation. 

print_r($number);

$numberAssociated = array("first_name" => 'Edwin', "last_name" => 'Diaz'); // associative array has labels, not index values. Each label is called a key, which has an associated data value that is called to whenever the key is called. 

print_r($numberAssociated);

echo $numberAssociated['first_name'] . " " . $numberAssociated['last_name']; // calls the array data value attached to the key 'first_name', in this case its 'Edwin'

?>

</body>
</html>