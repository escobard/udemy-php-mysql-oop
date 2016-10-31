<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP */

$ifcondition = 1;

if ( $ifcondition >= 10) {
	echo $ifcondition . " is more than or equal to 10";
}
elseif ($ifcondition == 10) {
	echo $ifcondition . " is equal to 10";
}
else {
	echo "I love PHP" . "<br>";
};

	/* Step 2: Make a forloop  that displays 10 numbers */

for ($i=0; $i < 10; $i++) { 
	echo $i . "<br>";
}

	/*Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

$switch_condition = 10;
switch ($switch_condition) {
	case 3:
		echo "the switch variable currently equals 3";
		break;
	case 4:
		echo "the switch variable currently equals 4";
		break;
	case 5:
		echo "the switch variable currently equals 5";
		break;
	case 6:
		echo "the switch variable currently equals 6";
		break;
	case 7:
		echo "the switch variable currently equals 7";
		break;
	default:
		echo "the switch variable currently equals " . $switch_condition;
		break;
}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>