<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If Statements</title>
</head>
<body>

<?php 

/*// standard if statement in PHP
if
// arguments go in here. since 3 is less than 10, the if function will trigger
(3 < 10)
// function goes in here. true because arguments is true, displays correctly
{

echo "three is less than ten";

}

// not true because argument returns false
if(3 < 10)
{echo "three is less than ten";}


// standard if / else statement
if(3 < 10)
{echo "three is less than ten";}
else {

echo "three is not less than ten";

} */

// standard if / elseif /else statement
// in an if / elseif statement, if statement argument is tested first
if (3 < 10)
{echo "three is less than ten";}
//elseif is a single word unlike javascript's else if
//elseif argument is tested after if statement. elseif statement ONLY runs if if statement is false
elseif (4 > 5) {

	echo "of course four is less than five";

}

// if both the if statement and the elseif statements are false, the else statement will execute
else {echo "three is not less than ten";}
?>


</body>
</html>