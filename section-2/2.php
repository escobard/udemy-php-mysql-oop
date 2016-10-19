<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php

//Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

$number1 = 10;
$number2 = 20;

//Step 2: Add the two variables and display the sum with echo:

echo 'Step 2: Step 1 Variable addition:' . '<br>';
echo $number1 + $number2 . '<br><br>';

//Step3: Make 2 Arrays with the same values, one regular and the other associative

		
$arrayNormal = array('value1', 'value2');
$arrayAssoc = array('first_value' => 'value1','second_value' => 'value2');

echo 'Step 3: Normal Array:'. '<br>';

print_r($arrayNormal);

echo '<br><br>';

echo 'Step 3: Associative Array:'. '<br>';

print_r($arrayAssoc);

		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>