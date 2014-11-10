<?php 
	require_once (__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password, $database); //calls the fucntions host, username, password and database

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); //calls the class title from form.php
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); //calls the class post from the file form.php

	$query = $connection->query("");

 ?>