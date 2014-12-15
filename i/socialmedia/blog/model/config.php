<?php 
	require_once(__DIR__ . "/Database.php");
	session_start();

	$path = "/socialmedia/"; //keeps us within the folder socialmedia

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database =  "blog_db";
	// $date = "today";

	if(!isset($_SESSION["connection"])) {
		$connection = new Database($host, $username, $password, $database);//allows us to use the connection here and not haveing to re write it over again
		$_SESSION["connection"] = $connection;
	}

?>