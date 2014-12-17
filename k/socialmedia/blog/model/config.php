<?php 
	require_once(__DIR__ . "/Database.php");
	session_start();//starts our session
	session_regenerate_id(true);//kepps out id in place

	$path = "/socialmedia/blog/"; //keeps us within the folder socialmedia
	//our database varrriables
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database =  "blog_db";

	if(!isset($_SESSION["connection"])) {//makes sure that our session connection is working
		$connection = new Database($host, $username, $password, $database);//allows us to use the connection here and not haveing to re write it over again
		$_SESSION["connection"] = $connection;
	}

?>