
<?php 
// creates an if statement to check if the $_POST superglobal variable is null or not
// isset checks if the variable is null, more on that here : http://php.net/manual/en/function.isset.php
// the action of the form, which is forms.php, is submited via a POST method. The method forms.php, is this document, which
// is reloaded loaded when the form submits
if (isset($_POST['submit'])) {
	echo "form works";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms in PHP</title>
</head>
<body>
<form action="forms.php" method="post">
	<input type="text" name="name" placeholder="Enter Username">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" name="submit">
</form>


</body>
</html>