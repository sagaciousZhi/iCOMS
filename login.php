<?php 
include 'core/init.php';


if (empty($_POST=== true)) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username)=== true || empty($password)=== true){
		$errors[] = 'You need to enter a username and password';
	} else if (user_exists($username) === false) {
		$errors[] = 'We cannot find username. Have you registered?';
	} elseif (user_active($username) === false) {
		$errors[] = 'Account not activted';
	} else {
		//here
	}

	print_r($errors);
}
?>