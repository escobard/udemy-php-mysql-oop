<?php 
// creates an if statement to check if the $_POST superglobal variable is null or not
// isset checks if the variable is null, more on that here : http://php.net/manual/en/function.isset.php
// the action of the form, which is forms.php, is submited via a POST method. The method forms.php, is this document, which
// is reloaded loaded when the form submits
// the form method 'post' pushes the values of the form into the $_POST super global, where we can grab them

if (isset($_POST['submit'])) {

	echo "form works!".'<br>'.'<a href="form_external.php">Go back</a>'.'<br>';
	
	// grabs the values of the name, places it in a variable.
	$name = $_POST['name'];
	$password = $_POST['password'];
	$names = ['Edwin', 'Student', 'Maria', 'Peter', 'Jane', 'Tom', 'Samid'];
	
	// this is the form validation function
	// strlength checks the length / number of characters in a string
	// can also set a variable for the minimum to be more dynamic
	$min = 5;
	$max = 15;

	if (strlen($name) < $min) {
		
		echo 'Username must be longer than 5'.'<br>';

	} else if (strlen($name) > $max) {
		echo 'Username cannot be longer than 15'.'<br>';
	} 
	 else {
		echo 'Username is length valid!'.'<br>';
	}
	// the in_array function checks if an array contains the first argument's value within the second argument's array
	// Split into a different if statement, so that if the username is not within the array it will echo its own statement outside
	// of the validation chain
	if(!in_array($name, $names)){
		echo 'Invalid username!'.'<br>';
	}
	/*echo 'This is the name: '.$name.'<br>';
	echo 'This is the password: '.$password.'<br>'; */



}

?>