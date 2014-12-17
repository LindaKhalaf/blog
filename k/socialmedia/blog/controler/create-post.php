<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="../css/stylesheets/main.css">
	<link rel="stylesheet" href="css/stylesheets/bootstrap.min.css">
<?php 
	require_once (__DIR__ . "/../model/config.php");

	$connection = new mysqli($host, $username, $password, $database); //calls the fucntions host, username, password and database


	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //calls the class title from form.php
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //calls the class post from the file form.php
	$date = new DateTime('today');//date varriable
	//$date = filter_input(INPUT_POST, "today", FILTER_SANITIZE_STRING);
	$time = new DateTime('America/Los_Angeles');//time varriable
	//$time = filter_input(INPUT_POST, "America/Los_Angeles", FILTER_SANITIZE_STRING);

	// echo "<p>Title: $title</p>"; //calls the function title
	// echo "<p>Post: $post</p>"; //calls the function post
	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title' , post = '$post'");//posts the post

	if($query){
		//for date and time posting
		echo "<center><div id='image'>";
				echo "<a class='link' href='/../socialmedia/blog/index.php'>Back To Blog!!</a>";
		echo "<p>Your post was  posted on: " 
			. $date->format("D M" . " " . "d Y") 
			. " at " 
			. $time->format(" h:s ") 
			. "</p>";
			//posts title
		echo "<div id='title_text'>
						<p>Title: $title</p>
					</div>";
		//posts post
		echo "<div id='post_text'>
			<p>Post: $post</p>
		</div>";
		echo "</div></center>";
	} else{
			echo "<p>". $query = $_SESSION["connection"]->error . "</p>";//if there is an error, this will echo it
		}

	//$connection->close();

 ?>
 <!--my javascript -->
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 	<script type="text/JavaScript" src="../javascript/bootstrap.js"> </script>
 	<script type="text/JavaScript" src="../javascript/npm.js"> </script>
 </html>
