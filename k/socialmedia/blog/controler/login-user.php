<html>
<head><link rel="stylesheet" href="/../socialmedia/blog/css/stylesheets/main.css"></head>


<?php 
	require_once(__DIR__ . "/../model/config.php");


	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");

	if($query->num_rows == 1){
		$row = $query->fetch_array();

		if($row["password" === crypt($password, $row["salt"])]){//this makes sure that our password is correct
			$_SESSION["authenticated"] = true;//this si to make sure that we are who we say we are
			echo "<div id='image' class='height'><center><div id='create_'> Login Sucessful! :D</div></center> <a class='linky' href='/../socialmedia/blog/index.php'>Back to index</a>";//lets us know if we logged in or not
		} else{
			echo "<p>Invalid username and password</p>";//lets us know id login didnt work
		}
	}else{
			echo "<p>Invalid username and password</p>";
		}
?>
</html>