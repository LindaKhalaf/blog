<?php 
	require_once (__DIR__ . "/../model/config.php");

	//$connection = new mysqli($host, $username, $password, $database); //calls the fucntions host, username, password and database


	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //calls the class title from form.php
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //calls the class post from the file form.php
	$date = new DateTime('today');//date varriable
	$day = new DateTime('now');//time varriable

	// echo "<p>Title: $title</p>"; //calls the function title
	// echo "<p>Post: $post</p>"; //calls the function post
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = 'post'");//posts the post

	if($query){
		echo "<p>$title</p>";//this lets me know that post is posted
		echo "<p>$post</p>";
		echo $date->format('d-m-y') . "\n";//echos date
		echo $day->format('G:i:s');//echos time
	} else{
			echo "<p>$connection->error</p>";//if there is an error, this will echo it
	}

	$connection->close();

 ?>