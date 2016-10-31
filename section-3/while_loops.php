<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While Loops</title>
</head>
<body>
	
<?php 

// create a counter variable that increments every time the while loop runs


/*// while loops. 
while (4 < 10) {

// this means that as long as 4 is less than 10, the while loop statement will execute.
// In other words, we just created an infinite loop, that continues running forever. 
	echo "Hello Teachers";

// could break after first stament, which i one way to end a while loop.
// break;
} */

// create a counter variable that increments every time the while loop runs
$counter = 0;

// this means that as long as counter is less than 10, the while loop statement will execute.
// while loops are used to do things multiple times depending on the argument
while ($counter <= 10) {
	echo $counter . "<br>";

// To stop the infinite loop, we have incremented the counter variable by 1 every time the loop is executed.
// with this method, this while loop runs 10 times before it stops.
// $counter = $counter + 1; is another way of incrementing the variable, but the increment function is smarter

// used an increment operator instead, which is the built in function for incrementation
    $counter++;
}

?>
</body>
</html>