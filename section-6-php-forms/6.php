
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */
	if (isset($_POST['submit'])) {
		echo 'Form is valid'.'<br>';
		$name = $_POST['name'];
		if (strlen($name) < 5) {
			echo 'Name must be longer than 5';
		}else if (strlen($name) > 5){
			echo 'Name is valid!';
		}else{
			echo 'Name is valid!';
		}
		# code...
	}
	
?>
<form action="6.php" method="post">
	<input type="text" placeholder="enter your name" name="name">
	<input type="submit" name="submit">
</form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>