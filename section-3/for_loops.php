<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For loops</title>
</head>
<body>

<?php 

// for loops
// different than while loops because the incremental variable is created inside of the loop, and the increment function is added to the loop argument
// for loop explained
for (
	// this is the index
	$counter = 0; 
	// this is the condition
	$counter <= 10;
	// this is the increment
	$counter++) { 
	echo "<h2>" . $counter . "</h2>" . "<br>";
}

?>

</body>
</html>