<?php 
	require_once (__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database); //calls the fucntions host, username, password and database

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //calls the class title from form.php
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //calls the class post from the file form.php

	// echo "<p>Title: $title</p>"; //calls the function title
	// echo "<p>Post: $post</p>"; //calls the function post
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = 'post'");

	if($query){
		echo "<p>Successfully inserted post: $title</p>";
	} else{
			echo "<p>$connection->error</p>";
	}

 ?>