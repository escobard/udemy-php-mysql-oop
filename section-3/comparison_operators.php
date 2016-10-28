<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comparison Operators</title>
</head>
<body>

<!-- Operator samples
  <h2>Comparison Operators</h2>
  <pre>
      
      equal ==
      identical ===
      compare > <  >= <= <>
      not equal !=
      not identical !==
      
</pre>

 <h2>Logical Operators</h2>
  <pre>
      
     And &&
     Or  ||
    Not  !
      
</pre>-->

<?php 

/* =========================================

standard comparison operator - if statement 

===========================================*/

// less than comparison. this returns false
if (4 < 4) {
	echo "it is true";
}

// less than comparison. this returns true
if (4 > 4) {
	echo "it is true";
}

// less than or equal comparison. this returns true
if (4 <= 4) {
	echo "it is true";
}

// equal to comparison. this returns true
if (4 == 4) {
	echo "it is true";
}

// not equal to  comparison. this returns false
if (4 != 4) {
	echo "it is true";
}

// not equal to comparison. this returns true
if (4 != 5) {
	echo "it is true";
}

// identical comparison. this returns true
if (4 === 4) {
	echo "it is true";
}

// identical comparison. this returns false
// because the first 4 is an integer and the second 4 is a string.
// identical comparison must have equal datatypes, and equal values
if (4 === "4") {
	echo "it is true";
}

// equal comparison. this returns true
// because the value of both arguments is the same, regardless of datatype
if (4 == "4") {
	echo "it is true";
}


/* =========================================

logical operators - if statements

===========================================*/

// || is the OR logical operator 
// executes first argument, if argument not true executes next argument that precedes || (or OR) operator
// this is true
if (4 === "4" || 5 < 10 ) {
	echo "it is true";
}

// && is the AND logical operator
// both arguments must be true for if statement to execute
// this is true
if (4 === 4 || 5 < 10 ) {
	echo "it is true";
}


?>

</body>
</html>