<?php 
	require_once(__DIR__ . "/../model/config.php");

	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	//echo $email . " - " . $username . " - " . $password;

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";//this makes sure our password is secure

	$hashedPassword = crypt($password, $salt);//combinds our salt and password

	$query = $_SESSION["connection"]->query("INSERT INTO users SET email = '$email',username = '$username',password = '$hashedPassword', salt = '$salt'");//calls all function
	if($query){
		echo "Successfully created user: $username";//yay we created a username!
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
 ?>