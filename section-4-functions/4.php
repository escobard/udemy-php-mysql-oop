<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

/*  Step1: Define a function and make it return a calculation of 2 numbers*/

	function unCalc(){
		return $value = 'HELLO';
	}

	function calculation($num1, $num2){
		return $sum = $num1 + $num2;
	}
	echo 'this is the unCalc function: ' . unCalc() . '<br>';
	echo '---------------------------------' . '<br>';
	echo 'this is the calculation function: ' . calculation(322, 999) . '<br>';
	/*

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>