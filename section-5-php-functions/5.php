<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
<?php 

// Step1: Use a pre-built math function here and echo it
// with arguments, the rand() function selects a random number between the first and second argument
echo 'Here is a random number:' . rand(1, 100). '<br>';

// Step 2:  Use a pre-built string function here and echo it
$string = 'Hello Edwin, I like the class';

// this is the built in function, strlen() returns the length of the characters within a string
echo 'Here is the length of a string: '.strlen($string). '<br>';

// Step 3:  Use a pre-built Array function here and echo it

$list = [31,222,311,12312,2222,1231,332];
// this is the PHP function to sort an array, from lowest value to highest value, this does not echo / print the values
sort($list) . '<br>';

// this is the PHP function to print out an array, and the key of each value - this is affected by the sort() function above;
echo'Here is a sorted array: ';
print_r($list) . '<br>';
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>